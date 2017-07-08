<?php

class NewsController extends Controller
{
    public function actionIndex()
    {
        $a_news = News::model()->findAllByAttributes(
            array('status' => 1),
            array('limit' => 6, 'order' => 'id DESC')
        );
        $o_page = PageNews::model()->findByPk(1);
        $this->setSEO($o_page);
        $this->breadcrumbs = array(
            $o_page['h1_' . Yii::app()->language],
        );
        $this->render('index', array(
            'a_news' => $a_news,
            'o_page' => $o_page,
        ));
    }

    public function actionView($id)
    {
        $o_news = News::model()->findByAttributes(
            array('url' => 1)
        );
        if (!$o_news) {
            $this->redirect(array('index'));
        }
        $this->setSEO($o_news);
        $this->breadcrumbs = array(
            $o_news['h1_' . Yii::app()->language],
        );
        $this->render('view', array(
            'o_news' => $o_news,
        ));
    }
}