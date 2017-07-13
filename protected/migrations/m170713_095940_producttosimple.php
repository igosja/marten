<?php

class m170713_095940_producttosimple extends CDbMigration
{
    public function up()
    {
        $this->createTable('producttosimple', array(
            'id' => 'pk',
            'product_id' => 'int(11) default 0',
            'productsimple_id' => 'int(11) default 0',
        ));
    }

    public function down()
    {
        $this->dropTable('producttosimple');
    }
}