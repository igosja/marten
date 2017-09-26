<?php

class Review extends CActiveRecord
{
    const ON_PAGE_PRODUCT = 3;
    const ON_PAGE_CATEGORY = 4;

    public function tableName()
    {
        return 'review';
    }

    public function rules()
    {
        return array(
            array('email', 'email'),
            array('email, name', 'length', 'max' => 255),
            array('email, name, product_id, rating, text', 'required'),
            array('date, product_id, rating, status', 'numerical'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'date' => 'Дата добавления',
            'email' => 'Email',
            'name' => 'Имя',
            'product_id' => 'Товар',
            'rating' => 'Оценка',
            'status' => 'Статус',
            'text' => 'Текст',
        );
    }

    public function beforeSave()
    {
        if (parent::beforeSave()) {
            if (!$this->date) {
                $this->date = time();
            }
        }
        return true;
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('name', $this->name, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function relations()
    {
        return array(
            'product' => array(self::HAS_ONE, 'Product', array('id' => 'product_id')),
        );
    }

    public function send()
    {
        $text = 'Товар - ' . $this->product->h1_ru;
        $text .= '<br/>Отзыв - ' . $this->text;
        $contact = Contact::model()->findByPk(1);
        $mail = new Mail();
        $mail->setTo($contact['email']);
        $mail->setSubject('Появился новый отзыв на сайте');
        $mail->setHtml($text);
        $mail->send();
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}