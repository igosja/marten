<?php

class PagepaymentController extends AController
{
    public $h1 = 'Оплата и доставка';
    public $h1_edit = 'Оплата и доставка';
    public $title = 'Оплата и доставка';
    public $model_name = 'PagePayment';

    public function actionIndex()
    {
        $model = $this->getModel()->findByPk(1);
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $this->breadcrumbs = array(
            $this->title,
        );
        $this->render('index', array('model' => $model));
    }

    public function actionUpdate()
    {
        $this->h1 = $this->h1_edit;
        $model = $this->getModel()->findByPk(1);
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        if ($data = Yii::app()->request->getPost($this->model_name)) {
            $model->attributes = $data;
            if ($model->save()) {
                $this->redirect(array('index'));
            }
        }
        $this->breadcrumbs = array(
            $this->title => array('index'),
        );
        $this->render('form', array('model' => $model));
    }

    public function getModel($search = '')
    {
        $model = new $this->model_name($search);
        return $model;
    }
}