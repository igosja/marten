<?php

class m170517_092421_pagevideo extends CDbMigration
{
    public function up()
    {
        $this->createTable('pagevideo', array(
            'id' => 'pk',
            'h1_ru' => 'varchar(255) not null',
            'h1_uk' => 'varchar(255) not null',
            'text_ru' => 'text not null',
            'text_uk' => 'text not null',
            'seo_title_ru' => 'varchar(255) not null',
            'seo_title_uk' => 'varchar(255) not null',
            'seo_description_ru' => 'text not null',
            'seo_description_uk' => 'text not null',
            'seo_keywords_ru' => 'text not null',
            'seo_keywords_uk' => 'text not null',
        ));

        $this->insert('pagevideo', array(
            'h1_ru' => 'Видео',
            'h1_uk' => 'Відео',
            'text_ru' => '<p>
<strong>Наша компания</strong> — Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
</p>
<p>
Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. Lorem ipsum dolor sit amet, consectetur 	adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.
</p>
<p>
Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.
</p>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.
</p>',
            'text_uk' => '<p>
<strong>Наша компания</strong> — Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
</p>
<p>
Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. Lorem ipsum dolor sit amet, consectetur 	adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.
</p>
<p>
Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.
</p>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.
</p>',
            'seo_title_ru' => 'Видео',
            'seo_title_uk' => 'Відео',
            'seo_description_ru' => 'Видео',
            'seo_description_uk' => 'Відео',
            'seo_keywords_ru' => 'Видео',
            'seo_keywords_uk' => 'Відео',
        ));
    }

    public function down()
    {
        $this->dropTable('pagevideo');
    }
}