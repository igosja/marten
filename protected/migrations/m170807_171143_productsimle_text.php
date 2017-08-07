<?php

class m170807_171143_productsimle_text extends CDbMigration
{
    public function up()
    {
        $this->addColumn('productsimple', 'text_ru', 'text');
        $this->addColumn('productsimple', 'text_uk', 'text');
        $this->renameColumn('product', 'text_2_ru', 'text_ru');
        $this->renameColumn('product', 'text_2_uk', 'text_uk');
        $this->dropColumn('product', 'text_1_ru');
        $this->dropColumn('product', 'text_1_uk');
    }

    public function down()
    {
        $this->dropColumn('productsimple', 'text_ru');
        $this->dropColumn('productsimple', 'text_uk');
        $this->renameColumn('product', 'text_ru', 'text_2_ru');
        $this->renameColumn('product', 'text_uk', 'text_2_uk');
        $this->addColumn('product', 'text_1_ru', 'text');
        $this->addColumn('product', 'text_1_uk', 'text');
    }
}