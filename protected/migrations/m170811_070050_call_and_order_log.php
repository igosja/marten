<?php

class m170811_070050_call_and_order_log extends CDbMigration
{
    public function up()
    {
        $this->createTable('callme', array(
            'id' => 'pk',
            'date' => 'int(11) default 0',
            'name' => 'varchar(255)',
            'phone' => 'varchar(255)',
            'status' => 'int(1) default 0',
            'text' => 'text',
        ));

        $this->createTable('order', array(
            'id' => 'pk',
            'date' => 'int(11) default 0',
            'email' => 'varchar(255)',
            'name' => 'varchar(255)',
            'phone' => 'varchar(255)',
            'power' => 'varchar(255)',
            'price' => 'decimal(10,2) default 0',
            'product' => 'varchar(255)',
            'status' => 'int(1) default 0',
            'text' => 'text',
        ));
    }

    public function down()
    {
        $this->dropTable('callme');
        $this->dropTable('order');
    }
}