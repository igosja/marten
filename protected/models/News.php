<?php

class News extends CActiveRecord
{
    const ON_PAGE = 6;

    public function tableName()
    {
        return 'news';
    }

    public function rules()
    {
        return array(
            array('h1_ru, h1_uk, seo_title_ru, seo_title_uk, url', 'length', 'max' => 255),
            array('h1_ru, h1_uk, text_ru, text_uk', 'required'),
            array('seo_description_ru, seo_description_uk, seo_keywords_ru, seo_keywords_uk', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'date' => 'Дата публикации',
            'image_id' => 'Фото',
            'h1_ru' => 'Заголовок (Русский)',
            'h1_uk' => 'Заголовок (Українська)',
            'text_ru' => 'Текст (Русский)',
            'text_uk' => 'Текст (Українська)',
            'url' => 'ЧП-URL',
            'seo_title_ru' => 'SEO title (Русский)',
            'seo_title_uk' => 'SEO title (Українська)',
            'seo_description_ru' => 'SEO description (Русский)',
            'seo_description_uk' => 'SEO description (Українська)',
            'seo_keywords_ru' => 'SEO keywords (Русский)',
            'seo_keywords_uk' => 'SEO keywords (Українська)',
        );
    }

    public function beforeSave()
    {
        if (parent::beforeSave()) {
            if (!$this->date) {
                $this->date = time();
            }
        }
        return true;
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('h1_ru', $this->h1_ru, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function relations()
    {
        return array(
            'image' => array(self::HAS_ONE, 'Image', array('id' => 'image_id')),
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}