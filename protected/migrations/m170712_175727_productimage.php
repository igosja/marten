<?php

class m170712_175727_productimage extends CDbMigration
{
    public function up()
    {
        $this->createTable('productimage', array(
            'id' => 'pk',
            'image_id' => 'int(11) default 0',
            'product_id' => 'int(11) default 0',
        ));
    }

    public function down()
    {
        $this->dropTable('productimage');
    }
}