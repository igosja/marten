<?php

class m170708_140601_videocategory extends CDbMigration
{
    public function up()
    {
        $this->createTable('videocategory', array(
            'id' => 'pk',
            'name_ru' => 'varchar(255) not null',
            'name_uk' => 'varchar(255) not null',
            'order' => 'int(11) default 0',
            'status' => 'int(1) default 1',
        ));
    }

    public function down()
    {
        $this->dropTable('videocategory');
    }
}