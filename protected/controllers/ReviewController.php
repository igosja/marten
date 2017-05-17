<?php

class ReviewController extends Controller
{
    public function actionIndex()
    {
        $o_page = PageReview::model()->findByPk(1);
        $this->setSEO($o_page);
        $this->render('index', array(
            'o_page' => $o_page,
        ));
    }
}