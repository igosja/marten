<?php

class m170517_092451_pagereview extends CDbMigration
{
    public function up()
    {
        $this->createTable('pagereview', array(
            'id' => 'pk',
            'h1_ru' => 'varchar(255) not null',
            'h1_ua' => 'varchar(255) not null',
            'seo_title_ru' => 'varchar(255) not null',
            'seo_title_ua' => 'varchar(255) not null',
            'seo_description_ru' => 'text not null',
            'seo_description_ua' => 'text not null',
            'seo_keywords_ru' => 'text not null',
            'seo_keywords_ua' => 'text not null',
        ));

        $this->insert('pagereview', array(
            'h1_ru' => 'Отзывы',
            'h1_ua' => 'Відгуки',
            'seo_title_ru' => 'Отзывы',
            'seo_title_ua' => 'Відгуки',
            'seo_description_ru' => 'Отзывы',
            'seo_description_ua' => 'Відгуки',
            'seo_keywords_ru' => 'Отзывы',
            'seo_keywords_ua' => 'Відгуки',
        ));
    }

    public function down()
    {
        $this->dropTable('pagereview');
    }
}