<?php
/**
 * @var $form CActiveForm
 * @var $model PageMain
 */
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-head text-center"><?= $this->h1; ?></h1>
        <ul class="list-inline preview-links text-center">
            <li>
                <?= CHtml::link(
                    'Назад',
                    array('index'),
                    array('class' => 'btn btn-default')
                ); ?>
            </li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <?php $form = $this->beginWidget('CActiveForm', array(
            'enableAjaxValidation' => false,
            'enableClientValidation' => true,
        )); ?>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#main" data-toggle="tab">Общая информация</a></li>
            <li><a href="#seo" data-toggle="tab">SEO</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="main">
                <table class="table table-striped table-bordered table-hover">
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'phone_city'); ?></td>
                        <td>
                            <?= $form->textField($model, 'phone_city', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'phone_city'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'phone_umc'); ?></td>
                        <td>
                            <?= $form->textField($model, 'phone_umc', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'phone_umc'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'phone_kyivstar'); ?></td>
                        <td>
                            <?= $form->textField($model, 'phone_kyivstar', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'phone_kyivstar'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'phone_life'); ?></td>
                        <td>
                            <?= $form->textField($model, 'phone_life', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'phone_life'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'email'); ?></td>
                        <td>
                            <?= $form->textField($model, 'email', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'email'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'hours_monday'); ?></td>
                        <td>
                            <?= $form->textField($model, 'hours_monday', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'hours_monday'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'hours_saturday'); ?></td>
                        <td>
                            <?= $form->textField($model, 'hours_saturday', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'hours_saturday'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'google_lat'); ?></td>
                        <td>
                            <?= $form->textField($model, 'google_lat', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'google_lat'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'google_lng'); ?></td>
                        <td>
                            <?= $form->textField($model, 'google_lng', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'google_lng'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'company_ru'); ?></td>
                        <td>
                            <?= $form->textField($model, 'company_ru', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'company_ru'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'address_1_ru'); ?></td>
                        <td>
                            <?= $form->textField($model, 'address_1_ru', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'address_1_ru'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'address_2_ru'); ?></td>
                        <td>
                            <?= $form->textField($model, 'address_2_ru', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'address_2_ru'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'address_head_ru'); ?></td>
                        <td>
                            <?= $form->textField($model, 'address_head_ru', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'address_head_ru'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'h1_ru'); ?></td>
                        <td>
                            <?= $form->textField($model, 'h1_ru', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'h1_ru'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'company_uk'); ?></td>
                        <td>
                            <?= $form->textField($model, 'company_uk', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'company_uk'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'address_1_uk'); ?></td>
                        <td>
                            <?= $form->textField($model, 'address_1_uk', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'address_1_uk'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'address_2_uk'); ?></td>
                        <td>
                            <?= $form->textField($model, 'address_2_uk', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'address_2_uk'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'address_head_uk'); ?></td>
                        <td>
                            <?= $form->textField($model, 'address_head_uk', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'address_head_uk'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'h1_uk'); ?></td>
                        <td>
                            <?= $form->textField($model, 'h1_uk', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'h1_uk'); ?>
                        </td>
                    </tr>
                </table>
            </div>
            <?= $this->renderPartial('/include/seo-form', array('model' => $model, 'form' => $form)) ?>
        </div>
        <p class="text-center">
            <?= CHtml::submitButton('Сохранить', array('class' => 'btn btn-default text-center')); ?>
        </p>
        <?php $this->endWidget(); ?>
    </div>
</div>