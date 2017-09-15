<?php

class AController extends CController
{
    public $callme = 0;
    public $commerce = 0;
    public $order = 0;
    public $review = 0;
    public $notification = 0;
    public $layout = 'main';
    public $breadcrumbs = array();
    public $rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Є', 'Ё', 'Ж', 'З', 'И', 'І', 'Ї', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'є', 'ё', 'ж', 'з', 'и', 'і', 'ї', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я', ' ', '(', ')', ',', '.', ':', ';', '"', "'", '!', '@', '#', '$', '%', '^', '&', '*', '-', '=', '+', '<', '>', '\\', '|', '№', '/', '`', '~');
    public $lat = array('a', 'b', 'v', 'g', 'd', 'e', 'e', 'e', 'gh', 'z', 'i', 'i', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'e', 'gh', 'z', 'i', 'i', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya', '_', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

    public function filters()
    {
        return array(
            'accessControl',
        );
    }

    public function accessRules()
    {
        return array(
            array('deny',
                'users' => array('?'),
            ),
        );
    }

    public function init()
    {
        $clientScript = Yii::app()->getClientScript();
        $clientScript->scriptMap = array(
            'jquery.js' => false,
        );
    }

    public function beforeAction($action)
    {
        $this->callme = CallMe::model()->countByAttributes(array('status' => 0));
        $this->order = Order::model()->countByAttributes(array('status' => 0));
        $this->review = Review::model()->countByAttributes(array('status' => 0));
        $this->commerce = Commerce::model()->countByAttributes(array('status' => 0));
        $this->notification = $this->callme + $this->order + $this->review + $this->commerce;

        return $action;
    }
}