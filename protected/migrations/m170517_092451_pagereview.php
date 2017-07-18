<?php

class m170517_092451_pagereview extends CDbMigration
{
    public function up()
    {
        $this->createTable('pagereview', array(
            'id' => 'pk',
            'h1_ru' => 'varchar(255) not null',
            'h1_uk' => 'varchar(255) not null',
            'seo_title_ru' => 'varchar(255) not null',
            'seo_title_uk' => 'varchar(255) not null',
            'seo_description_ru' => 'text not null',
            'seo_description_uk' => 'text not null',
            'seo_keywords_ru' => 'text not null',
            'seo_keywords_uk' => 'text not null',
        ));

        $this->insert('pagereview', array(
            'h1_ru' => 'Отзывы',
            'h1_uk' => 'Відгуки',
            'seo_title_ru' => 'Отзывы',
            'seo_title_uk' => 'Відгуки',
            'seo_description_ru' => 'Отзывы',
            'seo_description_uk' => 'Відгуки',
            'seo_keywords_ru' => 'Отзывы',
            'seo_keywords_uk' => 'Відгуки',
        ));
    }

    public function down()
    {
        $this->dropTable('pagereview');
    }
}