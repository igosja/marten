<?php

class PageConsult extends CActiveRecord
{
    public function tableName()
    {
        return 'pageconsult';
    }

    public function rules()
    {
        return array(
            array('bread_ru, bread_uk, h1_ru, h1_uk, seo_title_ru, seo_title_uk', 'length', 'max' => 255),
            array('text_1_ru, text_1_uk, text_2_ru, text_2_uk, seo_description_ru, seo_description_uk, seo_keywords_ru, seo_keywords_uk', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'bread_ru' => 'Хлебные крошки (Русский)',
            'bread_uk' => 'Хлебные крошки (Українська)',
            'h1_ru' => 'H1 (Русский)',
            'h1_uk' => 'H1 (Українська)',
            'text_1_ru' => 'Текст вверху (Русский)',
            'text_1_uk' => 'Текст вверху (Українська)',
            'text_2_ru' => 'Текст внизу (Русский)',
            'text_2_uk' => 'Текст внизу (Українська)',
            'seo_title_ru' => 'SEO title (Русский)',
            'seo_title_uk' => 'SEO title (Українська)',
            'seo_description_ru' => 'SEO description (Русский)',
            'seo_description_uk' => 'SEO description (Українська)',
            'seo_keywords_ru' => 'SEO keywords (Русский)',
            'seo_keywords_uk' => 'SEO keywords (Українська)',
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}