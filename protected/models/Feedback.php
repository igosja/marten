<?php

class Feedback extends CFormModel
{
    public $email;
    public $name;
    public $text;

    public function rules()
    {
        return array(
            array('email, name, text', 'required'),
            array('name', 'length', 'max' => 255),
            array('email', 'email'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'email' => Yii::t('models.Feedback', 'label-email'),
            'name' => Yii::t('models.Feedback', 'label-name'),
            'text' => Yii::t('models.Feedback', 'label-text'),
        );
    }

    public function send()
    {
        $text = 'Имя - ' . $this->name;
        if ($this->email) {
            $text .= '<br/>Email - ' . $this->email;
        }
        if ($this->text) {
            $text .= '<br/>Комментарий - ' . $this->text;
        }
        $contact = Contact::model()->findByPk(1);
        $mail = new Mail();
        $mail->setTo($contact['email']);
        $mail->setSubject('Клиент написал через обратную связь на сайте');
        $mail->setHtml($text);
        $mail->send();
    }
}