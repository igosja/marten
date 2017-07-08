<?php
/**
 * @var $a_videocategory array
 * @var $o_page PageVideo
 */
?>
<section class="content">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="b-title"><?= $o_page['h1_' . Yii::app()->language]; ?></h1>
        <?php foreach ($a_videocategory as $item) { ?>
            <?php if (count($item->countvideo)) { ?>
                <div class="video-b">
                    <h3 class="video-title"><?= $item['name_' . Yii::app()->language] ?></h3>
                    <div class="clearfix">
                        <?php foreach ($item->video as $video) { ?>
                            <?= $this->renderPartial('item', array('video' => $video, 'margin' => false)); ?>
                        <?php } ?>
                    </div>
                    <?php if (count($item->countvideo) > 3) { ?>
                        <a href="javascript:" class="video-more" data-videocategory="<?= $item->primaryKey; ?>" data-offset="3">
                            <?= Yii::t('views.video.main', 'link-more'); ?>
                        </a>
                    <?php } ?>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
    <div class="grey-bg main-b__text" style="margin-bottom: -20px;">
        <div class="wrap">
            <?= $o_page['text_' . Yii::app()->language]; ?>
        </div>
    </div>
</section>