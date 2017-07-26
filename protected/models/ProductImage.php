<?php

class ProductImage extends CActiveRecord
{
    public function tableName()
    {
        return 'productimage';
    }

    public function rules()
    {
        return array(
            array('image_id, productsimple_id', 'required'),
            array('image_id, productsimple_id', 'numerical'),
        );
    }

    public function relations()
    {
        return array(
            'image' => array(self::HAS_ONE, 'Image', array('id' => 'image_id')),
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('productsimple_id', $this->productsimple_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}