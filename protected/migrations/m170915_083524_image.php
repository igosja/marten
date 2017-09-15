<?php

class m170915_083524_image extends CDbMigration
{
    public function up()
    {
        $this->addColumn('pageguarantee', 'image_id', 'int(11) default 0');
    }

    public function down()
    {
        $this->dropColumn('pageguarantee', 'image_id');
    }
}