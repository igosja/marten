<?php

class Contact extends CActiveRecord
{
    public function tableName()
    {
        return 'contact';
    }

    public function rules()
    {
        return array(
            array(
                'address_head_ru, address_head_uk, address_1_ru, address_1_uk, address_2_ru, address_2_uk,
                 company_ru, company_uk, h1_ru, h1_uk, hours_monday, hours_saturday,
                 phone_city, phone_kyivstar, phone_life, phone_umc, seo_title_ru, seo_title_uk',
                'length',
                'max' => 255
            ),
            array('email', 'email'),
            array('google_lat, google_lng', 'numerical'),
            array('seo_description_ru, seo_description_uk, seo_keywords_ru, seo_keywords_uk', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'address_head_ru' => 'Адрес в шапке (Русский)',
            'address_head_uk' => 'Адрес в шапке (Українська)',
            'address_1_ru' => 'Адрес, 1 строка (Русский)',
            'address_1_uk' => 'Адрес, 1 строка (Українська)',
            'address_2_ru' => 'Адрес, 2 строка (Русский)',
            'address_2_uk' => 'Адрес, 2 строка (Українська)',
            'company_ru' => 'Компания (Русский)',
            'company_uk' => 'Компания (Українська)',
            'email' => 'Email',
            'google_lat' => 'Первая координата Google map',
            'google_lng' => 'Вторая координата Google map',
            'h1_ru' => 'H1 (Русский)',
            'h1_uk' => 'H1 (Українська)',
            'hours_monday' => 'Часы работы (пн-пт)',
            'hours_saturday' => 'Часы работы (сб-вс)',
            'phone_city' => 'Телефон (город)',
            'phone_kyivstar' => 'Телефон (київстар)',
            'phone_life' => 'Телефон (lifecell)',
            'phone_umc' => 'Телефон (vodafone)',
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