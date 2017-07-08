<?php
/**
 * @var $o_news News
 */
?>
<section class="content">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <div class="top-pager">
            <a href="" class="pager__prev"></a>
            <a href="" class="pager__next"></a>
        </div>
        <h1 class="b-title b-title__art"><?= $o_news['h1_' . Yii::app()->language]; ?></h1>
        <span class="art-date"><?= date('d.m.Y', $o_news['date']); ?></span>
        <div class="clearfix">
            <div class="img-left img-art">
                <img src="<?= ImageIgosja::resize($o_news['image_id'], 560, 280); ?>">
            </div>
            <?= $o_news['text_' . Yii::app()->language]; ?>
        </div>
        <div class="pager clearfix">
            <a href="" class="pager__prev"></a>

            <a href="" class="pager__facebook"></a>
            <a href="" class="pager__twitter"></a>
            <a href="" class="pager__gplus"></a>

            <a href="" class="pager__next"></a>
        </div>
    </div>
</section>