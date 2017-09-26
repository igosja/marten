<?php

class IndexController extends Controller
{
    public function actionIndex()
    {
//        Yii::app()->db->createCommand()->addColumn('productsimple', 'instock', 'int(1) default 1');
        $a_news = News::model()->findAllByAttributes(array('status' => 1), array('order' => 'id DESC', 'limit' => 3));
        $a_project_1 = Project::model()->findAllByAttributes(array('status' => 1, 'projectcategory_id' => 1), array('order' => 'id DESC', 'limit' => 1));
        $a_project_2 = Project::model()->findAllByAttributes(array('status' => 1, 'projectcategory_id' => 3), array('order' => 'id DESC', 'limit' => 1));
        $a_project_3 = Project::model()->findAllByAttributes(array('status' => 1, 'projectcategory_id' => 2), array('order' => 'id DESC', 'limit' => 1));
        $a_slide = Slide::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $o_page = PageMain::model()->findByPk(1);
        $this->setSEO($o_page);
        $this->render('index', array(
            'a_news' => $a_news,
            'a_project_1' => $a_project_1,
            'a_project_2' => $a_project_2,
            'a_project_3' => $a_project_3,
            'a_slide' => $a_slide,
            'o_page' => $o_page,
        ));
    }

    public function actionError()
    {
        $a_news = News::model()->findAllByAttributes(array('status' => 1), array('order' => 'id DESC', 'limit' => 3));
        $a_project_1 = Project::model()->findAllByAttributes(array('status' => 1, 'projectcategory_id' => 1), array('order' => 'id DESC', 'limit' => 1));
        $a_project_2 = Project::model()->findAllByAttributes(array('status' => 1, 'projectcategory_id' => 3), array('order' => 'id DESC', 'limit' => 1));
        $a_project_3 = Project::model()->findAllByAttributes(array('status' => 1, 'projectcategory_id' => 2), array('order' => 'id DESC', 'limit' => 1));
        $a_slide = Slide::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $o_page = PageMain::model()->findByPk(1);
        $this->setSEO($o_page);
        $this->render('index', array(
            'a_news' => $a_news,
            'a_project_1' => $a_project_1,
            'a_project_2' => $a_project_2,
            'a_project_3' => $a_project_3,
            'a_slide' => $a_slide,
            'o_page' => $o_page,
        ));
    }
}