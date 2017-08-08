<?php

class m170808_185833_pdf_name extends CDbMigration
{
    public function up()
    {
        $this->addColumn('productpdf', 'pdf_name', 'varchar(255) after pdf_id');
    }

    public function down()
    {
        $this->dropColumn('productpdf', 'pdf_name');
    }
}