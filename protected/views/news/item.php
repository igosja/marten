<?php
/**
 * @var $item News
 */
?>
<div class="art__i">
    <?= CHtml::link(
        '<img
        src="' . ImageIgosja::resize($item['image_id'], 600, 190) . '"
        alt="' . $item['h1_' . Yii::app()->language] . '"
        />',
        array('news/view', 'id' => $item['url']),
        array('class' => 'art__i__img')
    ); ?>
    <div class="art__i__date">
        <?= date('d.m.Y', $item['date']); ?>
    </div>
    <?= CHtml::link(
        $item['h1_' . Yii::app()->language],
        array('news/view', 'id' => $item['url']),
        array('class' => 'art__i__title')
    ); ?>
    <div class="art__i__text">
        <?= mb_substr(strip_tags($item['text_' . Yii::app()->language]), 0, 350); ?>
        <br/>
        ...
        <?= CHtml::link(
            Yii::t('views.contact.index', 'link-detail'),
            array('news/view', 'id' => $item['url']),
            array('class' => 'art__i__title')
        ); ?>
    </div>
</div>