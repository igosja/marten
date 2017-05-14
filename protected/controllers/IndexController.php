<?php

class IndexController extends Controller
{
    public function actionIndex()
    {
        $a_slide = Slide::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $o_page = PageMain::model()->findByPk(1);
        $this->setSEO($o_page);
        $this->render('index', array(
            'a_slide' => $a_slide,
            'o_page' => $o_page,
        ));
    }
}