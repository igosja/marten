<?php

class m170517_093916_video extends CDbMigration
{
    public function up()
    {
        $this->createTable('video', array(
            'id' => 'pk',
            'code' => 'varchar(15) not null',
            'status' => 'int(1) default 1',
            'videocategory_id' => 'int(11) default 0',
        ));
    }

    public function down()
    {
        $this->dropTable('video');
    }
}