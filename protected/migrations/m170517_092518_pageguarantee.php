<?php

class m170517_092518_pageguarantee extends CDbMigration
{
    public function up()
    {
        $this->createTable('pageguarantee', array(
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

        $this->insert('pageguarantee', array(
            'h1_ru' => 'Гарантии',
            'h1_uk' => 'Гарантії',
            'text_ru' => '<p>
<strong>Наша компания</strong> — Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br />
Твердотопливный котел длительного горения Marten станет незаменимым помощником в создании и сбережении тепла Вашего дома. Он идеально подойдет для жилого дома площадью до 980 квадратных метров и не нуждается в постоянном присмотре до 24 часов. Установка твердотопливного котла в Вашем доме - это экономически-аргументированная идеальная альтернатива электрического и газового котла, так как топливом может быть, как древесина так и уголь, щепа, антрацит, топливные брикеты и т. д.
</p>
<p>
Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.
</p>
<p>
Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus 	et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. 
</p>',
            'text_uk' => '<p>
<strong>Наша компания</strong> — Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br />
Твердотопливный котел длительного горения Marten станет незаменимым помощником в создании и сбережении тепла Вашего дома. Он идеально подойдет для жилого дома площадью до 980 квадратных метров и не нуждается в постоянном присмотре до 24 часов. Установка твердотопливного котла в Вашем доме - это экономически-аргументированная идеальная альтернатива электрического и газового котла, так как топливом может быть, как древесина так и уголь, щепа, антрацит, топливные брикеты и т. д.
</p>
<p>
Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.
</p>
<p>
Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus 	et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. 
</p>',
            'seo_title_ru' => 'Гарантии',
            'seo_title_uk' => 'Гарантії',
            'seo_description_ru' => 'Гарантии',
            'seo_description_uk' => 'Гарантії',
            'seo_keywords_ru' => 'Гарантии',
            'seo_keywords_uk' => 'Гарантії',
        ));
    }

    public function down()
    {
        $this->dropTable('pageguarantee');
    }
}