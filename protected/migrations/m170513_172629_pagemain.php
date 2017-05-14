<?php

class m170513_172629_pagemain extends CDbMigration
{
    public function up()
    {
        $this->createTable('pagemain', array(
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

        $this->insert('pagemain', array('id' => null));
    }

    public function down()
    {
        $this->dropTable('pagemain');
    }
}