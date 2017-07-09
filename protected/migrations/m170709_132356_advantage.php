<?php

class m170709_132356_advantage extends CDbMigration
{
    public function up()
    {
        $this->createTable('advantage', array(
            'id' => 'pk',
            'name_ru' => 'text not null',
            'name_ua' => 'text not null',
            'text_ru' => 'text not null',
            'text_ua' => 'text not null',
            'order' => 'int(11) default 0',
            'status' => 'int(1) default 1',
        ));

        $this->insertMultiple('advantage', array(
            array(
                'name_ru' => 'Duis aute irure dolor',
                'name_ua' => 'Duis aute irure dolor',
                'text_ru' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'text_ua' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'order' => 0,
            ),
            array(
                'name_ru' => 'Excepteur sint occaecat',
                'name_ua' => 'Excepteur sint occaecat',
                'text_ru' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'text_ua' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'order' => 1,
            ),
            array(
                'name_ru' => 'Lorem ipsum dolor sit amet',
                'name_ua' => 'Lorem ipsum dolor sit amet',
                'text_ru' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae',
                'text_ua' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae',
                'order' => 2,
            ),
            array(
                'name_ru' => 'Ut enim ad minim veniam',
                'name_ua' => 'Ut enim ad minim veniam',
                'text_ru' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.',
                'text_ua' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.',
                'order' => 3,
            ),
        ));
    }

    public function down()
    {
        $this->dropTable('advantage');
    }
}