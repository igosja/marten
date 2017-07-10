<?php

//\usr\local\php5\php.exe

class Controller extends CController
{
    public $a_category = array();
    public $a_language = array();
    public $breadcrumbs = array();
    public $callme;
    public $contact;
    public $layout = 'main';
    public $og_image;
    public $seo_title;
    public $seo_description;
    public $seo_keywords;

    public function init()
    {
        $a_category = Category::model()->findAllByAttributes(array('status' => 1), array('order' => 'parent_id, `order`'));
        $this->a_category = Category::model()->getTreeMenu($a_category);
        $this->a_language = Language::model()->findAllByAttributes(
            array('status' => 1),
            array('select' => array('code', 'name'), 'order' => '`order`')
        );
        if ($language = Yii::app()->request->getQuery('language')) {
            Yii::app()->language = $language;
        } else {
            $language = Language::model()->find(array('select' => array('code'), 'order' => '`order`'));
            Yii::app()->language = $language['code'];
        }
        $this->contact = Contact::model()->findByAttributes(
            array('id' => 1),
            array('select' => array(
                'address_head_' . Yii::app()->language,
                'hours_monday',
                'hours_saturday',
                'phone_kyivstar',
                'phone_life',
                'phone_umc',
            ))
        );
        $this->callme = new CallMe();
        if ($data = Yii::app()->request->getPost('CallMe')) {
            $this->callme->attributes = $data;
            if ($this->callme->validate()) {
                $this->callme->send();
                $this->refresh();
            }
        }
        $clientScript = Yii::app()->getClientScript();
        $clientScript->scriptMap = array(
            'jquery.js' => false,
        );
    }

    public function beforeAction($action)
    {
        if ($language = Yii::app()->request->getPost('language')) {
            Yii::app()->language = $language;
            $redirect = array($this->uniqueId . '/' . $this->action->id);
            if (Yii::app()->request->getQuery('id')) {
                $redirect['id'] = Yii::app()->request->getQuery('id');
            }
            $this->redirect($redirect);
        }
        return $action;
    }

    public function setSEO($model)
    {
        if ($model['seo_title_' . Yii::app()->language]) {
            $this->seo_title = $model['seo_title_' . Yii::app()->language];
        } else {
            $this->seo_title = $model['h1_' . Yii::app()->language];
        }
        if ($model['seo_description_' . Yii::app()->language]) {
            $this->seo_description = $model['seo_description_' . Yii::app()->language];
        }
        if ($model['seo_keywords_' . Yii::app()->language]) {
            $this->seo_keywords = $model['seo_keywords_' . Yii::app()->language];
        }
    }
}