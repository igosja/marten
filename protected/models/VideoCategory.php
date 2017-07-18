<?php

class VideoCategory extends CActiveRecord
{
    public function tableName()
    {
        return 'videocategory';
    }

    public function rules()
    {
        return array(
            array('name_ru, name_uk', 'length', 'max' => 255),
            array('order, status', 'numerical'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'name_ru' => 'Название (Русский)',
            'name_uk' => 'Название (Українська)',
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

    public function relations()
    {
        return array(
            'video' => array(
                self::HAS_MANY,
                'Video',
                array('videocategory_id' => 'id'),
                'condition' => 'status=1',
                'order' => 'id DESC',
                'limit' => Video::ON_PAGE,
            ),
            'countvideo' => array(
                self::HAS_MANY,
                'Video',
                array('videocategory_id' => 'id'),
                'condition' => 'status=1',
            )
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}