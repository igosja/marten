<?php

class m170517_092503_pagepayment extends CDbMigration
{
    public function up()
    {
        $this->createTable('pagepayment', array(
            'id' => 'pk',
            'h1_ru' => 'varchar(255) not null',
            'h1_uk' => 'varchar(255) not null',
            'text_ru' => 'text not null',
            'text_uk' => 'text not null',
            'seo_title_ru' => 'varchar(255) not null',
            'seo_title_uk' => 'varchar(255) not null',
            'seo_description_ru' => 'text not null',
            'seo_description_uk' => 'text not null',
            'seo_keywords_ru' => 'text not null',
            'seo_keywords_uk' => 'text not null',
        ));

        $this->insert('pagepayment', array(
            'h1_ru' => 'Оплата и доставка',
            'h1_uk' => 'Оплата та доставка',
            'text_ru' => '<div class="payment__item">
<h2 class="payment__item__title">Самовывоз из магазина:</h2> 
<ul>
<li>
Заказы, принятые до 15:30, выдаются «день в день».
</li>
<li>
Заказы, принятые после 15:30, выдаются на следующий день.
</li>
<li>
В рабочее время Вы сможете забрать покупку без дополнительных затрат
на доставку.
</li>
</ul>
<h3 class="payment__item__sm-title">Оплата</h3>
<ul>
<li>
Наличными при получении
</li>
<li>
Оплата на карту Приват Банка
</li>
</ul>
</div>
<div class="payment__item">
<h2 class="payment__item__title">Новая почта, Интайм, Ваш час</h2>
<ul>
<li>
Заказы, принятые до 15:30, отправляются «день в день» на отделения Новой Почты.
</li>
<li>
Заказы принятые после 15:30, отправляются на следующий день.
</li>
<li>
Стоимость доставки по Украине и Киеву согласно тарифам Новой Почты.
</li>
</ul>
<h3 class="payment__item__sm-title">Оплата</h3>
<ul>
<li>
Наложенный платеж.
</li>
<li>
Оплата на карту Приват Банка.
</li>
<li>
Автоматическое пополнение через сервис Приват24.
</li>
</ul>
<p class="payment__note">
Обращаем ваше внимание, оплата с помощью наложенного платежа требует дополнительных затрат: комиссия в размере 17 грн + 2% от суммы перевода.
</p>
</div>',
            'text_uk' => '<div class="payment__item">
<h2 class="payment__item__title">Самовывоз из магазина:</h2> 
<ul>
<li>
Заказы, принятые до 15:30, выдаются «день в день».
</li>
<li>
Заказы, принятые после 15:30, выдаются на следующий день.
</li>
<li>
В рабочее время Вы сможете забрать покупку без дополнительных затрат
на доставку.
</li>
</ul>
<h3 class="payment__item__sm-title">Оплата</h3>
<ul>
<li>
Наличными при получении
</li>
<li>
Оплата на карту Приват Банка
</li>
</ul>
</div>
<div class="payment__item">
<h2 class="payment__item__title">Новая почта, Интайм, Ваш час</h2>
<ul>
<li>
Заказы, принятые до 15:30, отправляются «день в день» на отделения Новой Почты.
</li>
<li>
Заказы принятые после 15:30, отправляются на следующий день.
</li>
<li>
Стоимость доставки по Украине и Киеву согласно тарифам Новой Почты.
</li>
</ul>
<h3 class="payment__item__sm-title">Оплата</h3>
<ul>
<li>
Наложенный платеж.
</li>
<li>
Оплата на карту Приват Банка.
</li>
<li>
Автоматическое пополнение через сервис Приват24.
</li>
</ul>
<p class="payment__note">
Обращаем ваше внимание, оплата с помощью наложенного платежа требует дополнительных затрат: комиссия в размере 17 грн + 2% от суммы перевода.
</p>
</div>',
            'seo_title_ru' => 'Оплата и доставка',
            'seo_title_uk' => 'Оплата та доставка',
            'seo_description_ru' => 'Оплата и доставка',
            'seo_description_uk' => 'Оплата та доставка',
            'seo_keywords_ru' => 'Оплата и доставка',
            'seo_keywords_uk' => 'Оплата та доставка',
            ));
    }

    public function down()
    {
        $this->dropTable('pagepayment');
    }
}