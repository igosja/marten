<?php

class m170709_103419_aboutphoto extends CDbMigration
{
    public function up()
    {
        $this->createTable('aboutphoto', array(
            'id' => 'pk',
            'image_id' => 'int(11) default 0',
            'order' => 'int(11) default 0',
            'status' => 'tinyint(1) default 1',
        ));
    }

    public function down()
    {
        $this->dropTable('aboutphoto');
    }
}