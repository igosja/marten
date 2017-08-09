<?php

class ReviewController extends Controller
{
    public function actionIndex()
    {
        $page = Yii::app()->request->getQuery('page', 1);
        $offset = ($page - 1) * Review::ON_PAGE_PRODUCT;
        $a_review = Review::model()->with('product')->findAllByAttributes(
            array('status' => 1),
            array('condition' => 'h1_ru is not null', 'offset' => $offset, 'limit' => Review::ON_PAGE_PRODUCT, 'order' => 't.id DESC')
        );
        $count = Review::model()->with('product')->countByAttributes(array('status' => 1), array('condition' => 'h1_ru is not null'));
        $more = false;
        if ($count > count($a_review) + $offset) {
            $more = true;
        }
        $page_total = ceil($count / Review::ON_PAGE_PRODUCT);
        $page_first = $page - 4;
        if ($page_first < 1) {
            $page_first = 1;
        }
        $page_last = $page + 4;
        if ($page_last > $page_total) {
            $page_last = $page_total;
        }
        $page_prev = $page - 1;
        if ($page_prev < 1) {
            $page_prev = 0;
        }
        $page_next = $page + 1;
        if ($page_next > $page_total) {
            $page_next = 0;
        }
        $o_page = PageReview::model()->findByPk(1);
        $this->setSEO($o_page);
        $this->breadcrumbs = array(
            $o_page['h1_' . Yii::app()->language],
        );
        $this->render('index', array(
            'a_review' => $a_review,
            'more' => $more,
            'o_page' => $o_page,
            'offset' => $offset,
            'page' => $page,
            'page_first' => $page_first,
            'page_last' => $page_last,
            'page_next' => $page_next,
            'page_prev' => $page_prev,
        ));
    }

    public function actionMore()
    {
        $a_news = Review::model()->with('product')->findAllByAttributes(
            array('status' => 1),
            array(
                'condition' => 'h1_ru is not null',
                'order' => 'id DESC',
                'offset' => Yii::app()->request->getQuery('offset', 0) + Review::ON_PAGE_PRODUCT,
                'limit' => Review::ON_PAGE_PRODUCT
            )
        );
        foreach ($a_news as $item) {
            $this->renderPartial('item', array('item' => $item));
        }
    }

    public function actionCheck()
    {
        $count = Review::model()->with('product')->countByAttributes(
            array('status' => 1), array('condition' => 'h1_ru is not null')
        );
        $offset = (int)Yii::app()->request->getQuery('offset', 0) + Review::ON_PAGE_PRODUCT;
        $remove = false;
        if ($count <= $offset + Review::ON_PAGE_PRODUCT) {
            $remove = true;
        }
        print CJSON::encode(array('remove' => $remove, 'offset' => $offset));
    }
}