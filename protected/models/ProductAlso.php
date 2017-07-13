<?php

class ProductAlso extends CActiveRecord
{
    public function tableName()
    {
        return 'productalso';
    }

    public function rules()
    {
        return array(
            array('child_id, parent_id', 'required'),
            array('child_id, parent_id', 'numerical'),
        );
    }

    public function relations()
    {
        return array(
            'product' => array(self::HAS_ONE, 'Product', array('id' => 'child_id')),
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('parent_id', $this->parent_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}