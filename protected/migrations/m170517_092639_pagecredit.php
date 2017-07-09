<?php

class m170517_092639_pagecredit extends CDbMigration
{
    public function up()
    {
        $this->createTable('pagecredit', array(
            'id' => 'pk',
            'h1_ru' => 'varchar(255) not null',
            'h1_ua' => 'varchar(255) not null',
            'text_ru' => 'text not null',
            'text_ua' => 'text not null',
            'seo_title_ru' => 'varchar(255) not null',
            'seo_title_ua' => 'varchar(255) not null',
            'seo_description_ru' => 'text not null',
            'seo_description_ua' => 'text not null',
            'seo_keywords_ru' => 'text not null',
            'seo_keywords_ua' => 'text not null',
        ));

        $this->insert('pagecredit', array(
            'h1_ru' => 'Котлы в кредит',
            'h1_ua' => 'Котли в кредит',
            'text_ru' => '<div class="clearfix">
<img src="/img/kredit-img.png" alt="" class="img-left">
<p>Рады сообщить, что Ощадбанком возобновлено кредитование на приобретение энергосберегающих материалов и негазових котлов с компенсацией части суммы кредита в рамках Государственной программы.</p>
<p>На приобретение котла использующего любые виды топлива и энергии (кроме природного газа и электроэнергии) с компенсацией от 20 до 35 процентов суммы кредита (максимум 12 тыс. грн.).</p>
<p>На приобретени энергоэффективного оборудования и/или материалов с компенсацией 35 процентов суммы кредита  (максимум 14 тыс.грн.).</p>
</div>
<div class="kredit__item">
<h3>УСЛОВИЯ ПОЛУЧЕНИЯ КРЕДИТА</h3>
<p>Сумма кредита - от 1 000 до 50 000 грн.</p>
<p>Начальный взнос - 10 % стоимости товара</p>
<p>Cрок кредитования - до 3 лет.</p>
<p>Процентная ставка – 17,99 % годовых. (для наших клиентов - 12 % годовых на 1-й год кредитования).</p>
<p>Разовая комиссия за предоставление кредита 4,3 % от суммы кредита.</p>
</div>
<div class="kredit__item">
<h3>НЕОБХОДИМЫЕ ДОКУМЕНТЫ</h3>
<ul>
<li>Паспорт</li>
<li>Налоговый номер</li>
<li>Документ про полученные доходы за 6 месяцев</li>
<li>Счет-фактура на товар (для получения счета достаточно связаться с нами по телефонам, указанным здесь) <a href="">Подробнее</a></li>
</ul>
</div>
<div class="divider"></div>
<div class="kredit__item">
<h3 class="bigger">Преимущества:</h3>
<ul class="birds">
<li>Срок кредита до 36 месяцев;</li>
<li>Решение банка о предоставлении кредита занимает 10-15 минут;</li>
<li>Возможность приобрести любой товар не выходя из дома;</li>
<li>Удобное погашение кредита в терминалах и отделениях банка по всей Украине.</li>
</ul>
</div>
<div class="kredit__item">
<h3 class="bigger">Требования:</h3>
<ul>
<li>Необходимые документы — паспорт гражданина Украины и ИНН;</li>
<li>Возраст от 21 до 70 лет.;</li>
</ul>
</div>
<div class="kredit__item">
<h3 class="bigger">Условия:</h3>
<ul>
<li>Необходимые документы — паспорт гражданина Украины и ИНН;</li>
<li>Возраст от 21 до 70 лет.;</li>
</ul>
</div>
<div class="kredit__item">
<h3 class="bigger">Как получить:</h3>
<ul>
<li>Выберите понравившийся товар в магазине;</li>
<li>Сообщите менеджеру о желании «купить в кредит»;</li>
<li>Заполните анкету, которая придёт к Вам на почту ;</li>
<li>Документы на подписание доставит вам домой курьер банка;</li>
<li>С вами свяжется менеджер магазина для уточнения времени выдачи товара <a href="">Подробнее</a></li>
</ul>
</div>
<div class="grey-text">
<div class="divider"></div>
<p><strong>Наша компания</strong> — Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
<p>Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.</p>
<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
<p>Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
</div>',
            'text_ua' => '<div class="clearfix">
<img src="/img/kredit-img.png" alt="" class="img-left">
<p>Рады сообщить, что Ощадбанком возобновлено кредитование на приобретение энергосберегающих материалов и негазових котлов с компенсацией части суммы кредита в рамках Государственной программы.</p>
<p>На приобретение котла использующего любые виды топлива и энергии (кроме природного газа и электроэнергии) с компенсацией от 20 до 35 процентов суммы кредита (максимум 12 тыс. грн.).</p>
<p>На приобретени энергоэффективного оборудования и/или материалов с компенсацией 35 процентов суммы кредита  (максимум 14 тыс.грн.).</p>
</div>
<div class="kredit__item">
<h3>УСЛОВИЯ ПОЛУЧЕНИЯ КРЕДИТА</h3>
<p>Сумма кредита - от 1 000 до 50 000 грн.</p>
<p>Начальный взнос - 10 % стоимости товара</p>
<p>Cрок кредитования - до 3 лет.</p>
<p>Процентная ставка – 17,99 % годовых. (для наших клиентов - 12 % годовых на 1-й год кредитования).</p>
<p>Разовая комиссия за предоставление кредита 4,3 % от суммы кредита.</p>
</div>
<div class="kredit__item">
<h3>НЕОБХОДИМЫЕ ДОКУМЕНТЫ</h3>
<ul>
<li>Паспорт</li>
<li>Налоговый номер</li>
<li>Документ про полученные доходы за 6 месяцев</li>
<li>Счет-фактура на товар (для получения счета достаточно связаться с нами по телефонам, указанным здесь) <a href="">Подробнее</a></li>
</ul>
</div>
<div class="divider"></div>
<div class="kredit__item">
<h3 class="bigger">Преимущества:</h3>
<ul class="birds">
<li>Срок кредита до 36 месяцев;</li>
<li>Решение банка о предоставлении кредита занимает 10-15 минут;</li>
<li>Возможность приобрести любой товар не выходя из дома;</li>
<li>Удобное погашение кредита в терминалах и отделениях банка по всей Украине.</li>
</ul>
</div>
<div class="kredit__item">
<h3 class="bigger">Требования:</h3>
<ul>
<li>Необходимые документы — паспорт гражданина Украины и ИНН;</li>
<li>Возраст от 21 до 70 лет.;</li>
</ul>
</div>
<div class="kredit__item">
<h3 class="bigger">Условия:</h3>
<ul>
<li>Необходимые документы — паспорт гражданина Украины и ИНН;</li>
<li>Возраст от 21 до 70 лет.;</li>
</ul>
</div>
<div class="kredit__item">
<h3 class="bigger">Как получить:</h3>
<ul>
<li>Выберите понравившийся товар в магазине;</li>
<li>Сообщите менеджеру о желании «купить в кредит»;</li>
<li>Заполните анкету, которая придёт к Вам на почту ;</li>
<li>Документы на подписание доставит вам домой курьер банка;</li>
<li>С вами свяжется менеджер магазина для уточнения времени выдачи товара <a href="">Подробнее</a></li>
</ul>
</div>
<div class="grey-text">
<div class="divider"></div>
<p><strong>Наша компания</strong> — Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
<p>Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.</p>
<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
<p>Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
</div>',
            'seo_title_ru' => 'Котлы в кредит',
            'seo_title_ua' => 'Котли в кредит',
            'seo_description_ru' => 'Котлы в кредит',
            'seo_description_ua' => 'Котли в кредит',
            'seo_keywords_ru' => 'Котлы в кредит',
            'seo_keywords_ua' => 'Котли в кредит',
        ));
    }

    public function down()
    {
        $this->dropTable('pagecredit');
    }
}