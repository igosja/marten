<?php

class m170807_180749_productcategory extends CDbMigration
{
    public function up()
    {
        $this->createTable('productcategory', array(
            'id' => 'pk',
            'category_id' => 'int(11) default 0',
            'product_id' => 'int(11) default 0',
        ));

        Yii::app()->db->createCommand(
            "INSERT INTO `productcategory` (`category_id`, `product_id`)
            SELECT `category_id`, `id`
            FROM `product`"
        )->query();

        $this->dropColumn('product', 'category_id');
    }

    public function down()
    {
        $this->dropTable('productcategory');
        $this->addColumn('product', 'category_id', 'int(11) default 0');
        $this->update('product', array('category_id' => 3));
    }
}