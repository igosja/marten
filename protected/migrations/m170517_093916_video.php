<?php

class m170517_093916_video extends CDbMigration
{
    public function up()
    {
        $this->createTable('video', array(
            'id' => 'pk',
            'code' => 'varchar(15) not null',
            'status' => 'tinyint(1) default 1',
        ));
    }

    public function down()
    {
        $this->dropTable('video');
    }
}