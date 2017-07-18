<?php

class Category extends CActiveRecord
{
    public function tableName()
    {
        return 'category';
    }

    public function rules()
    {
        return array(
            array('parent_id', 'required'),
            array('image_id, parent_id, order, status', 'numerical'),
            array('h1_ru, h1_uk, url, seo_title_ru, seo_title_uk', 'length', 'max' => 255),
            array('text_ru, text_uk, seo_description_ru, seo_description_uk, seo_keywords_ru, seo_keywords_uk', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'h1_ru' => 'Название (Русский)',
            'h1_uk' => 'Название (Українська)',
            'image_id' => 'Изображение',
            'parent_id' => 'Категория',
            'status' => 'Статус',
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
            'category' => array(self::HAS_ONE, 'Category', array('id' => 'parent_id')),
            'image' => array(self::HAS_ONE, 'Image', array('id' => 'image_id')),
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function getTreeMenu()
    {
        $a_tree = array();
        $a_category = self::model()->findAllByAttributes(array('status' => 1, 'parent_id' => 0), array('order' => '`order`'));
        for ($i = 0, $count_category = count($a_category); $i < $count_category; $i++) {
            $a_tree[$i] = array(
                'name' => $a_category[$i]['h1_' . Yii::app()->language],
                'url' => $a_category[$i]['url'],
            );
            $children = self::model()->findAllByAttributes(
                array('status' => 1, 'parent_id' => $a_category[$i]['id']),
                array('order' => '`order`')
            );
            if ($children) {
                $a_children = array();
                for ($j = 0, $count_children = count($children); $j < $count_children; $j++) {
                    $a_children[$j] = array(
                        'name' => $children[$j]['h1_' . Yii::app()->language],
                        'url' => $children[$j]['url'],
                    );
                    $product = Product::model()->findAllByAttributes(
                        array('status' => 1, 'category_id' => $children[$j]['id'])
                    );
                    if ($product) {
                        $a_product = array();
                        foreach ($product as $item) {
                            $a_product[] = array(
                                'name' => $item['h1_' . Yii::app()->language],
                                'url' => $item['url'],
                            );
                        }
                        $a_children[$j]['product'] = $a_product;
                    }
                }
                $a_tree[$i]['children'] = $a_children;
            }
            $product = Product::model()->findAllByAttributes(
                array('status' => 1, 'category_id' => $a_category[$i]['id'])
            );
            if ($product) {
                $a_product = array();
                foreach ($product as $item) {
                    $a_product[] = array(
                        'name' => $item['h1_' . Yii::app()->language],
                        'url' => $item['url'],
                    );
                }
                $a_tree[$i]['product'] = $a_product;
            }
        }
        return $a_tree;
    }
}