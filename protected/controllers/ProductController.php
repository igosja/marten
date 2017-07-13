<?php

class ProductController extends Controller
{
    public function actionIndex()
    {
        $this->redirect(array('site/index'));
    }

    public function actionView($id)
    {
        $o_product = Product::model()->findByAttributes(
            array('url' => $id)
        );
        if (!$o_product) {
            $this->redirect(array('index'));
        }
        $this->setSEO($o_product);
        $this->og_image = ImageIgosja::resize(isset($o_product['a_image'][0]['image_id']) ? $o_product['a_image'][0]['image_id'] : 0, 600, 600);
        if ($o_product['category_id']) {
            $o_category = Category::model()->findByPk($o_product['category_id']);
            if ($o_category) {
                if ($o_category['parent_id']) {
                    $o_parent = Category::model()->findByPk($o_category['parent_id']);
                    if ($o_parent) {
                        $this->breadcrumbs[$o_parent['h1_' . Yii::app()->language]] = array('view', 'id' => $o_parent['url']);
                    }
                }
                $this->breadcrumbs[$o_category['h1_' . Yii::app()->language]] = array('view', 'id' => $o_category['url']);
            }
        }
        $this->breadcrumbs[] = $o_product['h1_' . Yii::app()->language];
        $this->render('view', array(
            'o_product' => $o_product,
        ));
    }
}