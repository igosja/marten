<?php

class m170517_093831_product extends CDbMigration
{
    public function up()
    {
        $this->createTable('product', array(
            'id' => 'pk',
            'category_id' => 'int(11) default 0',
            'characteristic_ru' => 'text not null',
            'characteristic_uk' => 'text not null',
            'description_ru' => 'text not null',
            'description_uk' => 'text not null',
            'h1_ru' => 'varchar(255) not null',
            'h1_uk' => 'varchar(255) not null',
            'instock' => 'int(1) default 1',
            'pdf_id' => 'int(11) default 0',
            'size_id' => 'int(11) default 0',
            'size_ru' => 'text not null',
            'size_uk' => 'text not null',
            'status' => 'tinyint(1) default 1',
            'text_1_ru' => 'text not null',
            'text_1_uk' => 'text not null',
            'text_2_ru' => 'text not null',
            'text_2_uk' => 'text not null',
            'url' => 'varchar(255) not null',
            'video' => 'varchar(15) not null',
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
        $this->dropTable('product');
    }
}