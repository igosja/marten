<?php
/**
 * @var $form CActiveForm
 * @var $model Advantage
 */
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header text-center"><?= $this->h1; ?></h1>
        <ul class="list-inline preview-links text-center">
            <li>
                <?= CHtml::link(
                    'Назад',
                    isset($model->id) ? array('view', 'id' => $model->id) : array('index'),
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
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'name_ru'); ?></td>
                <td>
                    <?= $form->textField($model, 'name_ru', array('class' => 'form-control')); ?>
                    <?= $form->error($model, 'name_ru'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'text_ru'); ?></td>
                <td>
                    <?= $form->textArea($model, 'text_ru', array('class' => 'form-control')); ?>
                    <?= $form->error($model, 'text_ru'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'name_uk'); ?></td>
                <td>
                    <?= $form->textField($model, 'name_uk', array('class' => 'form-control')); ?>
                    <?= $form->error($model, 'name_uk'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'text_uk'); ?></td>
                <td>
                    <?= $form->textArea($model, 'text_uk', array('class' => 'form-control')); ?>
                    <?= $form->error($model, 'text_uk'); ?>
                </td>
            </tr>
        </table>
        <p class="text-center">
            <?= CHtml::submitButton('Сохранить', array('class' => 'btn btn-default text-center')); ?>
        </p>
        <?php $this->endWidget(); ?>
    </div>
</div>