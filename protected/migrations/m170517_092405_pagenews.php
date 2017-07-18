<?php

class m170517_092405_pagenews extends CDbMigration
{
    public function up()
    {
        $this->createTable('pagenews', array(
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

        $this->insert('pagenews', array(
            'h1_ru' => 'Статьи',
            'h1_uk' => 'Статті',
            'seo_title_ru' => 'Статьи',
            'seo_title_uk' => 'Статті',
            'seo_description_ru' => 'Статьи',
            'seo_description_uk' => 'Статті',
            'seo_keywords_ru' => 'Статьи',
            'seo_keywords_uk' => 'Статті',
        ));
    }

    public function down()
    {
        $this->dropTable('pagenews');
    }
}