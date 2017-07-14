<?php
/**
 * @var $a_category array
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
            <?php foreach ($a_category as $item) { ?>
                <?= CHtml::link(
                    '<img src="' . ImageIgosja::resize($item['image_id'], 608, 608) . '" alt="' . $item['h1_' . Yii::app()->language] . '"/>
                    <span class="cat__i__text">' . $item['h1_' . Yii::app()->language] . '</span>',
                    array('view', 'id' => $item['url']),
                    array('class' => 'cat__i')
                ); ?>
            <?php } ?>
        </div>
    </div>
    <div class="main-b__info">
        <div class="wrap clearfix">
            <h2 class="b-title"><?= Yii::t('views.category.category', 'review'); ?></h2>
            <div class="review-list clearfix">
                <?php foreach ($a_review as $item) { ?>
                    <?= $this->renderPartial('review', array('item' => $item)); ?>
                <?php } ?>
            </div>
            <?php if ($more) { ?>
                <a href="javascript:" class="art-more load-review-category" data-offset="0" data-id="<?= $o_category['id']; ?>">
                    <?= Yii::t('views.category.category', 'link-more'); ?>
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