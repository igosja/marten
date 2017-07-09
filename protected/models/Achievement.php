<?php

class Achievement extends CActiveRecord
{
    public function tableName()
    {
        return 'achievement';
    }

    public function rules()
    {
        return array(
            array('text_ru, text_ua', 'safe'),
            array('order, status', 'numerical'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'text_ru' => 'Текст (Русский)',
            'text_ua' => 'Текст (Українська)',
            'status' => 'Статус',
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('text_ru', $this->text_ru, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}