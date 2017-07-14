<?php

class ProductController extends Controller
{
    public function actionIndex()
    {
        $this->redirect(array('index/index'));
    }

    public function actionView($id)
    {
        $model = new Review();
        if ($data = Yii::app()->request->getPost('Review')) {
            $model->attributes = $data;
            if ($model->save()) {
                $this->refresh();
            }
        }
        $o_product = Product::model()->findByAttributes(
            array('url' => $id)
        );
        if (!$o_product) {
            $this->redirect(array('index'));
        }
        $a_review = Review::model()->findAllByAttributes(
            array('product_id' => $o_product->primaryKey, 'status' => 1),
            array('order' => 'id DESC', 'limit' => Review::ON_PAGE_PRODUCT)
        );
        $count = Review::model()->countByAttributes(array('product_id' => $o_product->primaryKey, 'status' => 1));
        $more = false;
        if ($count > count($a_review)) {
            $more = true;
        }
        $rating = Review::model()->findByAttributes(
            array('product_id' => $o_product->primaryKey, 'status' => 1),
            array('select' => 'ROUND(AVG(rating)) as rating')
        );
        $this->setSEO($o_product);
        $this->og_image = ImageIgosja::resize(isset($o_product['a_image'][0]['image_id']) ? $o_product['a_image'][0]['image_id'] : 0, 600, 600);
        if ($o_product['category_id']) {
            $o_category = Category::model()->findByPk($o_product['category_id']);
            if ($o_category) {
                if ($o_category['parent_id']) {
                    $o_parent = Category::model()->findByPk($o_category['parent_id']);
                    if ($o_parent) {
                        $this->breadcrumbs[$o_parent['h1_' . Yii::app()->language]] = array('category/view', 'id' => $o_parent['url']);
                    }
                }
                $this->breadcrumbs[$o_category['h1_' . Yii::app()->language]] = array('category/view', 'id' => $o_category['url']);
            }
        }
        $this->breadcrumbs[] = $o_product['h1_' . Yii::app()->language];
        $this->render('view', array(
            'a_review' => $a_review,
            'model' => $model,
            'more' => $more,
            'o_product' => $o_product,
            'rating' => $rating,
        ));
    }

    public function actionMore($id)
    {
        $a_review = Review::model()->findAllByAttributes(
            array('status' => 1, 'product_id' => $id),
            array(
                'order' => 'id DESC',
                'offset' => Yii::app()->request->getQuery('offset', 0) + Review::ON_PAGE_PRODUCT,
                'limit' => Review::ON_PAGE_PRODUCT
            )
        );
        foreach ($a_review as $item) {
            $this->renderPartial('review', array('item' => $item));
        }
    }

    public function actionCheck($id)
    {
        $count = Review::model()->countByAttributes(
            array('status' => 1, 'product_id' => $id)
        );
        $offset = (int)Yii::app()->request->getQuery('offset', 0) + Review::ON_PAGE_PRODUCT;
        $remove = false;
        if ($count <= $offset + Review::ON_PAGE_PRODUCT) {
            $remove = true;
        }
        print CJSON::encode(array('remove' => $remove, 'offset' => $offset));
    }
}