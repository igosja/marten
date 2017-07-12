<?php

class m170712_180815_productalso extends CDbMigration
{
    public function up()
    {
        $this->createTable('productalso', array(
            'id' => 'pk',
            'child_id' => 'int(11) default 0',
            'parent_id' => 'int(11) default 0',
        ));
    }

    public function down()
    {
        $this->dropTable('productalso');
    }
}