<?php

class m170514_093836_category extends CDbMigration
{
    public function up()
    {
        $this->createTable('category', array(
            'id' => 'pk',
            'h1_ru' => 'varchar(255) not null',
            'h1_ua' => 'varchar(255) not null',
            'name_ru' => 'varchar(255) not null',
            'name_ua' => 'varchar(255) not null',
            'parent_id' => 'integer(11) default 0',
            'order' => 'int(11) DEFAULT 0',
            'status' => 'tinyint(1) DEFAULT 1',
            'seo_title_ru' => 'varchar(255) not null',
            'seo_title_ua' => 'varchar(255) not null',
            'seo_description_ru' => 'text not null',
            'seo_description_ua' => 'text not null',
            'seo_keywords_ru' => 'text not null',
            'seo_keywords_ua' => 'text not null',
        ));
    }

    public function down()
    {
        $this->dropTable('category');
    }
}