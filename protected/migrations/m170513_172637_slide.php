<?php

class m170513_172637_slide extends CDbMigration
{
    public function up()
    {
        $this->createTable('slide', array(
            'id' => 'pk',
            'image_id' => 'int(11) default 0',
            'order' => 'int(11) default 0',
            'status' => 'tinyint(1) default 1',
        ));
    }

    public function down()
    {
        $this->dropTable('slide');
    }
}