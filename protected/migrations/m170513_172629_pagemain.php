<?php

class m170513_172629_pagemain extends CDbMigration
{
    public function up()
    {
        $this->createTable('pagemain', array(
            'id' => 'pk',
            'h1_ru' => 'varchar(255) not null',
            'h1_ua' => 'varchar(255) not null',
            'text_1_ru' => 'text not null',
            'text_1_ua' => 'text not null',
            'text_2_ru' => 'text not null',
            'text_2_ua' => 'text not null',
            'video' => 'varchar(15) not null',
            'seo_title_ru' => 'varchar(255) not null',
            'seo_title_ua' => 'varchar(255) not null',
            'seo_description_ru' => 'text not null',
            'seo_description_ua' => 'text not null',
            'seo_keywords_ru' => 'text not null',
            'seo_keywords_ua' => 'text not null',
        ));

        $this->insert('pagemain', array(
            'h1_ru' => 'О компании «Мартен»',
            'h1_ua' => 'Про компанію «Мартен»',
            'text_1_ru' => '<p><strong>Наша компания — Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong><br />
Твердотопливный котел длительного горения Marten станет незаменимым помощником в создании и сбережении тепла Вашего дома. Он идеально подойдет для жилого дома площадью до 980 квадратных метров и не нуждается в постоянном присмотре до 24 часов. Установка твердотопливного котла в Вашем доме - это экономически-аргументированная идеальная альтернатива электрического и газового котла, так как топливом может быть, как древесина так и уголь, щепа, антрацит, топливные брикеты и т. д.</p>	
<p>Важно знать: Стоимость древесины, как топливного сырья местного происхождения, является недорогой и не подвержена серьезным колебаниям.</p>',
            'text_1_ua' => '<p><strong>Наша компания — Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong><br />
Твердотопливный котел длительного горения Marten станет незаменимым помощником в создании и сбережении тепла Вашего дома. Он идеально подойдет для жилого дома площадью до 980 квадратных метров и не нуждается в постоянном присмотре до 24 часов. Установка твердотопливного котла в Вашем доме - это экономически-аргументированная идеальная альтернатива электрического и газового котла, так как топливом может быть, как древесина так и уголь, щепа, антрацит, топливные брикеты и т. д.</p>	
<p>Важно знать: Стоимость древесины, как топливного сырья местного происхождения, является недорогой и не подвержена серьезным колебаниям.</p>',
            'text_2_ru' => '<p>
<strong>Наша компания</strong> — Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
</p>
<p>
Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. Lorem ipsum dolor sit amet, consectetur 	adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.
</p>
<p>
Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.
</p>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.
</p>',
            'text_2_ua' => '<p>
<strong>Наша компания</strong> — Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
</p>
<p>
Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. Lorem ipsum dolor sit amet, consectetur 	adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.
</p>
<p>
Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.
</p>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.
</p>',
            'video' => '5anLPw0Efmo',
            'seo_title_ru' => 'О компании «Мартен»',
            'seo_title_ua' => 'Про компанію «Мартен»',
            'seo_description_ru' => 'О компании «Мартен»',
            'seo_description_ua' => 'Про компанію «Мартен»',
            'seo_keywords_ru' => 'О компании «Мартен»',
            'seo_keywords_ua' => 'Про компанію «Мартен»',
        ));
    }

    public function down()
    {
        $this->dropTable('pagemain');
    }
}