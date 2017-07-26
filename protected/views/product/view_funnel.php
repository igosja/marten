<?php
/**
 * @var $a_review array
 * @var $category_simple integer
 * @var $form CActiveForm
 * @var $more boolean
 * @var $model Review
 * @var $o_product Product
 * @var $rating Review
 */
?>
<section class="content">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <div class="clearfix tov">
            <div class="tov__left">
                <div class="slider-out">
                    <div class="slider clearfix">
                        <?php foreach ($o_product['a_simple'][$category_simple]['simple']['a_image'] as $item) { ?>
                            <div>
                                <img
                                        src="<?= ImageIgosja::resize($item['image_id'], 600, 600); ?>"
                                        alt="<?= $o_product['h1_' . Yii::app()->language]; ?>"
                                />
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="slider-nav">
                    <?php foreach ($o_product['a_simple'][$category_simple]['simple']['a_image'] as $item) { ?>
                        <div>
                            <img
                                    src="<?= ImageIgosja::resize($item['image_id'], 600, 600); ?>"
                                    alt="<?= $o_product['h1_' . Yii::app()->language]; ?>"
                            />
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
                        <strong>№<?= isset($o_product['a_simple'][$category_simple]['simple']['sku']) ? $o_product['a_simple'][$category_simple]['simple']['sku'] : 0; ?></strong>
                        <div class="tov__stars otziv-i__stars">
                            <?php for ($i = 0; $i < 5; $i++) { ?>
                                <span
                                    <?php if ($i >= $rating['rating']) { ?>class="none"<?php } ?>
                                ></span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="tov__prop ">
                    <div class="tov__prop__title"><?= Yii::t('views.product.view', 'diameter'); ?></div>
                    <?php $checked = true;
                    foreach ($o_product['a_simple'] as $item) { ?>
                        <div class="tov__prop__i">
                            <input
                                    type="radio"
                                    name="power"
                                    id="pr-<?= $item['simple']['id']; ?>"
                                    <?php if ($checked) { ?>checked<?php } ?>
                            />
                            <label
                                    class="power-change"
                                    data-simple="<?= $item['simple']['id']; ?>"
                                    data-power="<?= $item['simple']['power']; ?>"
                                    data-price="<?= number_format($item['simple']['price'], 0, '', ' '); ?>"
                                    data-sku="<?= $item['simple']['sku']; ?>"
                                    for="pr-<?= $item['simple']['id']; ?>"
                                    data-characteristic="<?= str_replace('"', "'", $item['simple']['characteristic_' . Yii::app()->language]); ?>"
                                    data-size="<?= str_replace('"', "'", $item['simple']['size_' . Yii::app()->language]); ?>"
                            >
                                <?= $item['simple']['power']; ?>
                            </label>
                        </div>
                        <?php $checked = false;
                    } ?>
                </div>
                <div class="tov__gr">
                    <div class="tov__price"><?= Yii::t('views.product.view', 'price'); ?>:
                        <strong>
                            <?= number_format(isset($o_product['a_simple'][$category_simple]['simple']['price']) ? $o_product['a_simple'][$category_simple]['simple']['price'] : 0, 0, '', ' '); ?>
                            грн
                        </strong>
                    </div>
                    <?php if ($o_product['instock']) { ?>
                        <div class="tov__nalichie">
                            <?= Yii::t('views.product.view', 'instock'); ?>
                        </div>
                    <?php } ?>
                    <a
                            href="javascript:"
                            data-selector="form-buy"
                            class="tov__btn overlayElementTrigger"
                            data-image="<?= ImageIgosja::resize(isset($o_product['a_simple'][$category_simple]['simple']['a_image'][0]['image_id']) ? $o_product['a_simple'][$category_simple]['simple']['a_image'][0]['image_id'] : 0, 72, 72); ?>"
                            data-product="<?= $o_product['h1_' . Yii::app()->language]; ?>"
                            data-power="<?= isset($o_product['a_simple'][$category_simple]['simple']['power']) ? $o_product['a_simple'][$category_simple]['simple']['power'] : 0; ?>"
                    ></a>
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
                        <a href="javascript:" class="tab-review-link">
                            <?= Yii::t('views.product.view', 'tab-review'); ?>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:"></a>
                    </li>
                    <li>
                        <a href="javascript:"></a>
                    </li>
                </ul>
                <div class="box">
                    <div class="box__half">
                        <?php if ($o_product['video']) { ?>
                            <iframe
                                    src="https://www.youtube.com/embed/<?= $o_product['video']; ?>"
                                    frameborder="0"
                                    allowfullscreen
                            ></iframe>
                        <?php } ?>
                    </div>
                    <div class="box__half">
                        <?= $o_product['description_' . Yii::app()->language]; ?>
                    </div>
                </div>
                <div class="box visible">
                    <span id="characteristic-span"><?= isset($o_product['a_simple'][$category_simple]['simple']) ? $o_product['a_simple'][$category_simple]['simple']['characteristic_' . Yii::app()->language] : ''; ?></span>
                </div>
                <div class="box">
                    <div class="clearfix otzivi">
                        <div class="otzivi-l">
                            <div class="review-list">
                                <?php foreach ($a_review as $item) { ?>
                                    <?= $this->renderPartial('review', array('item' => $item)); ?>
                                <?php } ?>
                            </div>
                            <?php if ($more) { ?>
                                <a href="javascript:" class="art-more load-review-product" data-offset="0"
                                   data-id="<?= $o_product['id']; ?>">
                                    <?= Yii::t('views.product.view', 'link-more'); ?>
                                </a>
                            <?php } ?>
                        </div>
                        <div class="otzivi-r">
                            <div class="add-otziv">
                                <?= Yii::t('views.product.view', 'add-review'); ?><span></span>
                            </div>
                            <div class="form">
                                <?php $form = $this->beginWidget('CActiveForm', array(
                                    'enableAjaxValidation' => false,
                                    'enableClientValidation' => true,
                                    'id' => 'form-review'
                                )); ?>
                                <div class="tov__stars otziv-i__stars">
                                    <span class="rating-star-form" data-star="1" id="rating-star-form-1"></span>
                                    <span class="rating-star-form" data-star="2" id="rating-star-form-2"></span>
                                    <span class="rating-star-form" data-star="3" id="rating-star-form-3"></span>
                                    <span class="rating-star-form" data-star="4" id="rating-star-form-4"></span>
                                    <span class="rating-star-form" data-star="5" id="rating-star-form-5"></span>
                                </div>
                                <?= $form->hiddenField($model, 'rating', array('value' => $o_product['id'])); ?>
                                <?= $form->hiddenField($model, 'product_id', array('value' => $o_product['id'])); ?>
                                <?= CHtml::label(
                                    Yii::t('views.product.view', 'label-name') . '<span></span>',
                                    '',
                                    array('class' => 'form__label')
                                ); ?>
                                <?= $form->textField($model, 'name', array('class' => 'form__input form__input_name')); ?>
                                <?= $form->error($model, 'name'); ?>
                                <?= CHtml::label(
                                    Yii::t('views.product.view', 'label-email') . '<span></span>',
                                    '',
                                    array('class' => 'form__label')
                                ); ?>
                                <?= $form->textField($model, 'email', array('class' => 'form__input form__input_email')); ?>
                                <?= $form->error($model, 'email'); ?>
                                <?= CHtml::label(
                                    Yii::t('views.product.view', 'label-text') . '<span></span>',
                                    '',
                                    array('class' => 'form__label')
                                ); ?>
                                <?= $form->textArea($model, 'text', array('class' => 'form__textarea')); ?>
                                <?= $form->error($model, 'text'); ?>
                                <?= CHtml::submitButton(
                                    Yii::t('views.product.view', 'button-submit'),
                                    array('class' => 'form__btn form__btn__contacts')
                                ); ?>
                                <div class="form__note">
                                    <?= Yii::t('views.product.view', 'form-required'); ?>
                                </div>
                                <?php $this->endWidget(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if ($o_product['a_also']) { ?>
        <div class="main-b__info">
            <div class="wrap clearfix">
                <h2 class="b-title"><?= Yii::t('views.product.view', 'also'); ?></h2>
                <div class="about-slider tovar-slider owl-carousel">
                    <?php foreach ($o_product['a_also'] as $item) { ?>
                        <div class="item">
                            <?= CHtml::link(
                                '<div class="cat__i__img"><img src="' . ImageIgosja::resize(isset($item['product']['a_image'][0]['image_id']) ? $item['product']['a_image'][0]['image_id'] : 0, 600, 600) . '" alt="' . $item['product']['h1_' . Yii::app()->language] . '"/></div>
                                <span class="cat__i__text">' . $item['product']['h1_' . Yii::app()->language] . '</span>
                                <span class="cat-i__price">
                                <small>' . Yii::t('views.product.view', 'price') . ':
                                </small> ' . Yii::t('views.product.view', 'from') . ' ' . number_format(isset($item['product']['min_price'][0]['simple']['price']) ? $item['product']['min_price'][0]['simple']['price'] : 0, 0, '', ' ') . ' грн</span>',
                                array('view', 'id' => $item['product']['url']),
                                array('class' => 'cat__i')
                            ); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="grey-bg main-b__text grey-bg_in">
        <div class="wrap">
            <?= $o_product['text_2_' . Yii::app()->language]; ?>
        </div>
    </div>
</section>