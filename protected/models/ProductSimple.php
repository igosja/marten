<?php

class ProductSimple extends CActiveRecord
{
    public $characteristic_uk_excel;
    public $characteristic_ru_excel;
    public $size_uk_excel;
    public $size_ru_excel;

    public function tableName()
    {
        return 'productsimple';
    }

    public function rules()
    {
        return array(
            array('power, price', 'numerical'),
            array('name, sku', 'length', 'max' => 255),
            array('characteristic_ru, characteristic_uk, size_ru, size_uk', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'characteristic_ru' => 'Характеристики (Русский)',
            'characteristic_ru_excel' => 'Характеристики (Русский, Excel)',
            'characteristic_uk' => 'Характеристики (Українська)',
            'characteristic_uk_excel' => 'Характеристики (Українська, Excel)',
            'name' => 'Название (внутреннее)',
            'power' => 'Мощность/Диаметр',
            'price' => 'Цена',
            'size_ru' => 'Габариты (Русский)',
            'size_ru_excel' => 'Габариты (Русский, Excel)',
            'size_uk' => 'Габариты (Українська)',
            'size_uk_excel' => 'Габариты (Українська, Excel)',
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