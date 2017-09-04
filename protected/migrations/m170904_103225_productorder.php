<?php

class m170904_103225_productorder extends CDbMigration
{
    public function up()
    {
        $this->addColumn('product', 'order', 'INT(11) DEFAULT 0');
    }

    public function down()
    {
        $this->dropColumn('product', 'order');
    }
}