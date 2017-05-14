<?php

class Slide extends CActiveRecord
{
    public function tableName()
    {
        return 'slide';
    }

    public function rules()
    {
        return array(
            array('image_id, order, status', 'numerical'),
            array('image_id', 'required'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'image_id' => 'Изображение',
            'status' => 'Статус',
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function relations()
    {
        return array(
            'image' => array(self::HAS_ONE, 'Image', array('id' => 'image_id')),
        );
    }

    public function beforeDelete()
    {
        if (parent::beforeDelete()) {
            $a_image = Image::model()->findAllByAttributes(array('id' => $this->primaryKey));
            foreach ($a_image as $item) {
                if (isset($item->url)) {
                    if (file_exists($_SERVER['DOCUMENT_ROOT'] . $item->url)) {
                        unlink($_SERVER['DOCUMENT_ROOT'] . $item->url);
                    }
                    $item->delete();
                }
            }
        }
        return true;
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}