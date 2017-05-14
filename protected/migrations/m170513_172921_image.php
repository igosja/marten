<?php

class m170513_172921_image extends CDbMigration
{
    public function up()
    {
        $this->createTable('image', array(
            'id' => 'pk',
            'url' => 'varchar(255) NOT NULL',
        ));
    }

    public function down()
    {
        $this->dropTable('image');
    }
}