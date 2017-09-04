<?php

class m170904_091847_producttext extends CDbMigration
{
    public function up()
    {
        $this->addColumn('product', 'categorytext_ru', 'TEXT AFTER `id`');
        $this->addColumn('product', 'categorytext_uk', 'TEXT AFTER `categorytext_ru`');
    }

    public function down()
    {
        $this->dropColumn('product', 'categorytext_ru');
        $this->dropColumn('product', 'categorytext_uk');
    }
}