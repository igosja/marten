<?php

class m170709_103443_achievement extends CDbMigration
{
    public function up()
    {
        $this->createTable('achievement', array(
            'id' => 'pk',
            'text_ru' => 'text not null',
            'text_uk' => 'text not null',
            'order' => 'int(11) default 0',
            'status' => 'int(1) default 1',
        ));

        $this->insertMultiple('achievement', array(
            array(
                'text_ru' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'text_uk' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'order' => 0,
            ),
            array(
                'text_ru' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'text_uk' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'order' => 1,
            ),
            array(
                'text_ru' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'text_uk' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'order' => 2,
            ),
            array(
                'text_ru' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'text_uk' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'order' => 3,
            ),
            array(
                'text_ru' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inven tore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                'text_uk' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inven tore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                'order' => 4,
            ),
            array(
                'text_ru' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.',
                'text_uk' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.',
                'order' => 5,
            ),
            array(
                'text_ru' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.',
                'text_uk' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.',
                'order' => 6,
            ),
        ));
    }

    public function down()
    {
        $this->dropTable('achievement');
    }
}