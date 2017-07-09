<?php
/**
 * @var $a_news array
 * @var $more boolean
 * @var $o_page PageNews
 * @var $offset integer
 * @var $page integer
 * @var $page_first integer
 * @var $page_last integer
 * @var $page_next integer
 * @var $page_prev integer
 */
?>
<section class="content">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="b-title"><?= $o_page['h1_' . Yii::app()->language]; ?></h1>
        <div class="art art__in clearfix">
            <?php foreach ($a_news as $item) { ?>
                <?= $this->renderPartial('item', array('item' => $item)); ?>
            <?php } ?>
        </div>
        <?php if ($more) { ?>
            <a href="javascript:" class="art-more" data-offset="<?= $offset; ?>">
                <?= Yii::t('views.contact.index', 'link-more'); ?>
            </a>
        <?php } ?>
        <div class="pager clearfix">
            <?php if ($page_prev) { ?>
                <?= CHtml::link('', array('index', 'page' => $page_prev), array('class' => 'pager__prev')); ?>
            <?php } ?>
            <?php for ($i = $page_first; $i <= $page_last; $i++) { ?>
                <?php if ($page == $i) { ?>
                    <span><?= $i; ?></span>
                <?php } else { ?>
                    <?= CHtml::link($i, array('index', 'page' => $i)); ?>
                <?php } ?>
            <?php } ?>
            <?php if ($page_next) { ?>
                <?= CHtml::link('', array('index', 'page' => $page_next), array('class' => 'pager__next')); ?>
            <?php } ?>
        </div>
    </div>
</section>