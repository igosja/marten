<?php

class m170805_170712_product_pdf extends CDbMigration
{
    public function up()
    {
        $this->createTable('productpdf', array(
            'id' => 'pk',
            'pdf_id' => 'int(11) default 0',
            'product_id' => 'int(11) default 0',
        ));

        Yii::app()->db->createCommand(
            "INSERT INTO `productpdf` (`product_id`, `pdf_id`)
            SELECT `id`, `pdf_id`
            FROM `product`
            WHERE `pdf_id`!=0"
        )->query();
        $this->dropColumn('product', 'pdf_id');
    }

    public function down()
    {
        $this->dropTable('productpdf');

        $this->addColumn('product', 'pdf_id', 'int(11) default 0');
    }
}