<?php

class IndexController extends Controller
{
    public function actionIndex()
    {
        $a_news = News::model()->findAllByAttributes(array('status' => 1), array('order' => 'id DESC', 'limit' => 3));
        $a_project = Project::model()->findAllByAttributes(array('status' => 1), array('order' => 'id DESC', 'limit' => 3));
        $a_slide = Slide::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $o_page = PageMain::model()->findByPk(1);
        $this->setSEO($o_page);
        $this->render('index', array(
            'a_news' => $a_news,
            'a_project' => $a_project,
            'a_slide' => $a_slide,
            'o_page' => $o_page,
        ));
    }
}