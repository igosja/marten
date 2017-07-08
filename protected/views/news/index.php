<?php
/**
 * @var $a_news array
 * @var $o_page PageNews
 */
?>
<section class="content">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="b-title"><?= $o_page['h1_' . Yii::app()->language]; ?></h1>
        <div class="art art__in clearfix">
            <?php foreach ($a_news as $item) { ?>
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
            <?php } ?>
        </div>
        <a href="javascript:" class="art-more"><?= Yii::t('views.contact.index', 'link-more'); ?></a>
        <div class="pager clearfix">
            <a href="" class="pager__prev"></a>
            <span>1</span>
            <a href="">2</a>
            <a href="">3</a>
            <a href="">4</a>
            <a href="">5</a>
            <a href="">6</a>
            <a href="">7</a>
            <a href="">8</a>
            <a href="">9</a>
            <a href="" class="pager__next"></a>
        </div>
    </div>
</section>