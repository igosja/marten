<?php
/**
 * @var $content string
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>        +
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js homepage"> <!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?= $this->seo_title; ?></title>
    <meta name="description" content="<?= $this->seo_description; ?>">
    <meta name="keywords" content="<?= $this->seo_keywords; ?>">
    <meta property="og:title" content="<?= $this->seo_title; ?>"/>
    <meta property="og:description" content="<?= $this->seo_description; ?>"/>
    <meta property="og:type" content="text"/>
    <meta property="og:image" content="http://<?= $_SERVER['HTTP_HOST'] . $this->og_image; ?>"/>
    <meta property="og:url" content="http://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>"/>
    <meta http-equiv="content-language" content="<?= Yii::app()->language; ?>"/>
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,900&amp;subset=cyrillic-ext' rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="/css/normalize.min.css">
    <link rel="stylesheet" href="/css/libs.css">
    <link rel="stylesheet" href="/css/main.css">
    <!--<link rel="stylesheet" href="/css/mobile.css">	-->

    <script src="/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="/js/vendor/libs.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/site.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a target="_blank" rel="nofollow"
                                                                                     href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<div class="sitewrap">
    <header class="clearfix">
        <div class="header-top clearfix">
            <div class="wrap">
                <nav class="menu-sec">
                    <?= CHtml::link(
                        Yii::t('views.layouts.main', 'header-link-about-us'),
                        array('about/index')
                    ); ?>
                    <?= CHtml::link(
                        Yii::t('views.layouts.main', 'header-link-news'),
                        array('news/index')
                    ); ?>
                    <?= CHtml::link(
                        Yii::t('views.layouts.main', 'header-link-video'),
                        array('video/index')
                    ); ?>
                    <?= CHtml::link(
                        Yii::t('views.layouts.main', 'header-link-review'),
                        array('review/index')
                    ); ?>
                    <?= CHtml::link(
                        Yii::t('views.layouts.main', 'header-link-payment'),
                        array('payment/index')
                    ); ?>
                    <?= CHtml::link(
                        Yii::t('views.layouts.main', 'header-link-guarantee'),
                        array('guarantee/index')
                    ); ?>
                    <?= CHtml::link(
                        Yii::t('views.layouts.main', 'header-link-contact'),
                        array('contact/index')
                    ); ?>
                </nav>
                <div class="lang">
                    <?php
                    foreach ($this->a_language as $item) {
                        ?>
                        <a
                                href="javascript:"
                                class="change-language <?php if (Yii::app()->language == $item->code) { ?>active<?php } ?>"
                                data-language="<?= $item->code; ?>"
                        >
                            <?= $item->name; ?>
                        </a>
                    <?php } ?>
                    <form method="post" id="language-form" style="display:none;">
                        <label for="language-select">Language</label>
                        <select name="language" id="language-select">
                            <?php foreach ($this->a_language as $item) { ?>
                                <option
                                        value="<?= $item->code; ?>"
                                        <?php if (Yii::app()->language == $item->code) { ?>selected<?php } ?>
                                >
                                    <?= $item->name; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </form>
                </div>
            </div>
        </div>
        <div class="header-bot">
            <div class="wrap clearfix">
                <?= CHtml::link(
                    '<img src="/img/logo.png" alt="">',
                    array('index/index')
                ); ?>
                <div class="header-bot__l">
                    <span>г. Киев, пр. Леся Курбаса 1а</span>
                    <span>пн-пт  9:00 – 20:00,  сб-вс  10:00 – 17:00</span>
                </div>
                <div class="header-bot__r clearfix">
                    <a href="javascript:;" class="header-bot__btn">Заказать звонок</a>
                    <div class="header-bot__phones">
                        <a href="tel:0981234567">(098) 12 34 567</a>
                        <a href="tel:0501234567">(050) 12 34 567</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="wrap">
        <nav class="nav-main">
            <ul>
                <?php foreach ($this->a_category as $item) { ?>
                    <li>
                        <a href="javascript:" class="drop"><span><?= $item['name']; ?></span></a>
                        <?php if (isset($item['children']) && $item['children']) { ?>
                            <ul>
                                <?php foreach ($item['children'] as $item1) { ?>
                                    <li><?= $item1['name']; ?>
                                        <?php if (isset($item1['children']) && $item1['children']) { ?>
                                            <ul>
                                                <?php foreach ($item1['children'] as $item2) { ?>
                                                    <li><a href="javascript:"><?= $item2['name']; ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        <?php } ?>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </div>

    <?= $content; ?>

    <div class="clearfix-footer"></div>
</div>
<footer>
    <div class="footer-top">
        <div class="wrap clearfix">
            <div class="footer-menu">
                <h3 class="footer-menu__title">КТО МЫ?</h3>
                <ul>
                    <li><a href="javascript:">О компании</a></li>
                    <li><a href="javascript:">Реализованные проекты</a></li>
                    <li><a href="javascript:">Статьи</a></li>
                    <li><a href="javascript:">Видео</a></li>
                    <li><a href="javascript:">Отзывы</a></li>
                    <li><a href="javascript:">Контакты</a></li>
                </ul>
            </div>
            <div class="footer-menu">
                <h3 class="footer-menu__title">ПРОДУКЦИЯ</h3>
                <ul>
                    <li><a href="javascript:">Традиционные котлы</a></li>
                    <li><a href="javascript:">Котлы длительного горения</a></li>
                    <li><a href="javascript:">Пеллетные котлы</a></li>
                    <li><a href="javascript:">Котлы большой мощности</a></li>
                    <li><a href="javascript:">Модульные котельные</a></li>
                    <li><a href="javascript:">Баки теплоаккумуляторы</a></li>
                    <li><a href="javascript:">Дымоходы</a></li>
                    <li><a href="javascript:">Запчасти и доп. материалы</a></li>
                </ul>
            </div>
            <div class="footer-menu">
                <h3 class="footer-menu__title">Услуги</h3>
                <ul>
                    <li><a href="javascript:">Оплата и доставка</a></li>
                    <li><a href="javascript:">Гарантии</a></li>
                    <li><a href="javascript:">Котлы в кредит</a></li>
                    <li><a href="javascript:">Дилерам</a></li>
                </ul>
            </div>
            <div class="footer-menu">
                <h3 class="footer-menu__title">Контакты</h3>
                <ul>
                    <li class="footer-menu__ic1">г. Киев, пр. Леся Курбаса 1а</li>
                    <li class="footer-menu__ic2"><a href="tel:0501234567">(050) 12 34 567</a></li>
                    <li class="footer-menu__ic3"><a href="tel:0981234567">(098) 12 34 567</a></li>
                    <li><a href="tel:0631234567">(063) 12 34 567</a></li>
                    <li>
                        <a href="javascript:" class="footer-facebook"></a>
                        <a href="javascript:" class="footer-twitter"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="wrap clearfix">
            <div class="footer-copy">
                <img src="/img/logo-bottom.png" alt=""><span>© 2008—2015  Все права защищены</span>
            </div>
            <div class="footer-bottom__r clearfix">
                <div class="footer-frog">
                    <span>Создание сайтов —</span> <img src="/img/frog.png" alt="">
                </div>
                <a href="javascript:" id="to-top"><img src="/img/to-top.png" alt=""></a>
            </div>
        </div>
    </div>
</footer>
<section class="overlay-forms">
    <div class="form-overlay"></div>
    <div class="wrap">
    </div>
</section>
</body>
</html>