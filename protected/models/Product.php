<?php

class Product extends CActiveRecord
{
    public $also;
    public $category_id;
    public $simple;

    public function tableName()
    {
        return 'product';
    }

    public function rules()
    {
        return array(
            array('producttype_id', 'required'),
            array('producttype_id, size_id, status', 'numerical'),
            array('h1_ru, h1_uk, url, seo_title_ru, seo_title_uk', 'length', 'max' => 255),
            array('video', 'length', 'max' => 15),
            array(
                'category_id, categorytext_ru, categorytext_uk, description_ru, description_uk, text_ru, text_uk,
                seo_description_ru, seo_description_uk, seo_keywords_ru, seo_keywords_uk',
                'safe'
            ),
        );
    }

    public function attributeLabels()
    {
        return array(
            'also' => 'Также покупают',
            'category_id' => 'Категория',
            'categorytext_ru' => 'Текст для списка категорий (Русский)',
            'categorytext_uk' => 'Текст для списка категорий (Українська)',
            'description_ru' => 'Описание (Русский)',
            'description_uk' => 'Описание (Українська)',
            'h1_ru' => 'Название (Русский)',
            'h1_uk' => 'Название (Українська)',
            'pdf' => 'PDF',
            'producttype_id' => 'Тип товара',
            'simple' => 'Простые товары',
            'size_id' => 'Габариты',
            'status' => 'Статус',
            'text_ru' => 'Текст внизу (Русский)',
            'text_uk' => 'Текст внизу (Українська)',
            'url' => 'ЧП-URL',
            'video' => 'Код видео с youtube',
            'seo_title_ru' => 'SEO title (Русский)',
            'seo_title_uk' => 'SEO title (Українська)',
            'seo_description_ru' => 'SEO description (Русский)',
            'seo_description_uk' => 'SEO description (Українська)',
            'seo_keywords_ru' => 'SEO keywords (Русский)',
            'seo_keywords_uk' => 'SEO keywords (Українська)',
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
            'a_category' => array(self::HAS_MANY, 'ProductCategory', array('product_id' => 'id')),
            'a_simple' => array(self::HAS_MANY, 'ProductToSimple', array('product_id' => 'id'), 'order' => 'simple.power ASC', 'with'=>'simple'),
            'min_price' => array(self::HAS_MANY, 'ProductToSimple', array('product_id' => 'id'), 'order' => 'simple.price ASC', 'with'=>'simple'),
            'pdf' => array(self::HAS_MANY, 'ProductPdf', array('product_id' => 'id')),
            'producttype' => array(self::HAS_ONE, 'ProductType', array('id' => 'producttype_id')),
            'size' => array(self::HAS_ONE, 'Image', array('id' => 'size_id')),
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}