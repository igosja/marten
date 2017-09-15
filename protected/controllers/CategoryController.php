<?php

class CategoryController extends Controller
{
    public function actionIndex()
    {
        $this->redirect(array('index/index'));
    }

    public function actionView($id)
    {
        $o_category = Category::model()->findByAttributes(
            array('url' => $id)
        );
        if (!$o_category) {
            $this->redirect(array('index'));
        }
        $this->setSEO($o_category);
        $this->og_image = ImageIgosja::resize($o_category['image_id'], 608, 608);
        if ($o_category['parent_id']) {
            $o_parent = Category::model()->findByPk($o_category['parent_id']);
            if ($o_parent) {
                $this->breadcrumbs[$o_parent['h1_' . Yii::app()->language]] = array('view', 'id' => $o_parent['url']);
            }
        }
        $this->breadcrumbs[] = $o_category['h1_' . Yii::app()->language];
        $a_category = Category::model()->findAllByAttributes(
            array('status' => 1, 'parent_id' => $o_category->primaryKey)
        );
        if ($a_category) {
            $a_review = Review::model()->with(array('product.a_category.category' => array(
                'condition' => 'parent_id=' . $o_category->primaryKey),
            ))->findAllByAttributes(
                array('status' => 1),
                array('condition' => 'product.h1_ru is not null', 'order' => 't.id DESC', 'limit' => Review::ON_PAGE_CATEGORY)
            );
            $count = Review::model()->with(array('product.a_category.category' => array(
                'condition' => 'parent_id=' . $o_category->primaryKey),
            ))->countByAttributes(array('status' => 1), array('condition' => 'product.h1_ru is not null'));
            $more = false;
            if ($count > count($a_review)) {
                $more = true;
            }
            $this->render('category', array(
                'a_category' => $a_category,
                'a_review' => $a_review,
                'more' => $more,
                'o_category' => $o_category,
            ));
        } else {
            $a_product = ProductCategory::model()->with('product')->findAllByAttributes(
                array('category_id' => $o_category->primaryKey), array('condition' => 'product.h1_ru is not null', 'order' => '`order`')
            );
            $a_review = Review::model()->with(array('product.a_category' => array(
                'condition' => 'category_id=' . $o_category->primaryKey
            )))->findAllByAttributes(
                array('status' => 1),
                array('condition' => 'product.h1_ru is not null', 'order' => 't.id DESC', 'limit' => Review::ON_PAGE_CATEGORY)
            );
            $count = Review::model()->with(array('product.a_category' => array(
                'condition' => 'category_id=' . $o_category->primaryKey),
            ))->countByAttributes(array('status' => 1), array('condition' => 'product.h1_ru is not null'));
            $more = false;
            if ($count > count($a_review)) {
                $more = true;
            }
            $this->render('product', array(
                'a_product' => $a_product,
                'a_review' => $a_review,
                'more' => $more,
                'o_category' => $o_category,
            ));
        }
    }

    public function actionMore($id)
    {
        $a_category = Category::model()->findAllByAttributes(
            array('status' => 1, 'parent_id' => $id)
        );
        if ($a_category) {
            $a_review = Review::model()->with(array('product.a_category.category' => array(
                'condition' => 'parent_id=' . $id),
            ))->findAllByAttributes(
                array('status' => 1),
                array(
                    'condition' => 'product.h1_ru is not null',
                    'order' => 't.id DESC',
                    'offset' => Yii::app()->request->getQuery('offset', 0) + Review::ON_PAGE_CATEGORY,
                    'limit' => Review::ON_PAGE_CATEGORY
                )
            );
        } else {
            $a_review = Review::model()->with(array('product.a_category' => array(
                'condition' => 'category_id=' . $id),
            ))->findAllByAttributes(
                array('status' => 1),
                array(
                    'condition' => 'product.h1_ru is not null',
                    'order' => 't.id DESC',
                    'offset' => Yii::app()->request->getQuery('offset', 0) + Review::ON_PAGE_CATEGORY,
                    'limit' => Review::ON_PAGE_CATEGORY
                )
            );
        }

        for ($i = 0; $i < count($a_review); $i++) {
            if (0 == $i % 2) {
                print '<div class="clearfix">';
            }
            $this->renderPartial('review', array('item' => $a_review[$i]));
            if (1 == $i % 2 || $i + 1 < count($a_review)) {
                print '</div>';
            }
        }
    }

    public function actionCheck($id)
    {
        $a_category = Category::model()->findAllByAttributes(
            array('status' => 1, 'parent_id' => $id)
        );
        if ($a_category) {
            $count = Review::model()->with(array('product.a_category.category' => array(
                'condition' => 'parent_id=' . $id),
            ))->countByAttributes(
                array('status' => 1), array('condition' => 'product.h1_ru is not null')
            );
        } else {
            $count = Review::model()->with(array('product.a_category' => array(
                'condition' => 'category_id=' . $id),
            ))->countByAttributes(
                array('status' => 1), array('condition' => 'product.h1_ru is not null')
            );
        };
        $offset = (int)Yii::app()->request->getQuery('offset', 0) + Review::ON_PAGE_CATEGORY;
        $remove = false;
        if ($count <= $offset + Review::ON_PAGE_CATEGORY) {
            $remove = true;
        }
        print CJSON::encode(array('remove' => $remove, 'offset' => $offset));
    }
}