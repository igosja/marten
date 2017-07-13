<?php

class CategoryController extends AController
{
    public $h1 = 'Категории';
    public $h1_edit = 'Редактирование категории';
    public $title = 'Категории';
    public $model_name = 'Category';

    public function actionIndex()
    {
        $model = $this->getModel('search');
        $model->dbCriteria->order = '`order` ASC';
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
            if (0 == $id) {
                $max_order = $this->getModel()->find(array('order' => '`order` DESC'));
                if ($max_order) {
                    $max_order = $max_order->order + 1;
                } else {
                    $max_order = 0;
                }
                $model->order = $max_order;
            }
            if ($model->save()) {
                $model = $this->getModel()->findByPk($model->primaryKey);
                if (empty($model->url)) {
                    $model->url = $model->primaryKey . '-' . str_replace($this->rus, $this->lat, $model->h1_ru);
                    $model->save();
                }
                $this->uploadImage($model->primaryKey);
                $this->redirect(array('view', 'id' => $model->primaryKey));
            }
        }
        $this->breadcrumbs = array(
            $this->title => array('index'),
        );
        if (0 != $id) {
            $this->breadcrumbs[$model->h1_ru] = array('view', 'id' => $model->primaryKey);
        }
        $a_category = $this->getModel()->findAllByAttributes(array('parent_id' => 0), array(
            'condition' => 'id!=' . $id,
            'select' => array('id', 'h1_ru'),
            'order' => 'parent_id, `order`'
        ));
        $o_category = new Category();
        $o_category->id = 0;
        $o_category->h1_ru = 'Главная';
        $a_category = array_merge(array($o_category), $a_category);
        $this->render('form', array('a_category' => $a_category, 'model' => $model));
    }

    public function actionView($id)
    {
        $model = $this->getModel()->findByPk($id);
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $this->h1 = $model->h1_ru;
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

    public function actionOrder($id)
    {
        $order_old = $_GET['order_old'];
        $order_new = $_GET['order_new'];
        $this->getModel()->updateByPk($id, array('order' => $order_new));
        if ($order_old < $order_new) {
            $a_model = $this->getModel()->findAll(array('condition' => '`order`>=' . $order_old . ' AND `order`<=' . $order_new . ' AND id!=' . $id));
            foreach ($a_model as $model) {
                $model->order--;
                $model->save();
            }
        } else {
            $a_model = $this->getModel()->findAll(array('condition' => '`order`<=' . $order_old . ' AND `order`>=' . $order_new . ' AND id!=' . $id));
            foreach ($a_model as $model) {
                $model->order++;
                $model->save();
            }
        }
    }

    public function uploadImage($id)
    {
        if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
            $image = $_FILES['image'];
            $ext = $image['name'];
            $ext = explode('.', $ext);
            $ext = end($ext);
            $file = $image['tmp_name'];
            $image_url = ImageIgosja::put_file($file, $ext);
            $o_image = new Image();
            $o_image->url = $image_url;
            $o_image->save();
            $image_id = $o_image->id;
            $model = $this->getModel()->findByPk($id);
            $model->image_id = $image_id;
            $model->save();
        }
    }

    public function getModel($search = '')
    {
        $model = new $this->model_name($search);
        return $model;
    }
}