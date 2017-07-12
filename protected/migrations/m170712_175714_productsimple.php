<?php

class m170712_175714_productsimple extends CDbMigration
{
    public function up()
    {
        $this->createTable('productsimple', array(
            'id' => 'pk',
            'name' => 'varchar(255) not null',
            'power' => 'int(11) default 0',
            'price' => 'int(11) default 0',
            'sku' => 'varchar(255) not null',
        ));
    }

    public function down()
    {
        $this->dropTable('productsimple');
    }
}