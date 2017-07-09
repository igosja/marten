<?php

class PageMain extends CActiveRecord
{
    public function tableName()
    {
        return 'pagemain';
    }

    public function rules()
    {
        return array(
            array('h1_ru, h1_ua, video, seo_title_ru, seo_title_ua', 'length', 'max' => 255),
            array('text_1_ru, text_1_ua, text_2_ru, text_2_ua, seo_description_ru, seo_description_ua, seo_keywords_ru, seo_keywords_ua', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'h1_ru' => 'H1 (Русский)',
            'h1_ua' => 'H1 (Українська)',
            'text_1_ru' => 'Текст вверху (Русский)',
            'text_1_ua' => 'Текст вверху (Українська)',
            'text_2_ru' => 'Текст внизу (Русский)',
            'text_2_ua' => 'Текст внизу (Українська)',
            'video' => 'Код видео с youtube',
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