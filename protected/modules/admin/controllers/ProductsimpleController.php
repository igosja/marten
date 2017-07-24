<?php

class ProductsimpleController extends AController
{
    public $h1 = 'Простые товары';
    public $h1_edit = 'Редактирование товара';
    public $title = 'Простые товары';
    public $model_name = 'ProductSimple';

    public function actionIndex()
    {
        $model = $this->getModel('search');
        $model->unsetAttributes();
        if (isset($_GET[$this->model_name])) {
            $model->attributes = $_GET[$this->model_name];
        }
        $this->breadcrumbs = array(
            $this->title => array('index'),
            'Список',
        );
        $this->render('index', array('model' => $model));
    }

    public function actionUpdate($id = 0)
    {
        $this->h1 = $this->h1_edit;
        if (0 == $id) {
            $model = $this->getModel();
        } else {
            $model = $this->getModel()->findByPk($id);
            if (null === $model) {
                throw new CHttpException(404, 'Страница не найдена.');
            }
        }
        if ($data = Yii::app()->request->getPost($this->model_name)) {
            $model->attributes = $data;
            if ($model->save()) {
                $this->uploadExcel($model->primaryKey);
                $this->redirect(array('view', 'id' => $model->primaryKey));
            }
        }
        $this->breadcrumbs = array(
            $this->title => array('index'),
        );
        if (0 != $id) {
            $this->breadcrumbs[$model->name] = array('view', 'id' => $model->primaryKey);
        }
        $this->render('form', array('model' => $model));
    }

    public function actionView($id)
    {
        $model = $this->getModel()->findByPk($id);
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $this->h1 = $model->name;
        $this->breadcrumbs = array(
            $this->title => array('index'),
            $this->h1,
        );
        $this->render('view', array('model' => $model));
    }

    public function actionDelete($id)
    {
        $model = $this->getModel()->findByPk($id);
        $model->deleteByPk($id);
        $this->redirect(array('index'));
    }

    public function actionStatus($id)
    {
        $model = $this->getModel()->findByPk($id);
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $this->getModel()->updateByPk($id, array('status' => 1 - $model->status));
        $this->redirect(array('index'));
    }

    public function uploadExcel($id)
    {
        if (isset($_FILES['characteristic_ru_excel']['name']) && !empty($_FILES['characteristic_ru_excel']['name'])) {
            $file = $_FILES['characteristic_ru_excel'];
            $file = $file['tmp_name'];
            $table = ExcelHelper::getTable($file);
            $model = $this->getModel()->findByPk($id);
            $model->characteristic_ru = $table;
            $model->save();
        }

        if (isset($_FILES['characteristic_uk_excel']['name']) && !empty($_FILES['characteristic_uk_excel']['name'])) {
            $file = $_FILES['characteristic_uk_excel'];
            $file = $file['tmp_name'];
            $table = ExcelHelper::getTable($file);
            $model = $this->getModel()->findByPk($id);
            $model->characteristic_uk = $table;
            $model->save();
        }

        if (isset($_FILES['size_ru_excel']['name']) && !empty($_FILES['size_ru_excel']['name'])) {
            $file = $_FILES['size_ru_excel'];
            $file = $file['tmp_name'];
            $table = ExcelHelper::getTable($file);
            $model = $this->getModel()->findByPk($id);
            $model->size_ru = $table;
            $model->save();
        }

        if (isset($_FILES['size_uk_excel']['name']) && !empty($_FILES['size_uk_excel']['name'])) {
            $file = $_FILES['size_uk_excel'];
            $file = $file['tmp_name'];
            $table = ExcelHelper::getTable($file);
            $model = $this->getModel()->findByPk($id);
            $model->size_uk = $table;
            $model->save();
        }
    }

    public function getModel($search = '')
    {
        $model = new $this->model_name($search);
        return $model;
    }
}