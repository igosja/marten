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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
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
    <meta http-equiv="content-language" content="ru"/>
    <meta name="viewport" content="width=1240">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,900&amp;subset=cyrillic-ext' rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="/css/normalize.min.css">
    <link rel="stylesheet" href="/css/libs.css">
    <link rel="stylesheet" href="/css/main.css">
    <?php if ('project' == $this->uniqueid) { ?>
        <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
    <?php } ?>
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">
    You are using an <strong>outdated</strong> browser. Please
    <a target="_blank" rel="nofollow" href="http://browsehappy.com/">upgrade your browser</a>
    to improve your experience.
</p>
<![endif]-->
<div class="sitewrap">
    <header class="clearfix">
        <div class="wrap">
            <div class="header-top clearfix">
                <?= CHtml::link('<img src="/img/logo.png" alt="">', array('index/index'), array('class' => 'logo')); ?>
                <div class="header-phones">
                    <a href="tel:<?= str_replace(' ', '', $this->contact->telephone_1); ?>">
                        <?= $this->contact->telephone_1; ?>
                    </a>
                    <a href="tel:<?= str_replace(' ', '', $this->contact->telephone_2); ?>">
                        <?= $this->contact->telephone_2; ?>
                    </a>
                </div>
                <div class="header-top__right clearfix">
                    <div class="header-email">
                        E-mail:
                        <a href="mailto:<?= $this->contact->email; ?>"><?= $this->contact->email; ?></a>
                    </div>
                    <a href="javascript:;" data-selector="form-order" class="header-offer overlayElementTrigger">
                        <?= Yii::t('views.layouts.main', 'link-order-service'); ?>
                    </a>
                    <form method="post" id="language-form" class="jqui-lang">
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
            <nav>
                <?= CHtml::link(
                    Yii::t('views.layouts.main', 'link-about-us'),
                    array('about/index'),
                    array('class' => 'nav-link')
                ); ?>
                <?= CHtml::link(
                    Yii::t('views.layouts.main', 'link-service'),
                    array('service/index'),
                    array('class' => 'nav-link')
                ); ?>
                <?= CHtml::link(
                    Yii::t('views.layouts.main', 'link-portfolio'),
                    array('portfolio/index'),
                    array('class' => 'nav-link')
                ); ?>
                <?= CHtml::link(
                    Yii::t('views.layouts.main', 'link-contacts'),
                    array('contact/index'),
                    array('class' => 'nav-link')
                ); ?>
            </nav>
        </div>
    </header>
    <?= $content; ?>
    <div class="clearfix-footer"></div>
</div>
<footer>
    <div class="wrap">
        <div class="footer-top clearfix">
            <div class="footer-soc clearfix">
                <?php if ($this->contact->facebook) { ?>
                    <a href="<?= $this->contact->facebook; ?>" class="footer-soc__facebook" target="_blank"></a>
                <?php } ?>
                <?php if ($this->contact->instagram) { ?>
                    <a href="<?= $this->contact->instagram; ?>" class="footer-soc__insta" target="_blank"></a>
                <?php } ?>
                <?php if ($this->contact->vk) { ?>
                    <a href="<?= $this->contact->vk; ?>" class="footer-soc__vk" target="_blank"></a>
                <?php } ?>
                <?php if ($this->contact->pinterest) { ?>
                    <a href="<?= $this->contact->pinterest; ?>" class="footer-soc__pint" target="_blank"></a>
                <?php } ?>
            </div>
            <div class="footer-contacts clearfix">
                <div class="footer-phones clearfix">
                    <a href="tel:<?= str_replace(' ', '', $this->contact->telephone_1); ?>">
                        <?= $this->contact->telephone_1; ?>
                    </a>
                    <a href="tel:<?= str_replace(' ', '', $this->contact->telephone_2); ?>">
                        <?= $this->contact->telephone_2; ?>
                    </a>
                </div>
                <a href="mailto:<?= $this->contact->email; ?>" class="footer-mail">
                    <?= $this->contact->email; ?>
                </a>
            </div>
            <a href="javascript:;" class="to-top"><?= Yii::t('views.layouts.main', 'up'); ?></a>
        </div>
        <div class="footer-info clearfix">
            <div class="footer-info__copy">
                © 2014—<?= date('Y'); ?>
                <?= Yii::t('views.layouts.main', 'copyright'); ?>
            </div>
            <div class="footer-info__maks">
                <a href="javascript:;" class="maks-logo">Макс</a>
                <div>
                    <a href="tel:067-96-255-26">067-96-255-26</a><br/>
                    <a href="mailto:panditmaximus@gmail.com">panditmaximus@gmail.com</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<section class="overlay-forms">
    <div class="form-overlay"></div>
    <div class="wrap">
        <div class="of-form form-order clearfix">
            <a href="javascript:;" class="of-close"></a href="">
            <?php $form = $this->beginWidget('CActiveForm', array(
                'enableAjaxValidation' => false,
                'enableClientValidation' => true,
            )); ?>
            <div class="of-form__title"><?= Yii::t('views.layouts.main', 'form-title'); ?></div>
            <div class="of-wrap clearfix">
                <div class="need">
                    <?= $form->textField($this->model, 'name', array(
                        'class' => 'of-input of-input_name',
                        'placeholder' => Yii::t('form.order', 'name')
                    )); ?>
                    <?= $form->error($this->model, 'name'); ?>
                </div>
                <div class="need">
                    <?= $form->textField($this->model, 'telephone', array(
                        'class' => 'of-input of-input_phone phone_mask',
                        'placeholder' => Yii::t('form.order', 'telephone')
                    )); ?>
                    <?= $form->error($this->model, 'telephone'); ?>
                </div>
                <div>
                    <?= $form->textField($this->model, 'email', array(
                        'class' => 'of-input of-input_email',
                        'placeholder' => Yii::t('form.order', 'email')
                    )); ?>
                    <?= $form->error($this->model, 'email'); ?>
                </div>
                <div class="jqui-select need">
                    <?= $form->dropDownList($this->model, 'service', CHtml::listData(
                        Service::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`')),
                        'h1_ru',
                        'h1_' . Yii::app()->language
                    )); ?>
                    <?= $form->error($this->model, 'service'); ?>
                </div>
                <?= $form->textarea($this->model, 'text', array(
                    'class' => 'of-form__textarea',
                    'placeholder' => Yii::t('form.order', 'text')
                )); ?>
                <?= $form->error($this->model, 'text'); ?>
                <div class="of-form__text"><span></span><?= Yii::t('form', 'form-required'); ?></div>
                <a href="javascript:;" class="of-submit of-submit-form">
                    <?= Yii::t('views.layouts.main', 'form-send'); ?>
                </a>
            </div>
            <?php $this->endWidget(); ?>
        </div>
        <div class="of-form form-thanks clearfix">
            <a href="javascript:;" class="of-close"></a href="">
            <div class="of-form__thanks">
                <span><?= Yii::t('views.layouts.main', 'thanks'); ?></span><br>
                <?= Yii::t('views.layouts.main', 'we-will-call'); ?>
            </div>
        </div>
    </div>
</section>
<?php if (Yii::app()->user->hasFlash('form')) { ?>
    <div id="form-success" style="display: none;"><?= Yii::app()->user->getFlash('form'); ?></div>
<?php } ?>
<script src="/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="/js/vendor/libs.js"></script>
<script src="/js/main.js"></script>
<script src="/js/site.js"></script>
<?php if ('contact' == $this->uniqueid) { ?>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&language=ru"></script>
<?php } ?>
<?php if ('project' == $this->uniqueid) { ?>
    <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<?php } ?>
</body>
</html>