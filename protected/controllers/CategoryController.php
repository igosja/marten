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
        $this->breadcrumbs[] = $o_category['h1_' . Yii::app()->language];
        $a_category = Category::model()->findByAttributes(array('status'=>1, 'parent_id'=>$o_category->primaryKey));
        if ($a_category) {
            $this->render('child', array(
                'a_category' => $a_category,
                'o_category' => $o_category,
            ));
        } else {
            $this->render('product', array(
                'o_category' => $o_category,
            ));
        }
    }
}