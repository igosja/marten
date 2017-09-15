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
            <?php if (isset($o_page['image']['url'])) { ?>
                <img
                        alt="<?= $o_page['h1_' . Yii::app()->language]; ?>"
                        class="img-left"
                        src="<?= $o_page['image']['url']; ?>"
                        width="380"
                />
            <?php } ?>
            <?= $o_page['text_' . Yii::app()->language]; ?>
        </div>
    </div>
</section>