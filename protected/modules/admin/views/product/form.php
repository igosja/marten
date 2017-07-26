<?php
/**
 * @var $a_also array
 * @var $a_productsimple array
 * @var $a_producttype array
 * @var $form CActiveForm
 * @var $model Category
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
            'id' => 'blog-form',
            'enableAjaxValidation' => false,
            'enableClientValidation' => true,
            'htmlOptions' => array('enctype' => 'multipart/form-data'),
        )); ?>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#main" data-toggle="tab">Общая информация</a></li>
            <li><a href="#seo" data-toggle="tab">SEO</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="main">
                <table class="table table-striped table-bordered table-hover">
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'h1_ru'); ?></td>
                        <td>
                            <?= $form->textField($model, 'h1_ru', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'h1_ru'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'h1_uk'); ?></td>
                        <td>
                            <?= $form->textField($model, 'h1_uk', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'h1_uk'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'url'); ?></td>
                        <td>
                            <?= $form->textField($model, 'url', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'url'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'video'); ?></td>
                        <td>
                            <?= $form->textField($model, 'video', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'video'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'producttype_id'); ?></td>
                        <td>
                            <?= $form->dropDownList(
                                $model,
                                'producttype_id',
                                CHtml::listData($a_producttype, 'id', 'name'),
                                array('empty' => 'Выберите тип', 'class' => 'form-control')
                            ); ?>
                            <?= $form->error($model, 'producttype_id'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'simple'); ?></td>
                        <td>
                            <?= $form->checkBoxList(
                                $model,
                                'simple',
                                CHtml::listData($a_productsimple, 'id', 'name')
                            ); ?>
                            <?= $form->error($model, 'simple'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'also'); ?></td>
                        <td>
                            <?= $form->checkBoxList(
                                $model,
                                'also',
                                CHtml::listData($a_also, 'id', 'h1_ru')
                            ); ?>
                            <?= $form->error($model, 'also'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'instock'); ?></td>
                        <td>
                            <?= $form->dropDownList(
                                $model,
                                'instock',
                                array(1 => 'Да', 0 => 'Нет'),
                                array('class' => 'form-control')
                            ); ?>
                            <?= $form->error($model, 'instock'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'size_id'); ?></td>
                        <td>
                            <?php if (isset($model->size->url)) { ?>
                                <div class="col-lg-6">
                                    <a href="javascript:" class="thumbnail">
                                        <img src="<?= $model->size->url ?>"/>
                                    </a>
                                </div>
                                <?= CHtml::link('<i class="fa fa-times"></i>', array('image', 'id' => $model->size_id)); ?>
                            <?php } else { ?>
                                <input type="file" name="size" class="form-control"/>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'pdf_id'); ?></td>
                        <td>
                            <?php if (isset($model->pdf->url)) { ?>
                                <a href="<?= $model->pdf->url ?>">
                                    Инструкция
                                </a>
                                <?= CHtml::link('<i class="fa fa-times"></i>', array('image', 'id' => $model->pdf_id)); ?>
                            <?php } else { ?>
                                <input type="file" name="pdf" class="form-control"/>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'description_ru'); ?></td>
                        <td>
                            <?= $form->textArea($model, 'description_ru', array('class' => 'ckeditor')); ?>
                            <?= $form->error($model, 'description_ru'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'description_uk'); ?></td>
                        <td>
                            <?= $form->textArea($model, 'description_uk', array('class' => 'ckeditor')); ?>
                            <?= $form->error($model, 'description_uk'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'text_1_ru'); ?></td>
                        <td>
                            <?= $form->textArea($model, 'text_1_ru', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'text_1_ru'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'text_1_uk'); ?></td>
                        <td>
                            <?= $form->textArea($model, 'text_1_uk', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'text_1_uk'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'text_2_ru'); ?></td>
                        <td>
                            <?= $form->textArea($model, 'text_2_ru', array('class' => 'ckeditor')); ?>
                            <?= $form->error($model, 'text_2_ru'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'text_2_uk'); ?></td>
                        <td>
                            <?= $form->textArea($model, 'text_2_uk', array('class' => 'ckeditor')); ?>
                            <?= $form->error($model, 'text_2_uk'); ?>
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