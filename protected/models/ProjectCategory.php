<?php

class ProjectCategory extends CActiveRecord
{
    public function tableName()
    {
        return 'projectcategory';
    }

    public function rules()
    {
        return array(
            array('name_ru, name_ua, url', 'length', 'max' => 255),
            array('order, status', 'numerical'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'name_ru' => 'Название (Русский)',
            'name_ua' => 'Название (Українська)',
            'url' => 'ЧП-URL',
            'status' => 'Статус',
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('name_ru', $this->name_ru, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}