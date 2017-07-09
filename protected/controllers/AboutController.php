<?php

class AboutController extends Controller
{
    public function actionIndex()
    {
        $a_achievement = Achievement::model()->findAllByAttributes(
            array('status' => 1),
            array('order' => '`order`')
        );
        $half = ceil(count($a_achievement) / 2);
        $a_achievement_1 = array_slice($a_achievement, 0, $half);
        $a_achievement_2 = array_slice($a_achievement, $half);
        $a_photo = AboutPhoto::model()->findAllByAttributes(
            array('status' => 1),
            array('order' => '`order`')
        );
        $o_page = PageAbout::model()->findByPk(1);
        $this->setSEO($o_page);
        $this->breadcrumbs = array(
            $o_page['h1_' . Yii::app()->language],
        );
        $this->render('index', array(
            'a_achievement_1' => $a_achievement_1,
            'a_achievement_2' => $a_achievement_2,
            'a_photo' => $a_photo,
            'o_page' => $o_page,
        ));
    }
}