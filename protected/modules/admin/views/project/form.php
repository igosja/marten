<?php
/**
 * @var $a_projectcategory array
 * @var $form CActiveForm
 * @var $model Project
 */
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header text-center"><?= $this->h1; ?></h1>
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
            'htmlOptions' => array('enctype' => 'multipart/form-data'),
        )); ?>
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'projectcategory_id'); ?></td>
                <td>
                    <?= $form->dropDownList(
                        $model,
                        'projectcategory_id',
                        CHtml::listData($a_projectcategory, 'id', 'name_ru'),
                        array('empty' => 'Выберите категорию', 'class' => 'form-control')
                    ); ?>
                    <?= $form->error($model, 'projectcategory_id'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'image_id'); ?></td>
                <td>
                    <?php if (isset($model->image->url)) { ?>
                        <div class="col-lg-6">
                            <a href="javascript:;" class="thumbnail">
                                <img src="<?= $model->image->url ?>"/>
                            </a>
                        </div>
                        <?= CHtml::link('<i class="fa fa-times"></i>', array('image', 'id' => $model->image_id)); ?>
                    <?php } else { ?>
                        <input type="file" name="image" class="form-control"/>
                    <?php } ?>
                </td>
            </tr>
        </table>
        <p class="text-center">
            <?= CHtml::submitButton('Сохранить', array('class' => 'btn btn-default text-center')); ?>
        </p>
        <?php $this->endWidget(); ?>
    </div>
</div>