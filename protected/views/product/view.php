<?php
/**
 * @var $o_product Product
 */
?>
<section class="content">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <div class="clearfix tov">
            <div class="tov__left">
                <div class="slider-out">
                    <div class="slider clearfix">
                        <?php foreach ($o_product['a_image'] as $item) { ?>
                            <div>
                                <img src="<?= ImageIgosja::resize($item['image_id'], 600, 600); ?>"
                                     alt="<?= $o_product['h1_' . Yii::app()->language]; ?>">
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="slider-nav">
                    <?php foreach ($o_product['a_image'] as $item) { ?>
                        <div>
                            <img src="<?= ImageIgosja::resize($item['image_id'], 600, 600); ?>"
                                 alt="<?= $o_product['h1_' . Yii::app()->language]; ?>">
                        </div>
                    <?php } ?>
                </div>
                <a href="javascript:" class="next"></a>
                <a href="javascript:" class="prev"></a>
            </div>
            <div class="tov__right">
                <div class="tov__info">
                    <h1 class="tov__title"><?= $o_product['h1_' . Yii::app()->language]; ?></h1>
                    <div class="tov__art"><?= Yii::t('views.product.view', 'sku'); ?>
                        <strong>№<?= isset($o_product['a_simple'][0]['simple']['sku']) ? $o_product['a_simple'][0]['simple']['sku'] : 0; ?></strong>
                        <div class="tov__stars otziv-i__stars">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span class="none"></span>
                        </div>
                    </div>
                </div>
                <div class="tov__prop ">
                    <div class="tov__prop__title"><?= Yii::t('views.product.view', 'power'); ?></div>
                    <?php $checked = true;
                    foreach ($o_product['a_simple'] as $item) { ?>
                        <div class="tov__prop__i">
                            <input type="radio" name="power" id="pr-<?= $item['simple']['id']; ?>"
                                   <?php if ($checked) { ?>checked<?php } ?>>
                            <label for="pr-<?= $item['simple']['id']; ?>"><?= $item['simple']['power']; ?></label>
                        </div>
                        <?php $checked = false;
                    } ?>
                </div>
                <div class="tov__gr">
                    <div class="tov__price"><?= Yii::t('views.product.view', 'price'); ?>:
                        <strong><?= number_format(isset($o_product['a_simple'][0]['simple']['price']) ? $o_product['a_simple'][0]['simple']['price'] : 0, 0, '', ' '); ?>
                            грн</strong></div>
                    <?php if ($o_product['instock']) { ?>
                        <div class="tov__nalichie">
                            <?= Yii::t('views.product.view', 'instock'); ?>
                        </div>
                    <?php } ?>
                    <a href="javascript:" data-selector="form-buy" class="tov__btn overlayElementTrigger"></a>
                </div>
                <p class="tov__text">
                    <?= $o_product['text_1_' . Yii::app()->language]; ?>
                </p>
                <div class="tov__icons">
                    <div class="clearfix">
                        <img src="/img/tov-icons/icon-1.png" alt="<?= Yii::t('views.product.view', 'delivery'); ?>">
                        <span><?= Yii::t('views.product.view', 'delivery'); ?></span>
                    </div>
                    <div class="clearfix">
                        <img src="/img/tov-icons/icon-2.png" alt="<?= Yii::t('views.product.view', 'guarantee'); ?>">
                        <span><?= Yii::t('views.product.view', 'guarantee'); ?></span>
                    </div>
                    <div class="clearfix">
                        <img src="/img/tov-icons/icon-3.png" alt="<?= Yii::t('views.product.view', 'exchange'); ?>">
                        <span><?= Yii::t('views.product.view', 'exchange'); ?></span>
                    </div>
                    <div class="clearfix">
                        <img src="/img/tov-icons/icon-4.png" alt="<?= Yii::t('views.product.view', 'install'); ?>">
                        <span><?= Yii::t('views.product.view', 'install'); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="tov__bottom">
            <div class="product__bottom boxs">
                <ul class="tabs">
                    <li>
                        <?= Yii::t('views.product.view', 'tab-description'); ?>
                    </li>
                    <li class="current">
                        <a href="javascript:">
                            <?= Yii::t('views.product.view', 'tab-characteristic'); ?>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:">
                            <?= Yii::t('views.product.view', 'tab-size'); ?>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:">
                            <?= Yii::t('views.product.view', 'tab-review'); ?>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:">
                            <img src="/img/pdf.png" alt="<?= Yii::t('views.product.view', 'tab-pdf'); ?>">
                            <?= Yii::t('views.product.view', 'tab-pdf'); ?>
                        </a>
                    </li>
                </ul>
                <div class="box">
                    <div class="box__half">
                        <?php if ($o_product['video']) { ?>
                            <iframe src="https://www.youtube.com/embed/<?= $o_product['video']; ?>" frameborder="0"
                                    allowfullscreen></iframe>
                        <?php } ?>
                    </div>
                    <div class="box__half">
                        <?= $o_product['description_' . Yii::app()->language]; ?>
                    </div>
                </div>
                <div class="box visible">
                    <?= $o_product['characteristic_' . Yii::app()->language]; ?>
                </div>
                <div class="box">
                    <?= $o_product['size_' . Yii::app()->language]; ?>
                </div>
                <div class="box">
                    <div class="clearfix otzivi">
                        <div class="otzivi-l">
                            <?php for ($i = 0; $i < 3; $i++) { ?>
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
                                        Мне котел очень понравился у него нет никаких особых дизайнерских решений, но
                                        все функции выполняет и цена, как для твердотопливного, низкая. Кпд у Gorenje
                                        ECO HEAT UNI 4 CI всего скалируется от 67-77%, но я бы сказал, что топливо
                                        потребляет умеренно и при это выдает высокую температуру всех помещениях.<br/>
                                        ... <a href="">Читать весь отзыв</a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="otzivi-r">
                            <div class="add-otziv">
                                Добавить отзыв<span></span>
                            </div>
                            <div class="form">
                                <form action="">
                                    <label class="form__label">Ваше имя:<span></span></label>
                                    <input type="" class="form__input form__input_name">

                                    <label class="form__label">E-mail:<span></span></label>
                                    <input type="" class="form__input form__input_email">

                                    <label class="form__label">Комментарий:<span></span></label>
                                    <textarea class="form__textarea"></textarea>

                                    <a href="javascript:;" class="form__btn form__btn__contacts">Отправить</a>
                                    <div class="form__note">— поля обязательные для заполнения</div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <?= isset($o_product['pdf']['url']) ? $o_product['pdf']['url'] : ''; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="main-b__info">
        <div class="wrap clearfix">
            <h2 class="b-title"><?= Yii::t('views.product.view', 'also'); ?></h2>
            <div class="about-slider tovar-slider owl-carousel">
                <?php foreach ($o_product['a_also'] as $item) { ?>
                    <div class="item">
                        <?= CHtml::link(
                            '<img class="cat__i__img" src="' . ImageIgosja::resize(isset($item['a_image'][0]['image_id']) ? $item['a_image'][0]['image_id'] : 0, 600, 600) . '" alt="' . $item['h1_' . Yii::app()->language] . '"/>
                        <span class="cat__i__text">' . $item['h1_' . Yii::app()->language] . '</span>
                        <span class="cat-i__price">
                        <small>' . Yii::t('views.product.view', 'price') . ':
                        </small> ' . Yii::t('views.product.view', 'from') . ' ' . number_format(isset($item['a_simple'][0]['simple']['price']) ? $item['a_simple'][0]['simple']['price'] : 0, 0, '', ' ') . ' грн</span>',
                            array('view', 'id' => $item['url']),
                            array('class' => 'cat__i')
                        ); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="grey-bg main-b__text grey-bg_in">
        <div class="wrap">
            <?= $o_product['text_2_' . Yii::app()->language]; ?>
        </div>
    </div>
</section>