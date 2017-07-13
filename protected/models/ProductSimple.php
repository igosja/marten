<?php

class ProductSimple extends CActiveRecord
{
    public function tableName()
    {
        return 'productsimple';
    }

    public function rules()
    {
        return array(
            array('power, price', 'numerical'),
            array('name, sku', 'length', 'max' => 255),
        );
    }

    public function attributeLabels()
    {
        return array(
            'name' => 'Название (внутреннее)',
            'power' => 'Мощность',
            'price' => 'Цена',
            'sku' => 'Артикул',
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}