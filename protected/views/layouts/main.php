<!DOCTYPE html>
<html>
<head>
    <title><?= $this->seo_title; ?></title>
    <meta name="description" content="<?= $this->seo_description; ?>">
    <meta name="keywords" content="<?= $this->seo_keywords; ?>">
    <meta property="og:title" content="<?= $this->seo_title; ?>"/>
    <meta property="og:description" content="<?= $this->seo_description; ?>"/>
    <meta property="og:type" content="text"/>
    <meta property="og:image" content="http://<?= $_SERVER['HTTP_HOST'] . $this->og_image; ?>"/>
    <meta property="og:url" content="http://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>"/>
</head>
<body>
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
<?= CHtml::link(
    Yii::t('views.layouts.main', 'link-about-us'),
    array('about/index')
); ?>
<br/>
<?= CHtml::link(
    Yii::t('views.layouts.main', 'link-article'),
    array('article/index')
); ?>
<br/>
<?= CHtml::link(
    Yii::t('views.layouts.main', 'link-video'),
    array('video/index')
); ?>
<br/>
<?= CHtml::link(
    Yii::t('views.layouts.main', 'link-review'),
    array('review/index')
); ?>
<br/>
<?= CHtml::link(
    Yii::t('views.layouts.main', 'link-payment'),
    array('payment/index')
); ?>
<br/>
<?= CHtml::link(
    Yii::t('views.layouts.main', 'link-guarantee'),
    array('guarantee/index')
); ?>
<br/>
<?= CHtml::link(
    Yii::t('views.layouts.main', 'link-contact'),
    array('contact/index')
); ?>
<br/>
<?= $content; ?>
<script src="/js/jquery.js"></script>
<script src="/js/site.js"></script>
</body>
</html>