<?php

class NewsController extends Controller
{
    public function actionIndex()
    {
        $o_page = PageNews::model()->findByPk(1);
        $this->setSEO($o_page);
        $this->render('index', array(
            'o_page' => $o_page,
        ));
    }
}