<?php

class m170517_092624_contact extends CDbMigration
{

    public function up()
    {
        $this->createTable('contact', array(
            'id' => 'pk',
            'address_1_ru' => 'varchar(255) not null',
            'address_1_uk' => 'varchar(255) not null',
            'address_2_ru' => 'varchar(255) not null',
            'address_2_uk' => 'varchar(255) not null',
            'address_head_ru' => 'varchar(255) not null',
            'address_head_uk' => 'varchar(255) not null',
            'company_ru' => 'varchar(255) not null',
            'company_uk' => 'varchar(255) not null',
            'email' => 'varchar(255) not null',
            'google_lat' => 'decimal(15,12) default 0',
            'google_lng' => 'decimal(15,12) default 0',
            'h1_ru' => 'varchar(255) not null',
            'h1_uk' => 'varchar(255) not null',
            'hours_monday' => 'varchar(255) not null',
            'hours_saturday' => 'varchar(255) not null',
            'phone_city' => 'varchar(255) not null',
            'phone_kyivstar' => 'varchar(255) not null',
            'phone_life' => 'varchar(255) not null',
            'phone_umc' => 'varchar(255) not null',
            'seo_title_ru' => 'varchar(255) not null',
            'seo_title_uk' => 'varchar(255) not null',
            'seo_description_ru' => 'text not null',
            'seo_description_uk' => 'text not null',
            'seo_keywords_ru' => 'text not null',
            'seo_keywords_uk' => 'text not null',
        ));

        $this->insert('contact', array(
            'address_1_ru' => '01051, Киев,',
            'address_1_uk' => '01051, Київ,',
            'address_2_ru' => 'ул. Борщаговская, 23, офис 1',
            'address_2_uk' => 'вул. Борщагівська, 23, офіс 1',
            'address_head_ru' => 'г. Киев, пр. Леся Курбаса 1а',
            'address_head_uk' => 'м. Київ, пр. Леся Курбаса 1а',
            'company_ru' => 'Компания "Мартен"',
            'company_uk' => 'Компанія "Мартен"',
            'email' => 'info@marten.ua',
            'google_lat' => '50.4469359',
            'google_lng' => '30.4641351',
            'h1_ru' => 'Контакты',
            'h1_uk' => 'Контакти',
            'hours_monday' => '9:00 – 20:00',
            'hours_saturday' => '10:00 – 17:00',
            'phone_city' => '(044) 482-36-00',
            'phone_kyivstar' => '(098) 123-45-67',
            'phone_life' => '(063) 123-45-67',
            'phone_umc' => '(050) 123-45-67',
            'seo_title_ru' => 'Контакты',
            'seo_title_uk' => 'Контакти',
            'seo_description_ru' => 'Контакты',
            'seo_description_uk' => 'Контакти',
            'seo_keywords_ru' => 'Контакты',
            'seo_keywords_uk' => 'Контакти',
        ));
    }

    public function down()
    {
        $this->dropTable('contact');
    }
}