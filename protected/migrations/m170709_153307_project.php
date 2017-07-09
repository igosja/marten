<?php

class m170709_153307_project extends CDbMigration
{
    public function up()
    {
        $this->createTable('project', array(
            'id' => 'pk',
            'projectcategory_id' => 'int(11) default 0',
            'image_id' => 'int(11) default 0',
            'order' => 'int(11) default 0',
            'status' => 'tinyint(1) default 1',
        ));
    }

    public function down()
    {
        $this->dropTable('project');
    }
}