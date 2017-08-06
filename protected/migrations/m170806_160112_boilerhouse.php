<?php

class m170806_160112_boilerhouse extends CDbMigration
{
    public function up()
    {
        $this->insert('producttype',
            array('name' => 'Котельная')
        );
    }

    public function down()
    {
        return true;
    }
}