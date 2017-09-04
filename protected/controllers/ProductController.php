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
        $rating_count = Review::model()->findByAttributes(
            array('product_id' => $o_product->primaryKey, 'status' => 1),
            array('select' => 'COUNT(rating) as rating')
        );
        $this->setSEO($o_product);
        $this->og_image = ImageIgosja::resize(isset($o_product['a_simple'][0]['simple']['a_image'][0]['image_id'])
            ? $o_product['a_simple'][0]['simple']['a_image'][0]['image_id'] : 0, 600, 600);
        if (isset($o_product['a_category'][0])) {
            $o_category = Category::model()->findByPk($o_product['a_category'][0]['category_id']);
            if ($o_category) {
                if ($o_category['parent_id']) {
                    $o_parent = Category::model()->findByPk($o_category['parent_id']);
                    if ($o_parent) {
                        $this->breadcrumbs[$o_parent['h1_' . Yii::app()->language]] = array(
                            'category/view',
                            'id' => $o_parent['url']
                        );
                    }
                }
                $this->breadcrumbs[$o_category['h1_' . Yii::app()->language]] = array(
                    'category/view',
                    'id' => $o_category['url']
                );
            }
        }
        $this->breadcrumbs[] = $o_product['h1_' . Yii::app()->language];
        if (ProductType::TYPE_BOILER == $o_product['producttype_id']) {
            $view = 'boiler';
        } elseif (ProductType::TYPE_FUNNEL) {
            $view = 'funnel';
        } else {
            $view = 'boilerhouse';
        }
        $simple = 0;
        if (Yii::app()->user->hasFlash('simple')) {
            $simple_id = Yii::app()->user->getFlash('simple');
            for ($i=0; $i<count($o_product['a_simple']); $i++) {
                print $o_product['a_simple'][$i]['simple']['id'];
                print '<br>';
                if ($simple_id == $o_product['a_simple'][$i]['simple']['id']) {
                    $simple = $i;
                }
            }
        }
        $this->render('view_' . $view, array(
            'a_review' => $a_review,
            'model' => $model,
            'more' => $more,
            'o_product' => $o_product,
            'rating' => $rating,
            'rating_count' => $rating_count,
            'simple' => $simple,
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

    public function actionImage($id)
    {
        Yii::app()->user->setFlash('simple', $id);
        $o_simple = ProductSimple::model()->findByPk($id);
        if (!$o_simple) {
            print '<div class="slider-out"><div class="slider clearfix">';
            print '</div></div><div class="slider-nav">';
            print '</div><a href="javascript:" class="next"></a><a href="javascript:" class="prev"></a>';
        } else {
            print '<div class="slider-out"><div class="slider clearfix">';
            foreach ($o_simple['a_image'] as $item) {
                print '<div>
                            <a href="' . ImageIgosja::resize($item['image_id'], 600, 600) . '" data-lightbox="1">
                                <img src="' . ImageIgosja::resize($item['image_id'], 600, 600) . '" alt=""/>
                            </a>
                        </div>';
            }
            print '</div></div><div class="slider-nav">';
            foreach ($o_simple['a_image'] as $item) {
                print '<div><img src="' . ImageIgosja::resize($item['image_id'], 600, 600) . '" alt=""/></div>';
            }
            print '</div><a href="javascript:" class="next"></a><a href="javascript:" class="prev"></a>';
        }
    }
}