<?php
/**
 * @var $o_news News
 * @var $o_next News
 * @var $o_prev News
 */
?>
<section class="content">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <div class="top-pager">
            <?php if ($o_prev) { ?>
                <?= CHtml::link('', array('view', 'id' => $o_prev['url']), array('class' => 'pager__prev')); ?>
            <?php } ?>
            <?php if ($o_next) { ?>
                <?= CHtml::link('', array('view', 'id' => $o_next['url']), array('class' => 'pager__next')); ?>
            <?php } ?>
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
            <?php if ($o_prev) { ?>
                <?= CHtml::link('', array('view', 'id' => $o_prev['url']), array('class' => 'pager__prev')); ?>
            <?php } ?>
            <a
                    href="https://www.facebook.com/sharer/sharer.php?u=<?= $this->createAbsoluteUrl('view', array('id' => $o_news['url'])); ?>"
                    class="pager__facebook"
                    target="_blank"
            ></a>
            <a
                    href="https://twitter.com/intent/tweet?text=<?= $this->seo_title; ?>+<?= $this->seo_description; ?>&url=<?= $this->createAbsoluteUrl('view', array('id' => $o_news['url'])); ?>"
                    class="pager__twitter"
                    target="_blank"
            ></a>
            <a
                    href="https://plus.google.com/share?url=<?= $this->createAbsoluteUrl('view', array('id' => $o_news['url'])); ?>&t=<?= $this->seo_title; ?>+<?= $this->seo_description; ?>"
                    class="pager__gplus"
                    target="_blank"
            ></a>
            <?php if ($o_next) { ?>
                <?= CHtml::link('', array('view', 'id' => $o_next['url']), array('class' => 'pager__next')); ?>
            <?php } ?>
        </div>
    </div>
</section>