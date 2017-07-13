<?php
/**
 * @var $a_product array
 * @var $o_category Category
 */
?>
<section class="content">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="b-title"><?= $o_category['h1_' . Yii::app()->language]; ?></h1>
        <div class="cat clearfix">
            <?php foreach ($a_product as $item) { ?>
                <?= CHtml::link(
                    '<img class="cat__i__img" src="' . ImageIgosja::resize(isset($item['a_image'][0]['image_id']) ? $item['a_image'][0]['image_id'] : 0, 600, 600) . '" alt="' . $item['h1_' . Yii::app()->language] . '"/>
                    <span class="cat__i__text">' . $item['h1_' . Yii::app()->language] . '</span>
                    <span class="cat-i__price">
                    <small>' . Yii::t('views.category.product', 'price') . ':
                    </small> ' . Yii::t('views.category.product', 'from') . ' ' . number_format(isset($item['a_simple'][0]['simple']['price']) ? $item['a_simple'][0]['simple']['price'] : 0, 0, '', ' ') . ' грн</span>',
                    array('product/view', 'id' => $item['url']),
                    array('class' => 'cat__i')
                ); ?>
            <?php } ?>
        </div>
    </div>
    <div class="main-b__info">
        <div class="wrap clearfix">
            <h2 class="b-title"><?= Yii::t('views.category.product', 'review'); ?></h2>
            <div class="clearfix">
                <?php for ($i = 0; $i < 6; $i++) { ?>
                    <div class="otziv-i">
                        <div class="otziv-i__info clearfix">
                            <div class="otziv-i__img">
                                <img src="/img/trash/kotel-sm.png" alt="">
                            </div>
                            <div class="otziv-i__cont">
                                <div class="otziv-i__name">Виктор</div>
                                <div class="otziv-i__stars">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span class="none"></span>
                                </div>
                                <a href="" class="otziv-i__link">Котел 1 с плитой 120 КВТ</a>
                            </div>
                        </div>
                        <div class="otziv-i__date">
                            20.01.16 12:07
                        </div>
                        <div class="art__i__text">
                            Мне котел очень понравился у него нет никаких особых дизайнерских решений, но все функции
                            выполняет и цена, как для твердотопливного, низкая. Кпд у Gorenje ECO HEAT UNI 4 CI всего
                            скалируется от 67-77%, но я бы сказал, что топливо потребляет умеренно и при это выдает
                            высокую температуру всех помещениях.<br/>
                            ... <a href="">Читать весь отзыв</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <a href="javascript:" class="art-more"><?= Yii::t('views.category.product', 'link-more'); ?></a>
        </div>
    </div>
    <div class="grey-bg main-b__text grey-bg_in">
        <div class="wrap">
            <?= $o_category['text_' . Yii::app()->language]; ?>
        </div>
    </div>
</section>