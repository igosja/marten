<?php

return array(
    'defaultController' => 'index',
    'language' => 'ru',
    'sourceLanguage' => 'ru',
    'timeZone' => 'UTC',
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),
    'components' => array(
        'urlManager' => array(
            'class' => 'application.components.UrlManager',
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => array(
                '<language:(ru|ua)>' => 'index/index',
                '' => 'index/index',
                '<language:(ru|ua)>/about' => 'about/index',
                'about' => 'about/index',
                '<language:(ru|ua)>/advantage' => 'advantage/index',
                'advantage' => 'advantage/index',
                '<language:(ru|ua)>/category/<id>' => 'category/view',
                'category/<id>' => 'category/view',
                '<language:(ru|ua)>/category' => 'category/index',
                'category' => 'category/index',
                '<language:(ru|ua)>/consult' => 'consult/index',
                'consult' => 'consult/index',
                '<language:(ru|ua)>/contact' => 'contact/index',
                'contact' => 'contact/index',
                '<language:(ru|ua)>/credit' => 'credit/index',
                'credit' => 'credit/index',
                '<language:(ru|ua)>/dealer' => 'dealer/index',
                'dealer' => 'dealer/index',
                '<language:(ru|ua)>/guarantee' => 'guarantee/index',
                'guarantee' => 'guarantee/index',
                '<language:(ru|ua)>/news' => 'news/index',
                'news' => 'news/index',
                'news/more' => 'news/more',
                'news/check' => 'news/check',
                '<language:(ru|ua)>/payment' => 'payment/index',
                'payment' => 'payment/index',
                'project/more/<id>' => 'project/more',
                'project/more' => 'project/more',
                'project/check/<id>' => 'project/check',
                'project/check' => 'project/check',
                '<language:(ru|ua)>/project/<id>' => 'project/index',
                'project/<id>' => 'project/index',
                '<language:(ru|ua)>/project' => 'project/index',
                'project' => 'project/index',
                '<language:(ru|ua)>/video' => 'video/index',
                'video' => 'video/index',
                'video/more/<id>' => 'video/more',
                'video/check/<id>' => 'video/check',
                'why' => 'why/index',
                '<language:(ru|ua)>/why' => 'why/index',
                '<language:(ru|ua)>/<controller>/<action>/<id>' => '<controller>/<action>',
                '<language:(ru|ua)>/<controller>/<action>' => '<controller>/<action>',
                '<language:(ru|ua)>/<controller>' => '<controller>/index',
                '<module:(admin)>/<language:(ru|ua)>/<controller>/<action>/<id>' => '<module>/<controller>/<action>',
                '<module:(admin)>/<language:(ru|ua)>/<controller>/<action>' => '<module>/<controller>/<action>',
                '<module:(admin)>/<language:(ru|ua)>/<controller>' => '<module>/<controller>',
                '<module:(admin)>/<language:(ru|ua)>' => '<module>/index',
                '<module:(admin)>/<controller>/<action>/<id>' => '<module>/<controller>/<action>',
                '<module:(admin)>/<controller>/<action>' => '<module>/<controller>/<action>',
                '<module:(admin)>/<controller>' => '<module>/<controller>',
                '<module:(admin)>' => '<module>/index',
            ),
        ),
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=igosja_marten',
            'emulatePrepare' => true,
            'username' => 'igosja_marten',
            'password' => '&WKWp@*{',
            'charset' => 'utf8',
        ),
        'messages' => array(
            'class' => 'CDbMessageSource',
            'cacheID' => 'cache',
            'cachingDuration' => 43200,
            'connectionID' => 'db',
            'sourceMessageTable' => 'i18n_source_messages',
            'translatedMessageTable' => 'i18n_translated_messages',
            'forceTranslation' => true,
        ),
    ),
    'modules' => array(
        'admin',
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '123',
        ),
    ),
);