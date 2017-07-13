<?php

class ProductToSimple extends CActiveRecord
{
    public function tableName()
    {
        return 'producttosimple';
    }

    public function rules()
    {
        return array(
            array('product_id, productsimple_id', 'required'),
            array('product_id, productsimple_id', 'numerical'),
        );
    }

    public function relations()
    {
        return array(
            'simple' => array(self::HAS_ONE, 'ProductSimple', array('id' => 'productsimple_id')),
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('product_id', $this->product_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}