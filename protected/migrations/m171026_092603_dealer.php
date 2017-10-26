<?php

class m171026_092603_dealer extends CDbMigration
{
    public function up()
    {
        $this->createTable('dealer', array(
            'id' => 'pk',
            'date' => 'int(11) default 0',
            'email' => 'varchar(255)',
            'name' => 'varchar(255)',
            'phone' => 'varchar(255)',
            'shoptype' => 'varchar(255)',
            'site' => 'varchar(255)',
            'status' => 'int(1) default 0',
            'text' => 'text',
        ));
    }

    public function down()
    {
        $this->dropTable('dealer');
    }
}