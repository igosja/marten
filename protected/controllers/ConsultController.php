<?php

class ConsultController extends Controller
{
    public function actionIndex()
    {
        $a_consult = Consult::model()->findAllByAttributes(
            array('status' => 1),
            array('order' => '`order`')
        );
        $o_page = PageConsult::model()->findByPk(1);
        $this->setSEO($o_page);
        $this->breadcrumbs = array(
            $o_page['bread_' . Yii::app()->language],
        );
        $this->render('index', array(
            'a_consult' => $a_consult,
            'o_page' => $o_page,
        ));
    }
}