<?php
/**
 * @var $form CActiveForm
 * @var $model ProductSimple
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
            'htmlOptions' => array('enctype' => 'multipart/form-data'),
        )); ?>
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'name'); ?></td>
                <td>
                    <?= $form->textField($model, 'name', array('class' => 'form-control')); ?>
                    <?= $form->error($model, 'name'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'sku'); ?></td>
                <td>
                    <?= $form->textField($model, 'sku', array('class' => 'form-control')); ?>
                    <?= $form->error($model, 'sku'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'power'); ?></td>
                <td>
                    <?= $form->textField($model, 'power', array('class' => 'form-control')); ?>
                    <?= $form->error($model, 'power'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'price'); ?></td>
                <td>
                    <?= $form->textField($model, 'price', array('class' => 'form-control')); ?>
                    <?= $form->error($model, 'price'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'image'); ?></td>
                <td>
                    <input type="file" name="image[]" class="form-control" multiple />
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
                <td class="col-lg-3"><?= $form->labelEx($model, 'text_uk'); ?></td>
                <td>
                    <?= $form->textArea($model, 'text_uk', array('class' => 'form-control')); ?>
                    <?= $form->error($model, 'text_uk'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'characteristic_ru_excel'); ?></td>
                <td>
                    <input type="file" name="characteristic_ru_excel" class="form-control"/>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'characteristic_ru'); ?></td>
                <td>
                    <?= $form->textArea($model, 'characteristic_ru', array('class' => 'form-control')); ?>
                    <?= $form->error($model, 'characteristic_ru'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'characteristic_uk_excel'); ?></td>
                <td>
                    <input type="file" name="characteristic_uk_excel" class="form-control"/>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'characteristic_uk'); ?></td>
                <td>
                    <?= $form->textArea($model, 'characteristic_uk', array('class' => 'form-control')); ?>
                    <?= $form->error($model, 'characteristic_uk'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'size_ru_excel'); ?></td>
                <td>
                    <input type="file" name="size_ru_excel" class="form-control"/>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'size_ru'); ?></td>
                <td>
                    <?= $form->textArea($model, 'size_ru', array('class' => 'form-control')); ?>
                    <?= $form->error($model, 'size_ru'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'size_uk_excel'); ?></td>
                <td>
                    <input type="file" name="size_uk_excel" class="form-control"/>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'size_uk'); ?></td>
                <td>
                    <?= $form->textArea($model, 'size_uk', array('class' => 'form-control')); ?>
                    <?= $form->error($model, 'size_uk'); ?>
                </td>
            </tr>
        </table>
        <p class="text-center">
            <?= CHtml::submitButton('Сохранить', array('class' => 'btn btn-default text-center')); ?>
        </p>
        <?php $this->endWidget(); ?>
    </div>
</div>