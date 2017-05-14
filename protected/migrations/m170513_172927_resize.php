<?php

class m170513_172927_resize extends CDbMigration
{
    public function up()
    {
        $this->createTable('resize', array(
            'id' => 'pk',
            'cut' => 'tinyint(1) DEFAULT 0',
            'height' => 'int(11) DEFAULT 0',
            'image_id' => 'int(11) DEFAULT 0',
            'url' => 'varchar(255) NOT NULL',
            'width' => 'int(11) DEFAULT 0',
        ));

        $this->createIndex('cut', 'resize', 'cut');
        $this->createIndex('height', 'resize', 'height');
        $this->createIndex('image_id', 'resize', 'image_id');
        $this->createIndex('width', 'resize', 'width');
    }

    public function down()
    {
        $this->dropTable('resize');
    }
}