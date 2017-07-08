<?php

class ContactController extends Controller
{
    public function actionIndex()
    {
        $model = new Feedback();
        if ($data = Yii::app()->request->getPost('Feedback')) {
            $model->attributes = $data;
            if ($model->validate()) {
                $model->send();
                $this->refresh();
            }
        }
        $o_page = Contact::model()->findByPk(1);
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