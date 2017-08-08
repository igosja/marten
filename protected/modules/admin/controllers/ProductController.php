<?php

class ProductController extends AController
{
    public $h1 = 'Товары';
    public $h1_edit = 'Редактирование товара';
    public $title = 'Товары';
    public $model_name = 'Product';

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
            foreach ($model->a_simple as $item) {
                $model->simple[] = $item['productsimple_id'];
            }
            foreach ($model->a_also as $item) {
                $model->also[] = $item['child_id'];
            }
            foreach ($model->a_category as $item) {
                $model->category_id[] = $item['category_id'];
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
                $this->uploadPdf($model->primaryKey);
                $this->uploadSize($model->primaryKey);
                $this->also($model->primaryKey);
                $this->simple($model->primaryKey);
                $this->category($model->primaryKey);
                $this->redirect(array('view', 'id' => $model->primaryKey));
            }
        }
        $this->breadcrumbs = array(
            $this->title => array('index'),
        );
        if (0 != $id) {
            $this->breadcrumbs[$model->h1_ru] = array('view', 'id' => $model->primaryKey);
        }
        $a_category = Category::model()->findAll(array('order' => 'h1_ru'));
        $a_producttype = ProductType::model()->findAll(array('order' => 'name'));
        $a_productsimple = ProductSimple::model()->findAll(array('order' => 'name'));
        $a_also = Product::model()->findAll(array('condition' => 'id!=' . (int)$id, 'order' => 'h1_ru'));
        $this->render('form', array(
            'model' => $model,
            'a_also' => $a_also,
            'a_category' => $a_category,
            'a_productsimple' => $a_productsimple,
            'a_producttype' => $a_producttype,
        ));
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
        $simple = new ProductToSimple('search');
        $simple->attributes = array('product_id' => $id);
        $also = new ProductAlso('search');
        $also->attributes = array('parent_id' => $id);
        $this->render('view', array('model' => $model, 'simple' => $simple, 'also' => $also));
    }

    public function actionDelete($id)
    {
        $model = $this->getModel()->findByPk($id);
        $model->deleteByPk($id);
        $this->redirect(array('index'));
    }

    public function actionDeletesimple($id)
    {
        $model = ProductToSimple::model()->findByPk($id);
        $model->deleteByPk($id);
        $this->redirect(array('view', 'id' => $model->product_id));
    }

    public function actionDeletepdf($id)
    {
        $model = ProductPdf::model()->findByPk($id);
        $model->deleteByPk($id);
        $this->redirect(array('view', 'id' => $model->product_id));
    }

    public function actionDeletealso($id)
    {
        $model = ProductAlso::model()->findByPk($id);
        $model->deleteByPk($id);
        $this->redirect(array('view', 'id' => $model->parent_id));
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

    public function uploadPdf($id)
    {
        if (isset($_FILES['pdf']['name'][0]) && !empty($_FILES['pdf']['name'][0])) {
            $pdf = $_FILES['pdf'];
            for ($i = 0, $count_pdf = count($pdf['name']); $i < $count_pdf; $i++) {
                $ext = $pdf['name'][$i];
                $ext = explode('.', $ext);
                $ext = end($ext);
                $file = $pdf['tmp_name'][$i];
                $image_url = ImageIgosja::put_file($file, $ext);
                $o_image = new Image();
                $o_image->url = $image_url;
                $o_image->save();
                $image_id = $o_image->primaryKey;
                $model = new ProductPdf();
                $model->pdf_id = $image_id;
                $model->pdf_name = $pdf['name'][$i];
                $model->product_id = $id;
                $model->save();
            }
        }
    }

    public function uploadSize($id)
    {
        if (isset($_FILES['size']['name']) && !empty($_FILES['size']['name'])) {
            $image = $_FILES['size'];
            $ext = $image['name'];
            $ext = explode('.', $ext);
            $ext = end($ext);
            $file = $image['tmp_name'];
            $image_url = ImageIgosja::put_file($file, $ext);
            $o_image = new Image();
            $o_image->url = $image_url;
            $o_image->save();
            $image_id = $o_image->primaryKey;
            $model = $this->getModel()->findByPk($id);
            $model->size_id = $image_id;
            $model->save();
        }
    }

    public function simple($id)
    {
        ProductToSimple::model()->deleteAll(array('condition' => 'product_id=' . (int)$id));
        if ($data = Yii::app()->request->getPost('Product')) {
            if (is_array($data['simple'])) {
                foreach ($data['simple'] as $item) {
                    $model = new ProductToSimple();
                    $model->product_id = $id;
                    $model->productsimple_id = $item;
                    $model->save();
                }
            }
        }
    }

    public function category($id)
    {
        ProductCategory::model()->deleteAll(array('condition' => 'product_id=' . (int)$id));
        if ($data = Yii::app()->request->getPost('Product')) {
            if (is_array($data['category_id'])) {
                foreach ($data['category_id'] as $item) {
                    $model = new ProductCategory();
                    $model->category_id = $item;
                    $model->product_id = $id;
                    $model->save();
                }
            }
        }
    }

    public function also($id)
    {
        ProductAlso::model()->deleteAll(array('condition' => 'parent_id=' . (int)$id));
        if ($data = Yii::app()->request->getPost('Product')) {
            if (is_array($data['also'])) {
                foreach ($data['also'] as $item) {
                    $model = new ProductAlso();
                    $model->child_id = $item;
                    $model->parent_id = $id;
                    $model->save();
                }
            }
        }
    }

    public function getModel($search = '')
    {
        $model = new $this->model_name($search);
        return $model;
    }
}