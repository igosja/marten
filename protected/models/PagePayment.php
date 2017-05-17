<?php

class PagePayment extends CActiveRecord
{
    public function tableName()
    {
        return 'pagepayment';
    }

    public function rules()
    {
        return array(
            array('h1_ru, h1_ua, seo_title_ru, seo_title_ua', 'length', 'max' => 255),
            array('seo_description_ru, seo_description_ua, seo_keywords_ru, seo_keywords_ua', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'h1_ru' => 'H1 (Русский)',
            'h1_ua' => 'H1 (Українська)',
            'seo_title_ru' => 'SEO title (Русский)',
            'seo_title_ua' => 'SEO title (Українська)',
            'seo_description_ru' => 'SEO description (Русский)',
            'seo_description_ua' => 'SEO description (Українська)',
            'seo_keywords_ru' => 'SEO keywords (Русский)',
            'seo_keywords_ua' => 'SEO keywords (Українська)',
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}