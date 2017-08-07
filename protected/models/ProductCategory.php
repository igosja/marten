<?php

class ProductCategory extends CActiveRecord
{
    public function tableName()
    {
        return 'productcategory';
    }

    public function rules()
    {
        return array(
            array('product_id, category_id', 'required'),
            array('product_id, category_id', 'numerical'),
        );
    }

    public function relations()
    {
        return array(
            'category' => array(self::HAS_ONE, 'Category', array('id' => 'category_id')),
            'product' => array(self::HAS_ONE, 'Product', array('id' => 'product_id')),
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}