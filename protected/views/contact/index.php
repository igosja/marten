<?php
/**
 * @var $form CActiveForm
 * @var $model Feedback
 * @var $o_page Contact
 */
?>
<section class="content">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="b-title"><?= $o_page['h1_' . Yii::app()->language]; ?></h1>
        <div class="clearfix contacts">
            <div class="contacts-l clearfix">
                <h2 class="payment__item__title"><?= $o_page['company_' . Yii::app()->language]; ?></h2>
                <div class="contacts-i">
                    <strong><?= Yii::t('views.contact.index', 'address'); ?></strong><br/>
                    <?= $o_page['address_1_' . Yii::app()->language]; ?><br/>
                    <?= $o_page['address_2_' . Yii::app()->language]; ?>
                </div>
                <div class="contacts-i">
                    <strong><?= Yii::t('views.contact.index', 'phone'); ?></strong><br/>
                    <?= $o_page['phone_city']; ?><br/>
                    <?= $o_page['phone_umc']; ?>
                </div>
                <div class="contacts-i">
                    <strong><?= Yii::t('views.contact.index', 'email'); ?></strong><br/>
                    <a href="mailto:<?= $o_page['email']; ?>"><?= $o_page['email']; ?></a>
                </div>
                <div class="contacts-i">
                    <strong><?= Yii::t('views.contact.index', 'site'); ?></strong><br/>
                    <?= CHtml::link(
                        $_SERVER['HTTP_HOST'],
                        array('index/index')
                    ); ?>
                </div>
            </div>
            <div class="contacts-c">
                <div id="map" data-lat="<?= $o_page['google_lat']; ?>" data-lng="<?= $o_page['google_lng']; ?>"></div>
            </div>
            <div class="contacts-r">
                <h2 class="payment__item__title"><?= Yii::t('views.contact.index', 'form-h2'); ?></h2>
                <div class="form">
                    <?php $form = $this->beginWidget('CActiveForm', array(
                        'enableAjaxValidation' => false,
                        'enableClientValidation' => true,
                    )); ?>
                    <?= CHtml::label(
                        Yii::t('views.contact.index', 'label-name') . ' <span></span>',
                        '',
                        array('class' => 'form__label')
                    ); ?>
                    <?= $form->textField($model, 'name', array('class' => 'form__input form__input_email')); ?>
                    <?= $form->error($model, 'name'); ?>
                    <?= CHtml::label(
                        Yii::t('views.contact.index', 'label-email') . ' <span></span>',
                        '',
                        array('class' => 'form__label')
                    ); ?>
                    <?= $form->textField($model, 'email', array('class' => 'form__input form__input_email')); ?>
                    <?= $form->error($model, 'email'); ?>
                    <?= CHtml::label(
                        Yii::t('views.contact.index', 'label-text') . ' <span></span>',
                        '',
                        array('class' => 'form__label')
                    ); ?>
                    <?= $form->textarea($model, 'text', array('class' => 'form__textarea')); ?>
                    <?= $form->error($model, 'text'); ?>
                    <?= CHtml::submitButton(
                        Yii::t('views.contact.index', 'button-submit'),
                        array('class' => 'form__btn form__btn__contacts')
                    ); ?>
                    <div class="form__note"><?= Yii::t('views.contact.index', 'required'); ?></div>
                    <?php $this->endWidget(); ?>
                </div>
            </div>
        </div>
    </div>
</section>