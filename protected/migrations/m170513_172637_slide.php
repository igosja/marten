<?php

class m170513_172637_slide extends CDbMigration
{
    public function up()
    {
        $this->createTable('slide', array(
            'id' => 'pk',
            'image_id' => 'int(11) DEFAULT 0',
            'order' => 'int(11) DEFAULT 0',
            'status' => 'tinyint(1) DEFAULT 1',
        ));

        $this->createIndex('order', 'slide', 'order');
        $this->createIndex('status', 'slide', 'status');
    }

    public function down()
    {
        $this->dropTable('slide');
    }
}