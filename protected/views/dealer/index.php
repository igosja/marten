<?php
/**
 * @var $o_page PageDealer
 */
?>
<section class="content">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="b-title"><?= $o_page['h1_' . Yii::app()->language]; ?></h1>
        <?= $o_page['text_' . Yii::app()->language]; ?>
    </div>
</section>