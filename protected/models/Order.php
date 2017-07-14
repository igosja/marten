<?php

class Order extends CFormModel
{
    public $email;
    public $name;
    public $phone;
    public $power;
    public $product;
    public $text;

    public function rules()
    {
        return array(
            array('name, phone', 'required'),
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
        );
    }

    public function send()
    {
        $text = 'Имя - ' . $this->name;
        $text .= '<br/>Товар - ' . $this->product . ', ' . $this->power . ' КВТ';
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
}