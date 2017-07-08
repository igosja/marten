<?php
/**
 * @var $o_page PageGuarantee
 */
?>
<section class="content">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="b-title"><?= $o_page['h1_' . Yii::app()->language]; ?></h1>
        <div class="clearfix">
            <img src="/img/garantii-img.png" class="img-left" alt="<?= $o_page['h1_' . Yii::app()->language]; ?>">
            <?= $o_page['text_' . Yii::app()->language]; ?>
        </div>
    </div>
</section>