<?php

class CallMe extends CActiveRecord
{
    public function tableName()
    {
        return 'callme';
    }

    public function rules()
    {
        return array(
            array('name, phone', 'required'),
            array('date', 'numerical'),
            array('name, phone', 'length', 'max' => 255),
            array('text', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'name' => Yii::t('models.CallMe', 'label-name'),
            'phone' => Yii::t('models.CallMe', 'label-phone'),
            'text' => Yii::t('models.CallMe', 'label-text'),
            'date' => 'Время',
            'status' => 'Статус',
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function send()
    {
        $text = 'Имя - ' . $this->name;
        if ($this->phone) {
            $text .= '<br/>Телефон - ' . $this->phone;
        }
        if ($this->text) {
            $text .= '<br/>Комментарий - ' . $this->text;
        }
        $contact = Contact::model()->findByPk(1);
        $mail = new Mail();
        $mail->setTo($contact['email']);
        $mail->setSubject('Клиент заказал обратный звонок через сайт');
        $mail->setHtml($text);
        $mail->send();
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}