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
    <link rel="stylesheet" href="/css/site.css">
</head>
<body class="inn-page">
<!--[if lt IE 7]>
<p class="browsehappy">
    You are using an <strong>outdated</strong> browser. Please
    <a target="_blank" rel="nofollow" href="http://browsehappy.com/">upgrade your browser</a>
    to improve your experience.
</p>
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
                    '<img src="/img/logo.png" alt="Marten">',
                    array('index/index'),
                    array('class' => 'logo')
                ); ?>
                <div class="header-bot__l">
                    <span>
                        <?= $this->contact['address_head_' . Yii::app()->language]; ?>
                    </span>
                    <span>
                        <?= Yii::t('views.layouts.main', 'monday'); ?>
                        <?= $this->contact['hours_monday']; ?>,
                        <?= Yii::t('views.layouts.main', 'saturday'); ?>
                        <?= $this->contact['hours_saturday']; ?>
                    </span>
                </div>
                <div class="header-bot__r clearfix">
                    <a href="javascript:" class="header-bot__btn"><?= Yii::t('views.layouts.main', 'call-me'); ?></a>
                    <div class="header-bot__phones">
                        <a href="tel:<?= $this->contact['phone_kyivstar']; ?>"><?= $this->contact['phone_kyivstar']; ?></a>
                        <a href="tel:<?= $this->contact['phone_umc']; ?>"><?= $this->contact['phone_umc']; ?></a>
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
                <h3 class="footer-menu__title">
                    <?= Yii::t('views.layouts.main', 'footer-who-we-are'); ?>
                </h3>
                <ul>
                    <li>
                        <?= CHtml::link(
                            Yii::t('views.layouts.main', 'footer-link-about-us'),
                            array('about/index')
                        ); ?>
                    </li>
                    <li><a href="javascript:">Реализованные проекты</a></li>
                    <li>
                        <?= CHtml::link(
                            Yii::t('views.layouts.main', 'footer-link-news'),
                            array('news/index')
                        ); ?>
                    </li>
                    <li>
                        <?= CHtml::link(
                            Yii::t('views.layouts.main', 'footer-link-video'),
                            array('video/index')
                        ); ?>
                    </li>
                    <li>
                        <?= CHtml::link(
                            Yii::t('views.layouts.main', 'footer-link-review'),
                            array('review/index')
                        ); ?>
                    </li>
                    <li>
                        <?= CHtml::link(
                            Yii::t('views.layouts.main', 'footer-link-contact'),
                            array('contact/index')
                        ); ?>
                    </li>
                </ul>
            </div>
            <div class="footer-menu">
                <h3 class="footer-menu__title">
                    <?= Yii::t('views.layouts.main', 'footer-production'); ?>
                </h3>
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
                <h3 class="footer-menu__title">
                    <?= Yii::t('views.layouts.main', 'footer-services'); ?>
                </h3>
                <ul>
                    <li>
                        <?= CHtml::link(
                            Yii::t('views.layouts.main', 'footer-link-payment'),
                            array('payment/index')
                        ); ?>
                    </li>
                    <li>
                        <?= CHtml::link(
                            Yii::t('views.layouts.main', 'footer-link-guarantee'),
                            array('guarantee/index')
                        ); ?>
                    </li>
                    <li><a href="javascript:">Котлы в кредит</a></li>
                    <li><a href="javascript:">Дилерам</a></li>
                </ul>
            </div>
            <div class="footer-menu">
                <h3 class="footer-menu__title">
                    <?= Yii::t('views.layouts.main', 'footer-contacts'); ?>
                </h3>
                <ul>
                    <li class="footer-menu__ic1">
                        <?= $this->contact['address_head_' . Yii::app()->language]; ?>
                    </li>
                    <li class="footer-menu__ic2"><a
                                href="tel:<?= $this->contact['phone_umc']; ?>"><?= $this->contact['phone_umc']; ?></a>
                    </li>
                    <li class="footer-menu__ic3"><a
                                href="tel:<?= $this->contact['phone_kyivstar']; ?>"><?= $this->contact['phone_kyivstar']; ?></a>
                    </li>
                    <li><a href="tel:<?= $this->contact['phone_life']; ?>"><?= $this->contact['phone_life']; ?></a></li>
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
                <img src="/img/logo-bottom.png" alt="Marten">
                <span>
                    © 2008—<?= date('Y'); ?>
                    <?= Yii::t('views.layouts.main', 'rights-reserved'); ?>
                </span>
            </div>
            <div class="footer-bottom__r clearfix">
                <div class="footer-frog">
                    <span>
                        <?= Yii::t('views.layouts.main', 'site-creation'); ?> —
                    </span>
                    <img src="/img/frog.png" alt="Gabbe">
                </div>
                <a href="javascript:" id="to-top">
                    <img src="/img/to-top.png" alt="to top">
                </a>
            </div>
        </div>
    </div>
</footer>
<section class="overlay-forms">
    <div class="form-overlay"></div>
    <div class="wrap">
    </div>
</section>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
<script src="/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="/js/vendor/libs.js"></script>
<script src="/js/main.js"></script>
<script src="/js/site.js"></script>
<?php if ('contact' == $this->uniqueid) { ?>
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyAYBg8KC7jzGXqsJO4ZvBUBr-zHT_0qm2s&callback=initMap"></script>
<?php } ?>
</body>
</html>