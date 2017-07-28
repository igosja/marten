<?php

class m170728_114345_catogory_to_product extends CDbMigration
{
    public function up()
    {
        $this->dropColumn('productsimple', 'category_id');
        $this->addColumn('product', 'category_id', 'int(11) default 0');
        $this->update('product', array('category_id' => 3));
    }

    public function down()
    {
        $this->dropColumn('product', 'category_id');
        $this->addColumn('productsimple', 'category_id', 'int(11) default 0');
        $this->update('productsimple', array('category_id' => 3));
    }
}