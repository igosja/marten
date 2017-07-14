<?php

class m170517_093929_review extends CDbMigration
{
    public function up()
    {
        $this->createTable('review', array(
            'id' => 'pk',
            'date' => 'int(11) default 0',
            'email' => 'varchar(255) not null',
            'name' => 'varchar(255) not null',
            'product_id' => 'int(11) default 0',
            'rating' => 'int(1) default 5',
            'status' => 'tinyint(1) default 0',
            'text' => 'text not null',
        ));
    }

    public function down()
    {
        $this->dropTable('review');
    }
}