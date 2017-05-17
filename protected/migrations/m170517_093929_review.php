<?php

class m170517_093929_review extends CDbMigration
{
    public function up()
    {
        $this->createTable('review', array(
            'id' => 'pk',
            'date' => 'int(11) default 0',
            'product_id' => 'int(11) default 0',
            'status' => 'tinyint(1) default 0',
            'text' => 'text not null',
        ));
    }

    public function down()
    {
        $this->dropTable('review');
    }
}