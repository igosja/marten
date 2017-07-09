<?php
/**
 * @var $a_achievement_1 array
 * @var $a_achievement_2 array
 * @var $a_photo array
 * @var $o_page PageAbout
 */
?>
<section class="content">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="b-title"><?= $o_page['h1_' . Yii::app()->language]; ?></h1>
        <?= $o_page['text_1_' . Yii::app()->language]; ?>
        <?php if ($o_page['video']) { ?>
            <iframe
                    allowfullscreen
                    class="about-video"
                    frameborder="0"
                    height="435"
                    src="https://www.youtube.com/embed/<?= $o_page['video']; ?>"
                    width="600"
            ></iframe>
        <?php } ?>
        <div class="divider"></div>
        <h3 class="about-title"><?= Yii::t('views.about.index', 'achievement'); ?></h3>
        <div class="clearfix ">
            <div class="about__item">
                <ul>
                    <?php foreach ($a_achievement_1 as $item) { ?>
                        <li><?= $item['text_' . Yii::app()->language]; ?></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="about__item">
                <ul>
                    <?php foreach ($a_achievement_2 as $item) { ?>
                        <li><?= $item['text_' . Yii::app()->language]; ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="divider"></div>
        <?php if ($a_photo) { ?>
            <h3 class="about-title"><?= Yii::t('views.about.index', 'photo-with-us'); ?></h3>
            <div class="about-slider owl-carousel">
                <?php foreach ($a_photo as $item) { ?>
                    <div class="item">
                        <img src="<?= ImageIgosja::resize($item->image_id, 448, 448); ?>" alt="">
                    </div>
                <?php } ?>
            </div>
            <div class="divider"></div>
        <?php } ?>
        <?= $o_page['text_2_' . Yii::app()->language]; ?>
    </div>
</section>