<?php

class NewsController extends AController
{
    public $h1 = 'Статьи';
    public $h1_edit = 'Редактирование статьи';
    public $title = 'Статьи';
    public $model_name = 'News';

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
        $this->render('form', array('model' => $model));
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

    public function actionStatus($id)
    {
        $id = (int)$id;
        $model = $this->getModel()->findByPk($id);
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $this->getModel()->updateByPk($id, array('status' => 1 - $model->status));
        $this->redirect(array('index'));
    }

    public function actionDelete($id)
    {
        $model = $this->getModel()->findByPk($id);
        $model->deleteByPk($id);
        if (0 < $model->image_id) {
            $o_image = Image::model()->findByPk($model->image_id);
            if (isset($o_image->url)) {
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . $o_image->url)) {
                    unlink($_SERVER['DOCUMENT_ROOT'] . $o_image->url);
                }
                $o_image->delete();
            }
        }
        $this->redirect(array('index'));
    }

    public function actionImage($id)
    {
        $o_image = Image::model()->findByPk($id);
        if (isset($o_image->url)) {
            if (file_exists($_SERVER['DOCUMENT_ROOT'] . $o_image->url)) {
                unlink($_SERVER['DOCUMENT_ROOT'] . $o_image->url);
            }
            $o_image->delete();
        }
        $this->redirect($_SERVER['HTTP_REFERER']);
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