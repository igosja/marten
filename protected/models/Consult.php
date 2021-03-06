<?php

class Consult extends CActiveRecord
{
    public function tableName()
    {
        return 'consult';
    }

    public function rules()
    {
        return array(
            array('name_ru, name_uk', 'length', 'max' => 255),
            array('text_ru, text_uk', 'safe'),
            array('order, status', 'numerical'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'name_ru' => 'Заголовок (Русский)',
            'name_uk' => 'Заголовок (Українська)',
            'text_ru' => 'Текст (Русский)',
            'text_uk' => 'Текст (Українська)',
            'status' => 'Статус',
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('name_ru', $this->text_ru, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}