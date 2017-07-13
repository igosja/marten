<?php

class CategoryController extends Controller
{
    public function actionIndex()
    {
        $this->redirect(array('site/index'));
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
            $this->render('category', array(
                'a_category' => $a_category,
                'o_category' => $o_category,
            ));
        } else {
            $a_product = Product::model()->findAllByAttributes(
                array('status' => 1, 'category_id' => $o_category->primaryKey)
            );
            $this->render('product', array(
                'a_product' => $a_product,
                'o_category' => $o_category,
            ));
        }
    }
}