<?php

class m170514_093836_category extends CDbMigration
{
    public function up()
    {
        $this->createTable('category', array(
            'id' => 'pk',
            'h1_ru' => 'varchar(255) not null',
            'h1_uk' => 'varchar(255) not null',
            'image_id' => 'integer(11) default 0',
            'text_ru' => 'text not null',
            'text_uk' => 'text not null',
            'parent_id' => 'integer(11) default 0',
            'url' => 'varchar(255) not null',
            'order' => 'int(11) default 0',
            'status' => 'tinyint(1) default 1',
            'seo_title_ru' => 'varchar(255) not null',
            'seo_title_uk' => 'varchar(255) not null',
            'seo_description_ru' => 'text not null',
            'seo_description_uk' => 'text not null',
            'seo_keywords_ru' => 'text not null',
            'seo_keywords_uk' => 'text not null',
        ));

        $this->insertMultiple('category', array(
            array(
                'h1_ru' => 'Традиционные котлы',
                'h1_uk' => 'Традиційні котли',
                'text_ru' => 'Традиционные котлы',
                'text_uk' => 'Традиційні котли',
                'parent_id' => 0,
                'url' => '1-traditsionnyye_kotly',
                'order' => 0,
                'seo_title_ru' => 'Традиционные котлы',
                'seo_title_uk' => 'Традиційні котли',
                'seo_description_ru' => 'Традиционные котлы',
                'seo_description_uk' => 'Традиційні котли',
                'seo_keywords_ru' => 'Традиционные котлы',
                'seo_keywords_uk' => 'Традиційні котли',
            ),
            array(
                'h1_ru' => 'С плитой',
                'h1_uk' => 'З плитою',
                'text_ru' => 'С плитой',
                'text_uk' => 'З плитою',
                'parent_id' => 1,
                'url' => '2-s_plitoy',
                'order' => 1,
                'seo_title_ru' => 'С плитой',
                'seo_title_uk' => 'З плитою',
                'seo_description_ru' => 'С плитой',
                'seo_description_uk' => 'З плитою',
                'seo_keywords_ru' => 'С плитой',
                'seo_keywords_uk' => 'З плитою',
            ),
            array(
                'h1_ru' => 'Без плиты',
                'h1_uk' => 'Без плити',
                'text_ru' => 'Без плиты',
                'text_uk' => 'Без плити',
                'parent_id' => 1,
                'url' => '3-bez_plity',
                'order' => 2,
                'seo_title_ru' => 'Без плиты',
                'seo_title_uk' => 'Без плити',
                'seo_description_ru' => 'Без плиты',
                'seo_description_uk' => 'Без плити',
                'seo_keywords_ru' => 'Без плиты',
                'seo_keywords_uk' => 'Без плити',
            ),
            array(
                'h1_ru' => 'С глубокой топкой',
                'h1_uk' => 'З глибокою топкою',
                'text_ru' => 'С глубокой топкой',
                'text_uk' => 'З глибокою топкою',
                'parent_id' => 1,
                'url' => '4-s_glubokoy_topkoy',
                'order' => 3,
                'seo_title_ru' => 'С глубокой топкой',
                'seo_title_uk' => 'З глибокою топко',
                'seo_description_ru' => 'С глубокой топкой',
                'seo_description_uk' => 'З глибокою топко',
                'seo_keywords_ru' => 'С глубокой топкой',
                'seo_keywords_uk' => 'З глибокою топко',
            ),
            array(
                'h1_ru' => 'Котлы длительного горения',
                'h1_uk' => 'Котли тривалого горіння',
                'text_ru' => 'Котлы длительного горения',
                'text_uk' => 'Котли тривалого горіння',
                'parent_id' => 0,
                'url' => '5-kotly_dlitelnogo_goreniya',
                'order' => 4,
                'seo_title_ru' => 'Котлы длительного горения',
                'seo_title_uk' => 'Котли тривалого горіння',
                'seo_description_ru' => 'Котлы длительного горения',
                'seo_description_uk' => 'Котли тривалого горіння',
                'seo_keywords_ru' => 'Котлы длительного горения',
                'seo_keywords_uk' => 'Котли тривалого горіння',
            ),
            array(
                'h1_ru' => 'Пеллетные котлы',
                'h1_uk' => 'Пелетні котли',
                'text_ru' => 'Пеллетные котлы',
                'text_uk' => 'Пелетні котли',
                'parent_id' => 0,
                'url' => '6-pelletnyye_kotly',
                'order' => 5,
                'seo_title_ru' => 'Пеллетные котлы',
                'seo_title_uk' => 'Пелетні котли',
                'seo_description_ru' => 'Пеллетные котлы',
                'seo_description_uk' => 'Пелетні котли',
                'seo_keywords_ru' => 'Пеллетные котлы',
                'seo_keywords_uk' => 'Пелетні котли',
            ),
            array(
                'h1_ru' => 'Котлы большой мощности',
                'h1_uk' => 'Котли великої потужності',
                'text_ru' => 'Котлы большой мощности',
                'text_uk' => 'Котли великої потужності',
                'parent_id' => 0,
                'url' => '7-kotly_bolshoy_moshchnosti',
                'order' => 6,
                'seo_title_ru' => 'Котлы большой мощности',
                'seo_title_uk' => 'Котли великої потужності',
                'seo_description_ru' => 'Котлы большой мощности',
                'seo_description_uk' => 'Котли великої потужності',
                'seo_keywords_ru' => 'Котлы большой мощности',
                'seo_keywords_uk' => 'Котли великої потужності',
            ),
            array(
                'h1_ru' => 'Модульные котельные',
                'h1_uk' => 'Модульні котельні',
                'text_ru' => 'Модульные котельные',
                'text_uk' => 'Модульні котельні',
                'parent_id' => 0,
                'url' => '8-modulnyye_kotelnyye',
                'order' => 7,
                'seo_title_ru' => 'Модульные котельные',
                'seo_title_uk' => 'Модульні котельні',
                'seo_description_ru' => 'Модульные котельные',
                'seo_description_uk' => 'Модульні котельні',
                'seo_keywords_ru' => 'Модульные котельные',
                'seo_keywords_uk' => 'Модульні котельні',
            ),
            array(
                'h1_ru' => 'Баки Теплоаккумуляторы',
                'h1_uk' => 'Баки Теплоаккумулятори',
                'text_ru' => 'Баки Теплоаккумуляторы',
                'text_uk' => 'Баки Теплоаккумулятори',
                'parent_id' => 0,
                'url' => '9-baki_teploakkumulyatory',
                'order' => 8,
                'seo_title_ru' => 'Баки Теплоаккумуляторы',
                'seo_title_uk' => 'Баки Теплоаккумулятори',
                'seo_description_ru' => 'Баки Теплоаккумуляторы',
                'seo_description_uk' => 'Баки Теплоаккумулятори',
                'seo_keywords_ru' => 'Баки Теплоаккумуляторы',
                'seo_keywords_uk' => 'Баки Теплоаккумулятори',
            ),
            array(
                'h1_ru' => 'Дымоходы',
                'h1_uk' => 'Димарі',
                'text_ru' => 'Дымоходы',
                'text_uk' => 'Димарі',
                'parent_id' => 0,
                'url' => '10-dymokhody',
                'order' => 9,
                'seo_title_ru' => 'Дымоходы',
                'seo_title_uk' => 'Димарі',
                'seo_description_ru' => 'Дымоходы',
                'seo_description_uk' => 'Димарі',
                'seo_keywords_ru' => 'Дымоходы',
                'seo_keywords_uk' => 'Димарі',
            ),
            array(
                'h1_ru' => 'Запчасти и доп. материалы',
                'h1_uk' => 'Запчастини і доп. матеріали',
                'text_ru' => 'Запчасти и доп. материалы',
                'text_uk' => 'Запчастини і доп. матеріали',
                'parent_id' => 0,
                'url' => '11-zapchasti',
                'order' => 10,
                'seo_title_ru' => 'Запчасти и доп. материалы',
                'seo_title_uk' => 'Запчастини і доп. матеріали',
                'seo_description_ru' => 'Запчасти и доп. материалы',
                'seo_description_uk' => 'Запчастини і доп. матеріали',
                'seo_keywords_ru' => 'Запчасти и доп. материалы',
                'seo_keywords_uk' => 'Запчастини і доп. матеріали',
            ),
        ));
    }

    public function down()
    {
        $this->dropTable('category');
    }
}