<?php

class m170513_172615_translate extends CDbMigration
{
    public $dbMessageSourceComponent = 'messages';

    public function safeUp()
    {
        $language = Yii::app()->language;
        if (!$msgComponent = Yii::app()->getComponent($this->dbMessageSourceComponent)) {
            throw new CException('Error: CDbMessageSource component with name "' .
                $this->dbMessageSourceComponent . '" not found: check "components" section in your config.php');
        }
        $sourceMessageTable = $msgComponent->sourceMessageTable;
        $messageTable = $msgComponent->translatedMessageTable;

        $this->createTable($sourceMessageTable, array(
            'id' => 'bigpk',
            'category' => 'string',
            'message' => 'text',
            'timecreated' => 'bigint',
            'timemodified' => 'bigint',
        ));

        $this->createIndex('idx_category', $sourceMessageTable, 'category');
        $this->createIndex('idx_timecreated', $sourceMessageTable, 'timecreated');
        $this->createIndex('idx_timemodified', $sourceMessageTable, 'timemodified');

        $this->createTable($messageTable, array(
            'id' => 'bigint',
            'language' => "varchar(16) NOT NULL default '{$language}'",
            'translation' => 'text',
            'timecreated' => 'bigint',
            'timemodified' => 'bigint',
        ));

        $this->createIndex('idx_id', $messageTable, 'id');
        $this->createIndex('idx_language', $messageTable, 'language');
        $this->createIndex('idx_timecreated', $messageTable, 'timecreated');
        $this->createIndex('idx_timemodified', $messageTable, 'timemodified');
    }


    public function safeDown()
    {
        if (!$msgComponent = Yii::app()->getComponent($this->dbMessageSourceComponent)) {
            throw new CException('Error: CDbMessageSource component with name ' . $this->dbMessageSourceComponent .
                ' not found: check your config.php');
        }
        $sourceMessageTable = $msgComponent->sourceMessageTable;
        $messageTable = $msgComponent->translatedMessageTable;

        $this->dropTable($sourceMessageTable);
        $this->dropTable($messageTable);
    }
}