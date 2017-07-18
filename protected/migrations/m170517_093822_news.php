<?php

class m170517_093822_news extends CDbMigration
{
    public function up()
    {
        $this->createTable('news', array(
            'id' => 'pk',
            'date' => 'int(11) default 0',
            'h1_ru' => 'varchar(255) not null',
            'h1_uk' => 'varchar(255) not null',
            'image_id' => 'int(11) default 0',
            'status' => 'tinyint(1) default 1',
            'text_ru' => 'text not null',
            'text_uk' => 'text not null',
            'url' => 'varchar(255) not null',
            'seo_title_ru' => 'varchar(255) not null',
            'seo_title_uk' => 'varchar(255) not null',
            'seo_description_ru' => 'text not null',
            'seo_description_uk' => 'text not null',
            'seo_keywords_ru' => 'text not null',
            'seo_keywords_uk' => 'text not null',
        ));
    }

    public function down()
    {
        $this->dropTable('news');
    }
}