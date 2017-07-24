<?php

class m170724_154750_size_characteristic extends CDbMigration
{
    public function up()
    {
        $this->addColumn('productsimple', 'characteristic_ru', 'text');
        $this->addColumn('productsimple', 'characteristic_uk', 'text');
        $this->addColumn('productsimple', 'size_ru', 'text');
        $this->addColumn('productsimple', 'size_uk', 'text');

        $this->dropColumn('product', 'characteristic_ru');
        $this->dropColumn('product', 'characteristic_uk');
        $this->dropColumn('product', 'size_ru');
        $this->dropColumn('product', 'size_uk');
    }

    public function down()
    {
        $this->addColumn('product', 'characteristic_ru', 'text');
        $this->addColumn('product', 'characteristic_uk', 'text');
        $this->addColumn('product', 'size_ru', 'text');
        $this->addColumn('product', 'size_uk', 'text');

        $this->dropColumn('productsimple', 'characteristic_ru');
        $this->dropColumn('productsimple', 'characteristic_uk');
        $this->dropColumn('productsimple', 'size_ru');
        $this->dropColumn('productsimple', 'size_uk');
    }
}