<?php

class ProductPdf extends CActiveRecord
{
    public function tableName()
    {
        return 'productpdf';
    }

    public function rules()
    {
        return array(
            array('product_id, pdf_id', 'required'),
            array('product_id, pdf_id', 'numerical'),
            array('pdf_name', 'length', 'max' => 255),
        );
    }

    public function relations()
    {
        return array(
            'pdf' => array(self::HAS_ONE, 'Image', array('id' => 'pdf_id')),
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}