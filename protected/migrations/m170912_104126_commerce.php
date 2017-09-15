<?php

class m170912_104126_commerce extends CDbMigration
{
    public function up()
    {
        $this->createTable('commerce', array(
            'id' => 'pk',
            'bufer' => 'varchar(255)',
            'date' => 'int(11) default 0',
            'dust' => 'varchar(255)',
            'electro' => 'varchar(255)',
            'email' => 'varchar(255)',
            'fuel' => 'varchar(255)',
            'fuelmethod' => 'varchar(255)',
            'gas' => 'varchar(255)',
            'gsm' => 'varchar(255)',
            'height' => 'varchar(255)',
            'hot' => 'varchar(255)',
            'kkal' => 'varchar(255)',
            'name' => 'varchar(255)',
            'net' => 'varchar(255)',
            'object' => 'varchar(255)',
            'phone' => 'varchar(255)',
            'price' => 'decimal(10,2) default 0',
            'product' => 'varchar(255)',
            'project' => 'varchar(255)',
            'power' => 'varchar(255)',
            'pusk' => 'varchar(255)',
            'quantity' => 'int(11)',
            'size' => 'varchar(255)',
            'smoke' => 'varchar(255)',
            'staff' => 'varchar(255)',
            'status' => 'int(1) default 0',
            'text' => 'text',
            'warehouse' => 'varchar(255)',
            'warm' => 'varchar(255)',
            'warmcounter' => 'varchar(255)',
            'water' => 'varchar(255)',
            'weather' => 'varchar(255)',
        ));
    }

    public function down()
    {
        $this->dropTable('commerce');
    }
}