<?php

class m170517_093831_product extends CDbMigration
{
    public function up()
    {
        $this->createTable('product', array(
            'id' => 'pk',
            'category_id' => 'int(11) default 0',
            'h1_ru' => 'varchar(255) not null',
            'h1_ua' => 'varchar(255) not null',
            'instock' => 'int(1) default 1',
            'text_1_ru' => 'text not null',
            'text_1_ua' => 'text not null',
            'description_ru' => 'text not null',
            'description_ua' => 'text not null',
            'characteristic_ru' => 'text not null',
            'characteristic_ua' => 'text not null',
            'size' => 'int(11) default 0',
            'pdf' => 'int(11) default 0',
            'text_2_ru' => 'text not null',
            'text_2_ua' => 'text not null',
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
        $this->dropTable('product');
    }
}