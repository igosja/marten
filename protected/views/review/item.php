<?php
/**
 * @var $item Review
 */
?>
<div class="otziv-i">
    <div class="otziv-i__info clearfix">
        <div class="otziv-i__img">
            <img
                    src="<?= ImageIgosja::resize(isset($item['product']['a_image'][0]['image_id']) ? $item['product']['a_image'][0]['image_id'] : 0, 70, 70); ?>"
                    alt=""
            />
        </div>
        <div class="otziv-i__cont">
            <div class="otziv-i__name"><?= $item['name']; ?></div>
            <div class="otziv-i__stars">
                <?php for ($i = 0; $i < 5; $i++) { ?>
                    <span
                        <?php if ($i >= $item['rating']) { ?>class="none"<?php } ?>
                    ></span>
                <?php } ?>
            </div>
            <?= CHtml::link(
                $item['product']['h1_' . Yii::app()->language],
                array('product/view', 'id' => $item['product']['url']),
                array('class' => 'otziv-i__link')
            ); ?>
        </div>
    </div>
    <div class="otziv-i__date">
        <?= date('d.m.y H:i', $item['date']); ?>
    </div>
    <div class="art__i__text">
        <?= $item['text']; ?>
    </div>
</div>