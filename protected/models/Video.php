<?php

class Video extends CActiveRecord
{
    const ON_PAGE = 3;

    public function tableName()
    {
        return 'video';
    }

    public function rules()
    {
        return array(
            array('code, videocategory_id', 'required'),
            array('status, videocategory_id', 'numerical'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'code' => 'Код видео с youtube',
            'status' => 'Статус',
            'videocategory_id' => 'Категория',
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('videocategory_id', $this->videocategory_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function relations()
    {
        return array(
            'VideoCategory' => array(self::HAS_ONE, 'VideoCategory', array('id' => 'videocategory_id')),
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}