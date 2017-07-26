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
                $this->uploadImage($model->primaryKey);
                $this->redirect(array('view', 'id' => $model->primaryKey));
            }
        }
        $this->breadcrumbs = array(
            $this->title => array('index'),
        );
        if (0 != $id) {
            $this->breadcrumbs[$model->name] = array('view', 'id' => $model->primaryKey);
        }
        $a_category = Category::model()->findAll(array('order' => 'h1_ru'));
        $this->render('form', array(
            'a_category' => $a_category,
            'model' => $model,
    ));
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
        $image = new ProductImage('search');
        $image->attributes = array('productsimple_id' => $id);
        $this->render('view', array('model' => $model, 'image' => $image));
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

    public function actionDeleteimage($id)
    {
        $model = ProductImage::model()->findByPk($id);
        $model->deleteByPk($id);
        $this->redirect(array('view', 'id' => $model->productsimple_id));
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

    public function uploadImage($id)
    {
        if (isset($_FILES['image']['name'][0]) && !empty($_FILES['image']['name'][0])) {
            $image = $_FILES['image'];
            for ($i = 0, $count_image = count($image['name']); $i < $count_image; $i++) {
                $ext = $image['name'][$i];
                $ext = explode('.', $ext);
                $ext = end($ext);
                $file = $image['tmp_name'][$i];
                $image_url = ImageIgosja::put_file($file, $ext);
                $o_image = new Image();
                $o_image->url = $image_url;
                $o_image->save();
                $image_id = $o_image->primaryKey;
                $model = new ProductImage();
                $model->image_id = $image_id;
                $model->productsimple_id = $id;
                $model->save();
            }
        }
    }

    public function getModel($search = '')
    {
        $model = new $this->model_name($search);
        return $model;
    }
}