<?php

class AdvantageController extends Controller
{
    public function actionIndex()
    {
        $a_advantage = Advantage::model()->findAllByAttributes(
            array('status' => 1),
            array('order' => '`order`')
        );
        $o_page = PageAdvantage::model()->findByPk(1);
        $this->setSEO($o_page);
        $this->breadcrumbs = array(
            $o_page['h1_' . Yii::app()->language],
        );
        $this->render('index', array(
            'a_advantage' => $a_advantage,
            'o_page' => $o_page,
        ));
    }
}