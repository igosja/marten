<?php

class ProductController extends Controller
{
    public function actionIndex()
    {
        $this->redirect(array('index/index'));
    }

    public function actionView($id, $category_id = 0)
    {
        $model = new Review();
        if ($data = Yii::app()->request->getPost('Review')) {
            $model->attributes = $data;
            if ($model->save()) {
                $this->refresh();
            }
        }
        $o_product = Product::model()->findByAttributes(
            array('url' => $id)
        );
        if (!$o_product) {
            $this->redirect(array('index'));
        }
        $a_review = Review::model()->findAllByAttributes(
            array('product_id' => $o_product->primaryKey, 'status' => 1),
            array('order' => 'id DESC', 'limit' => Review::ON_PAGE_PRODUCT)
        );
        $count = Review::model()->countByAttributes(array('product_id' => $o_product->primaryKey, 'status' => 1));
        $more = false;
        if ($count > count($a_review)) {
            $more = true;
        }
        $rating = Review::model()->findByAttributes(
            array('product_id' => $o_product->primaryKey, 'status' => 1),
            array('select' => 'ROUND(AVG(rating)) as rating')
        );
        $this->setSEO($o_product);
        $category_simple = 0;
        if ($category_id) {
            for ($i = 0, $count_simple = count($o_product['a_simple']); $i < $count_simple; $i++) {
                if ($category_id == $o_product['a_simple'][$i]['simple']['category_id']) {
                    $category_simple = $i;
                    break;
                }
            }
        }
        $this->og_image = ImageIgosja::resize(isset($o_product['a_simple'][$category_simple]['simple']['a_image'][0]['image_id']) ? $o_product['a_simple'][0]['simple']['a_image'][0]['image_id'] : 0, 600, 600);
        if ($o_product['a_simple'][$category_simple]['simple']['category_id']) {
            $o_category = Category::model()->findByPk($o_product['a_simple'][$category_simple]['simple']['category_id']);
            if ($o_category) {
                if ($o_category['parent_id']) {
                    $o_parent = Category::model()->findByPk($o_category['parent_id']);
                    if ($o_parent) {
                        $this->breadcrumbs[$o_parent['h1_' . Yii::app()->language]] = array('category/view', 'id' => $o_parent['url']);
                    }
                }
                $this->breadcrumbs[$o_category['h1_' . Yii::app()->language]] = array('category/view', 'id' => $o_category['url']);
            }
        }
        $this->breadcrumbs[] = $o_product['h1_' . Yii::app()->language];
        if (ProductType::TYPE_BOILER == $o_product['producttype_id']) {
            $view = 'boiler';
        } else {
            $view = 'funnel';
        }
        $this->render('view_' . $view, array(
            'a_review' => $a_review,
            'category_simple' => $category_simple,
            'model' => $model,
            'more' => $more,
            'o_product' => $o_product,
            'rating' => $rating,
        ));
    }

    public function actionMore($id)
    {
        $a_review = Review::model()->findAllByAttributes(
            array('status' => 1, 'product_id' => $id),
            array(
                'order' => 'id DESC',
                'offset' => Yii::app()->request->getQuery('offset', 0) + Review::ON_PAGE_PRODUCT,
                'limit' => Review::ON_PAGE_PRODUCT
            )
        );
        foreach ($a_review as $item) {
            $this->renderPartial('review', array('item' => $item));
        }
    }

    public function actionCheck($id)
    {
        $count = Review::model()->countByAttributes(
            array('status' => 1, 'product_id' => $id)
        );
        $offset = (int)Yii::app()->request->getQuery('offset', 0) + Review::ON_PAGE_PRODUCT;
        $remove = false;
        if ($count <= $offset + Review::ON_PAGE_PRODUCT) {
            $remove = true;
        }
        print CJSON::encode(array('remove' => $remove, 'offset' => $offset));
    }

    public function actionImage($id)
    {
        $o_simple = ProductSimple::model()->findByPk($id);
        if (!$o_simple) {
            print '<div class="slider-out"><div class="slider clearfix">';
            print '</div></div><div class="slider-nav">';
            print '</div><a href="javascript:" class="next"></a><a href="javascript:" class="prev"></a>';
        } else {
            print '<div class="slider-out"><div class="slider clearfix">';
            foreach ($o_simple['a_image'] as $item) {
                print '<div><img src="' . ImageIgosja::resize($item['image_id'], 600, 600) . '" alt=""/></div>';
            }
            print '</div></div><div class="slider-nav">';
            foreach ($o_simple['a_image'] as $item) {
                print '<div><img src="' . ImageIgosja::resize($item['image_id'], 600, 600) . '" alt=""/></div>';
            }
            print '</div><a href="javascript:" class="next"></a><a href="javascript:" class="prev"></a>';
        }
    }
}