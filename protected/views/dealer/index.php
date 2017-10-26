<?php
/**
 * @var $form CActiveForm
 * @var $model Dealer
 * @var $o_page PageDealer
 */
?>
<section class="content">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="b-title"><?= $o_page['h1_' . Yii::app()->language]; ?></h1>
        <div class="clearfix">
            <div class="delear-l">
                <?= $o_page['text_' . Yii::app()->language]; ?>
            </div>
            <div class="delear-r">
                <h2 class="payment__item__title"><?= Yii::t('views.dealer.index', 'form-h2'); ?></h2>
                <div class="form">
                    <?php $form = $this->beginWidget('CActiveForm', array(
                        'enableAjaxValidation' => false,
                        'enableClientValidation' => true,
                    )); ?>
                    <?= CHtml::label(
                        Yii::t('views.dealer.index', 'label-name') . ' <span>*</span>',
                        '',
                        array('class' => 'form__label')
                    ); ?>
                    <?= $form->textField($model, 'name', array('class' => 'form__input form__input_name')); ?>
                    <?= $form->error($model, 'name'); ?>
                    <?= CHtml::label(
                        Yii::t('views.dealer.index', 'label-phone') . ' <span>*</span>',
                        '',
                        array('class' => 'form__label')
                    ); ?>
                    <?= $form->textField($model, 'phone', array('class' => 'form__input phone_mask')); ?>
                    <?= $form->error($model, 'phone'); ?>
                    <?= CHtml::label(
                        Yii::t('views.dealer.index', 'label-email') . ' <span>*</span>',
                        '',
                        array('class' => 'form__label')
                    ); ?>
                    <?= $form->textField($model, 'email', array('class' => 'form__input form__input_email')); ?>
                    <?= $form->error($model, 'email'); ?>
                    <?= CHtml::label(
                        Yii::t('views.dealer.index', 'label-site') . ' <span></span>',
                        '',
                        array('class' => 'form__label')
                    ); ?>
                    <?= $form->textField($model, 'site', array('class' => 'form__input')); ?>
                    <?= $form->error($model, 'site'); ?>
                    <?= CHtml::label(
                        Yii::t('views.dealer.index', 'label-shoptype'),
                        '',
                        array('class' => 'form__label')
                    ); ?>
                    <div class="jqui-select">
                        <?= $form->dropDownList($model, 'shoptype', array(
                            'Интернет магазин' => Yii::t('views.dealer.index', 'internet-shop'),
                            'Розничный магазин' => Yii::t('views.dealer.index', 'street-shop'),
                            'Дистрибьютор' => Yii::t('views.dealer.index', 'distributor'),
                        )); ?>
                    </div>
                    <?= $form->error($model, 'shoptype'); ?>
                    <?= CHtml::label(
                        Yii::t('views.dealer.index', 'label-text') . ' <span></span>',
                        '',
                        array('class' => 'form__label')
                    ); ?>
                    <?= $form->textarea($model, 'text', array('class' => 'form__textarea')); ?>
                    <?= $form->error($model, 'text'); ?>
                    <?= CHtml::submitButton(
                        Yii::t('views.dealer.index', 'button-submit'),
                        array('class' => 'form__btn form__btn__contacts')
                    ); ?>
                    <div class="form__note"><?= Yii::t('views.contact.index', 'required'); ?></div>
                    <?php $this->endWidget(); ?>
                </div>
            </div>
        </div>
    </div>
</section>