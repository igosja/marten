<?php

class Dealer extends CActiveRecord
{
    public function tableName()
    {
        return 'dealer';
    }

    public function rules()
    {
        return array(
            array('name, phone, email', 'required'),
            array('date', 'numerical'),
            array('shoptype, name, phone', 'length', 'max' => 255),
            array('email', 'email'),
            array('site', 'url'),
            array('text', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'date' => 'Время',
            'email' => Yii::t('models.Dealer', 'label-email'),
            'name' => Yii::t('models.Dealer', 'label-name'),
            'phone' => Yii::t('models.Dealer', 'label-phone'),
            'shoptype' => 'Тип точки продаж',
            'site' => Yii::t('models.Dealer', 'label-site'),
            'status' => 'Статус',
            'text' => Yii::t('models.Dealer', 'label-text'),
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
        $text .= '<br/>Телефон - ' . $this->phone;
        $text .= '<br/>Email - ' . $this->email;
        if ($this->site) {
            $text .= '<br/>Сайт - ' . $this->site;
        }
        $text .= '<br/>Тип точки продаж - ' . $this->shoptype;
        if ($this->text) {
            $text .= '<br/>Комментарий - ' . $this->text;
        }
        $contact = Contact::model()->findByPk(1);
        $mail = new Mail();
        $mail->setTo($contact['email']);
        $mail->setSubject('Новая заявка от диллера через сайт');
        $mail->setHtml($text);
        $mail->send();
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}