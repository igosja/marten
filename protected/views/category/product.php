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
            <?php foreach ($a_product as $item) {
                print CHtml::link(
                    '<div class="cat__i__img"><img src="' . ImageIgosja::resize(isset($item['product']['a_simple'][0]['simple']['a_image'][0]['image_id']) ? $item['product']['a_simple'][0]['simple']['a_image'][0]['image_id'] : 0, 600, 600) . '" alt="' . $item['product']['h1_' . Yii::app()->language] . '"/></div>
                    <span class="cat__i__text">' . $item['product']['h1_' . Yii::app()->language] . '</span>
                    <span class="cat-i__price">
                    <small>' . Yii::t('views.category.product', 'price') . ':
                    </small> ' . Yii::t('views.category.product', 'from') . ' ' . number_format(isset($item['product']['min_price'][0]['simple']['price']) ? $item['product']['min_price'][0]['simple']['price'] : 0, 0, '', ' ') . ' грн</span>
                    <span class="cat-i__info">' . $item['product']['categorytext_' . Yii::app()->language]. '</span>',
                    array('product/view', 'id' => $item['product']['url']),
                    array('class' => 'cat__i')
                );
            } ?>
        </div>
    </div>
    <?php if ($a_review) { ?>
        <div class="main-b__info">
            <div class="wrap clearfix">
                <h2 class="b-title"><?= Yii::t('views.category.product', 'review'); ?></h2>
                <div class="clearfix review-list">
                    <?php for ($i = 0; $i < count($a_review); $i++) { ?>
                        <?php if (0 == $i % 2) { ?>
                            <div class="clearfix">
                        <?php } ?>
                        <?= $this->renderPartial('review', array('item' => $a_review[$i])); ?>
                        <?php if (1 == $i % 2 || $i + 1 < count($a_review)) { ?>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <?php if ($more) { ?>
                    <a href="javascript:" class="art-more load-review-category" data-offset="0"
                       data-id="<?= $o_category['id']; ?>">
                        <?= Yii::t('views.category.product', 'link-more'); ?>
                    </a>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
    <div class="grey-bg main-b__text grey-bg_in">
        <div class="wrap">
            <?= $o_category['text_' . Yii::app()->language]; ?>
        </div>
    </div>
</section>