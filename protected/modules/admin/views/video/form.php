<?php
/**
 * @var $a_videocategory array
 * @var $form CActiveForm
 * @var $model Video
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
                <td class="col-lg-3"><?= $form->labelEx($model, 'videocategory_id'); ?></td>
                <td>
                    <?= $form->dropDownList(
                        $model,
                        'videocategory_id',
                        CHtml::listData($a_videocategory, 'id', 'name_ru'),
                        array('empty' => 'Выберите категорию', 'class' => 'form-control')
                    ); ?>
                    <?= $form->error($model, 'videocategory_id'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'code'); ?></td>
                <td>
                    <?= $form->textField($model, 'code', array('class' => 'form-control')); ?>
                    <?= $form->error($model, 'code'); ?>
                </td>
            </tr>
        </table>
        <p class="text-center">
            <?= CHtml::submitButton('Сохранить', array('class' => 'btn btn-default text-center')); ?>
        </p>
        <?php $this->endWidget(); ?>
    </div>
</div>