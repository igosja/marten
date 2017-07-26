<?php

class m170726_122425_image_and_category_to_simple extends CDbMigration
{
    public function up()
    {
        $this->dropColumn('product', 'category_id');
        $this->addColumn('productsimple', 'category_id', 'int(11) default 0');
        $this->update('productsimple', array('category_id' => 3));

        $this->renameColumn('productimage', 'product_id', 'productsimple_id');
    }

    public function down()
    {
        $this->dropColumn('productsimple', 'category_id');
        $this->addColumn('product', 'category_id', 'int(11) default 0');
        $this->update('product', array('category_id' => 3));

        $this->renameColumn('productimage', 'productsimple_id', 'product_id');
    }
}