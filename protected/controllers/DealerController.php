<?php

class DealerController extends Controller
{
    public function actionIndex()
    {
        $model = new Dealer();
        if ($data = Yii::app()->request->getPost('Dealer')) {
            $model->attributes = $data;
            if ($model->validate()) {
                $model->send();
                $this->refresh();
            }
        }
        $o_page = PageDealer::model()->findByPk(1);
        $this->setSEO($o_page);
        $this->breadcrumbs = array(
            $o_page['h1_' . Yii::app()->language],
        );
        $this->render('index', array(
            'model' => $model,
            'o_page' => $o_page,
        ));
    }
}