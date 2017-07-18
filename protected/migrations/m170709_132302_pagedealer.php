<?php

class m170709_132302_pagedealer extends CDbMigration
{
    public function up()
    {
        $this->createTable('pagedealer', array(
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

        $this->insert('pagedealer', array(
            'h1_ru' => 'Диллерам',
            'h1_uk' => 'Диллерам',
            'text_ru' => '<p>
<strong>Наша компания</strong> — Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br />
Твердотопливный котел длительного горения Marten станет незаменимым помощником в создании и сбережении тепла Вашего дома. Он идеально подойдет для жилого дома площадью до 980 квадратных метров и не нуждается в постоянном присмотре до 24 часов. Установка твердотопливного котла в Вашем доме - это экономически-аргументированная идеальная альтернатива электрического и газового котла, так как топливом может быть, как древесина так и уголь, щепа, антрацит, топливные брикеты и т. д.
</p>
<div class="divider"></div>
<h2>Преимущества №1</h2>
<ul class="birds">
<li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li>
<li>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
<li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</li>
</ul>
<h2>Преимущества №2</h2>
<ul class="birds">
<li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li>
<li>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
</ul>
<h2>Преимущества №3</h2>
<ul class="birds">
<li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li>
<li>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
</ul>',
            'text_uk' => '<p>
<strong>Наша компания</strong> — Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br />
Твердотопливный котел длительного горения Marten станет незаменимым помощником в создании и сбережении тепла Вашего дома. Он идеально подойдет для жилого дома площадью до 980 квадратных метров и не нуждается в постоянном присмотре до 24 часов. Установка твердотопливного котла в Вашем доме - это экономически-аргументированная идеальная альтернатива электрического и газового котла, так как топливом может быть, как древесина так и уголь, щепа, антрацит, топливные брикеты и т. д.
</p>
<div class="divider"></div>
<h2>Преимущества №1</h2>
<ul class="birds">
<li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li>
<li>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
<li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</li>
</ul>
<h2>Преимущества №2</h2>
<ul class="birds">
<li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li>
<li>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
</ul>
<h2>Преимущества №3</h2>
<ul class="birds">
<li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li>
<li>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
</ul>',
            'seo_title_ru' => 'Диллерам',
            'seo_title_uk' => 'Диллерам',
            'seo_description_ru' => 'Диллерам',
            'seo_description_uk' => 'Диллерам',
            'seo_keywords_ru' => 'Диллерам',
            'seo_keywords_uk' => 'Диллерам',
        ));
    }

    public function down()
    {
        $this->dropTable('pagedealer');
    }
}