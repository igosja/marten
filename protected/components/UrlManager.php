<?php

class UrlManager extends CUrlManager
{
    public static function onBeginRequest()
    {
        $rules = array();
        $a_product = Product::model()->findAll(array('select' => 'url'));
        foreach ($a_product as $item) {
            $rules['<language:(ru|uk)>/<id:(' . $item['url'] . ')>'] = 'product/view';
            $rules['<id:(' . $item['url'] . ')>'] = 'product/view';
        }
        $a_category = Category::model()->findAll(array('select' => 'url'));
        foreach ($a_category as $item) {
            $rules['<language:(ru|uk)>/<id:(' . $item['url'] . ')>'] = 'category/view';
            $rules['<id:(' . $item['url'] . ')>'] = 'category/view';
        }
        $urlManager = Yii::app()->getUrlManager();
        $urlManager->addRules($rules, false);
        return true;
    }

    public function createUrl($route, $params = array(), $ampersand = '&')
    {
        if (!isset($params['language'])) {
            $params['language'] = Yii::app()->language;
        }
        if ('ru' == $params['language']) {
            unset($params['language']);
        }
        return parent::createUrl($route, $params, $ampersand);
    }
}