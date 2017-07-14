<?php
/**
 * @var $a_product array
 * @var $a_review array
 * @var $more boolean
 * @var $o_category Category
 */
?>
<section class="content">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="b-title"><?= $o_category['h1_' . Yii::app()->language]; ?></h1>
        <div class="cat clearfix">
            <?php foreach ($a_product as $item) { ?>
                <?= CHtml::link(
                    '<div class="cat__i__img"><img src="' . ImageIgosja::resize(isset($item['a_image'][0]['image_id']) ? $item['a_image'][0]['image_id'] : 0, 600, 600) . '" alt="' . $item['h1_' . Yii::app()->language] . '"/></div>
                    <span class="cat__i__text">' . $item['h1_' . Yii::app()->language] . '</span>
                    <span class="cat-i__price">
                    <small>' . Yii::t('views.category.product', 'price') . ':
                    </small> ' . Yii::t('views.category.product', 'from') . ' ' . number_format(isset($item['min_price'][0]['simple']['price']) ? $item['min_price'][0]['simple']['price'] : 0, 0, '', ' ') . ' грн</span>',
                    array('product/view', 'id' => $item['url']),
                    array('class' => 'cat__i')
                ); ?>
            <?php } ?>
        </div>
    </div>
    <div class="main-b__info">
        <div class="wrap clearfix">
            <h2 class="b-title"><?= Yii::t('views.category.product', 'review'); ?></h2>
            <div class="clearfix review-list">
                <?php foreach ($a_review as $item) { ?>
                    <?= $this->renderPartial('review', array('item' => $item)); ?>
                <?php } ?>
            </div>
            <?php if ($more) { ?>
                <a href="javascript:" class="art-more load-review-category" data-offset="0" data-id="<?= $o_category['id']; ?>">
                    <?= Yii::t('views.category.product', 'link-more'); ?>
                </a>
            <?php } ?>
        </div>
    </div>
    <div class="grey-bg main-b__text grey-bg_in">
        <div class="wrap">
            <?= $o_category['text_' . Yii::app()->language]; ?>
        </div>
    </div>
</section>