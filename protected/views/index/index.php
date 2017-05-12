<section class="content content_main">
    <div id="slider" class="owl-carousel">
        <?php foreach ($a_slide as $item) { ?>
            <div class="item">
                <img src="<?= ImageIgosja::resize($item->image_id, 1600, 500); ?>" alt=""/>
            </div>
        <?php } ?>
    </div>
    <div class="wrap">
        <div class="m-text">
            <h1 class="m-text__title"><?= $o_page['h1_' . Yii::app()->language]; ?></h1>
            <?= $o_page['text_' . Yii::app()->language]; ?>
        </div>
        <div class="b-items clearfix">
            <?php foreach ($a_service as $item) { ?>
                <?= CHtml::link(
                    '<img src="' . ImageIgosja::resize($item->image_id, 260, 160) . '" alt="" class="b-item__img">
                    <span class="b-item__text"><span></span>' . $item['h1_' . Yii::app()->language] . '</span>',
                    array('service/view', 'id' => $item->url),
                    array('class' => 'b-item')
                ) ?>
            <?php } ?>
        </div>
    </div>
</section>