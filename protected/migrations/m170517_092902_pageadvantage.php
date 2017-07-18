<?php

class m170517_092902_pageadvantage extends CDbMigration
{
    public function up()
    {
        $this->createTable('pageadvantage', array(
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

        $this->insert('pageadvantage', array(
            'h1_ru' => 'Преимущества работы с нами',
            'h1_uk' => 'Переваги роботи с нами',
            'text_ru' => '<p>
<strong>Наша компания</strong> — Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br />
Твердотопливный котел длительного горения Marten станет незаменимым помощником в создании и сбережении тепла Вашего дома. Он идеально подойдет для жилого дома площадью до 980 квадратных метров и не нуждается в постоянном присмотре до 24 часов. Установка твердотопливного котла в Вашем доме - это экономически-аргументированная идеальная альтернатива электрического и газового котла, так как топливом может быть, как древесина так и уголь, щепа, антрацит, топливные брикеты и т. д.
</p>',
            'text_uk' => '<p>
<strong>Наша компания</strong> — Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br />
Твердотопливный котел длительного горения Marten станет незаменимым помощником в создании и сбережении тепла Вашего дома. Он идеально подойдет для жилого дома площадью до 980 квадратных метров и не нуждается в постоянном присмотре до 24 часов. Установка твердотопливного котла в Вашем доме - это экономически-аргументированная идеальная альтернатива электрического и газового котла, так как топливом может быть, как древесина так и уголь, щепа, антрацит, топливные брикеты и т. д.
</p>',
            'seo_title_ru' => 'Преимущества работы с нами',
            'seo_title_uk' => 'Переваги роботи с нами',
            'seo_description_ru' => 'Преимущества работы с нами',
            'seo_description_uk' => 'Переваги роботи с нами',
            'seo_keywords_ru' => 'Преимущества работы с нами',
            'seo_keywords_uk' => 'Переваги роботи с нами',
        ));
    }

    public function down()
    {
        $this->dropTable('pageadvantage');
    }
}