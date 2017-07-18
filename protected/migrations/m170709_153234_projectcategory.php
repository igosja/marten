<?php

class m170709_153234_projectcategory extends CDbMigration
{
    public function up()
    {
        $this->createTable('projectcategory', array(
            'id' => 'pk',
            'name_ru' => 'varchar(255) not null',
            'name_uk' => 'varchar(255) not null',
            'url' => 'varchar(255) not null',
            'order' => 'int(11) default 0',
            'status' => 'int(1) default 1',
        ));

        $this->insertMultiple('projectcategory', array(
            array('name_ru' => 'Бытовые котлы', 'name_uk' => 'Побутові котли', 'url' => 'bytovye_kotly', 'order' => 0),
            array('name_ru' => 'Модульная котельня', 'name_uk' => 'Модульна котельня', 'url' => 'modulynaya_kotelynya', 'order' => 1),
            array('name_ru' => 'Промы', 'name_uk' => 'Промы', 'url' => 'promy', 'order' => 1),
        ));
    }

    public function down()
    {
        $this->dropTable('projectcategory');
    }
}