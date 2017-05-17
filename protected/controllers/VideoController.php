<?php

class VideoController extends Controller
{
    public function actionIndex()
    {
        $o_page = PageVideo::model()->findByPk(1);
        $this->setSEO($o_page);
        $this->render('index', array(
            'o_page' => $o_page,
        ));
    }
}