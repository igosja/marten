<?php

class Product extends CActiveRecord
{
    public $also;
    public $image;
    public $simple;

    public function tableName()
    {
        return 'product';
    }

    public function rules()
    {
        return array(
            array('category_id', 'required'),
            array('category_id, status, instock, size_id, pdf_id', 'numerical'),
            array('h1_ru, h1_ua, url, seo_title_ru, seo_title_ua', 'length', 'max' => 255),
            array('video', 'length', 'max' => 15),
            array(
                'characteristic_ru, characteristic_ua, description_ru, description_ua, size_ru, size_ua, text_1_ru,
                text_1_ua, text_2_ru, text_2_ua, seo_description_ru, seo_description_ua, seo_keywords_ru, seo_keywords_ua',
                'safe'
            ),
        );
    }

    public function attributeLabels()
    {
        return array(
            'also' => 'Также покупают',
            'category_id' => 'Категория',
            'characteristic_ru' => 'Характеристики (Русский)',
            'characteristic_ua' => 'Характеристики (Українська)',
            'description_ru' => 'Описание (Русский)',
            'description_ua' => 'Описание (Українська)',
            'h1_ru' => 'Название (Русский)',
            'h1_ua' => 'Название (Українська)',
            'image' => 'Изображения',
            'instock' => 'Есть на складе',
            'pdf_id' => 'PDF',
            'simple' => 'Простые товары',
            'size_id' => 'Габариты',
            'size_ru' => 'Габариты (Русский)',
            'size_ua' => 'Габариты (Українська)',
            'status' => 'Статус',
            'text_1_ru' => 'Текст вверху (Русский)',
            'text_1_ua' => 'Текст вверху (Українська)',
            'text_2_ru' => 'Текст внизу (Русский)',
            'text_2_ua' => 'Текст внизу (Українська)',
            'url' => 'ЧП-URL',
            'video' => 'Код видео с youtube',
            'seo_title_ru' => 'SEO title (Русский)',
            'seo_title_ua' => 'SEO title (Українська)',
            'seo_description_ru' => 'SEO description (Русский)',
            'seo_description_ua' => 'SEO description (Українська)',
            'seo_keywords_ru' => 'SEO keywords (Русский)',
            'seo_keywords_ua' => 'SEO keywords (Українська)',
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('h1_ru', $this->h1_ru, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function relations()
    {
        return array(
            'a_also' => array(self::HAS_MANY, 'ProductAlso', array('parent_id' => 'id')),
            'a_image' => array(self::HAS_MANY, 'ProductImage', array('product_id' => 'id')),
            'a_simple' => array(self::HAS_MANY, 'ProductToSimple', array('product_id' => 'id')),
            'category' => array(self::HAS_ONE, 'Category', array('id' => 'category_id')),
            'pdf' => array(self::HAS_ONE, 'Image', array('id' => 'pdf_id')),
            'size' => array(self::HAS_ONE, 'Image', array('id' => 'size_id')),
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}