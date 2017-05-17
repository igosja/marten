<?php

class m170517_103008_object extends CDbMigration
{
    public function up()
    {
        $this->createTable('object', array(
            'id' => 'pk',
            'category_id' => 'int(11) default 0',
            'image_id' => 'int(11) default 0',
            'status' => 'tinyint(1) default 1',
        ));
    }

    public function down()
    {
        $this->dropTable('object');
    }
}