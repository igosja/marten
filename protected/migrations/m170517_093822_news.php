<?php

class m170517_093822_news extends CDbMigration
{
    public function up()
    {
        $this->createTable('news', array(
            'id' => 'pk',
            'date' => 'int(11) default 0',
            'h1_ru' => 'varchar(255) not null',
            'h1_ua' => 'varchar(255) not null',
            'image_id' => 'int(11) default 0',
            'text_ru' => 'text not null',
            'text_ua' => 'text not null',
            'seo_title_ru' => 'varchar(255) not null',
            'seo_title_ua' => 'varchar(255) not null',
            'seo_description_ru' => 'text not null',
            'seo_description_ua' => 'text not null',
            'seo_keywords_ru' => 'text not null',
            'seo_keywords_ua' => 'text not null',
            'status' => 'tinyint(1) default 1',
        ));
    }

    public function down()
    {
        $this->dropTable('news');
    }
}