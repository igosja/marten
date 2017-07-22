<?php

class m170722_103953_producttype extends CDbMigration
{
    public function up()
    {
        $this->createTable('producttype', array(
            'id' => 'pk',
            'name' => 'varchar(255)',
        ));

        $this->insertMultiple('producttype', array(
            array('name' => 'Котёл'),
            array('name' => 'Дымоход'),
        ));

        $this->addColumn('product', 'producttype_id', 'int(1) default 1 after pdf_id');
    }

    public function down()
    {
        $this->dropTable('producttype');

        $this->dropColumn('product', 'producttype_id');
    }
}