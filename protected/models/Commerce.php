<?php

class Order extends CActiveRecord
{
    public function tableName()
    {
        return 'order';
    }

    public function rules()
    {
        return array(
            array('name, phone', 'required'),
            array('date, price', 'numerical'),
            array('name, phone, power, product', 'length', 'max' => 255),
            array('email', 'email'),
            array('text', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'email' => Yii::t('models.Order', 'label-email'),
            'name' => Yii::t('models.Order', 'label-name'),
            'phone' => Yii::t('models.Order', 'label-phone'),
            'text' => Yii::t('models.Order', 'label-text'),
            'date' => 'Время',
            'product' => 'Товар',
            'price' => 'Цена',
            'power' => 'Мощность/Диаметр',
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
        $text .= '<br/>Товар - ' . $this->product . ', ' . $this->power
            . ' КВТ';
        $text .= '<br/>Цена - ' . $this->price . ' грн.';
        if ($this->email) {
            $text .= '<br/>Email - ' . $this->email;
        }
        if ($this->phone) {
            $text .= '<br/>Телефон - ' . $this->phone;
        }
        if ($this->text) {
            $text .= '<br/>Комментарий - ' . $this->text;
        }
        $contact = Contact::model()->findByPk(1);
        $mail = new Mail();
        $mail->setTo($contact['email']);
        $mail->setSubject('Клиент заказал товар на сайте');
        $mail->setHtml($text);
        $mail->send();
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}