<?php

class Commerce extends CActiveRecord
{
    public function tableName()
    {
        return 'commerce';
    }

    public function rules()
    {
        return array(
            array('name, phone', 'required'),
            array('date, price, quantity', 'numerical'),
            array('name, phone, power, product, gas, electro, warm, kkal, quantity, height, project, pusk, fuel,
             fuelmethod, weather, smoke, dust, water, net, gsm, bufer, hot, warmcounter, warehouse, staff, size',
                'length', 'max' => 255),
            array('email', 'email'),
            array('text, object', 'safe'),
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
            'object' => 'Наименование объекта',
            'gas' => 'Газ, м3',
            'electro' => 'Электричество, кВт',
            'warm' => 'Ценрализиваное отопление, Гкал',
            'kkal' => 'Текущая стоимость ГКал, грн с НДС',
            'quantity' => 'Количество котлов, шт',
            'height' => 'Высота дымовой трубы, м',
            'project' => 'Проектирование',
            'pusk' => 'Монтаж и пуско-наладка',
            'fuel' => 'Применяемое топливо',
            'fuelmethod' => 'Топливоподача',
            'weather' => 'Погодозависимая автоматика',
            'smoke' => 'Дымосос',
            'dust' => 'Циклон пылеуловитель',
            'water' => 'Хим-водоочистка',
            'net' => 'Насос сетевого контура',
            'gsm' => 'GSM-модуль диспетчиризации',
            'bufer' => 'Буферная емкость, л',
            'hot' => 'Приготовление горячей воды',
            'warmcounter' => 'Тепловой счетчик',
            'warehouse' => 'Склад запаса топлива',
            'size' => 'Объем склада, дней',
            'staff' => 'Комната персонала',
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
        $mail->setSubject('Клиент заказал комерческое предложение на сайте');
        $mail->setHtml($text);
        $mail->send();
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}