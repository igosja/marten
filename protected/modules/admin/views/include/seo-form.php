<?php
/**
 * @var $class string
 * @var $form CActiveForm
 * @var $model CActiveRecord
 */
?>
<div class="tab-pane fade <?= isset($class) ? $class : ''; ?>" id="seo">
    <div class="dataTable_wrapper">
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <td class="col-lg-3"><?php echo $form->labelEx($model, 'seo_title_ru'); ?></td>
                <td>
                    <?php echo $form->textField($model, 'seo_title_ru', array('class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'seo_title_ru'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?php echo $form->labelEx($model, 'seo_description_ru'); ?></td>
                <td>
                    <?php echo $form->textArea($model, 'seo_description_ru', array('class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'seo_description_ru'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?php echo $form->labelEx($model, 'seo_keywords_ru'); ?></td>
                <td>
                    <?php echo $form->textArea($model, 'seo_keywords_ru', array('class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'seo_keywords_ru'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?php echo $form->labelEx($model, 'seo_title_ua'); ?></td>
                <td>
                    <?php echo $form->textField($model, 'seo_title_ua', array('class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'seo_title_ua'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?php echo $form->labelEx($model, 'seo_description_ua'); ?></td>
                <td>
                    <?php echo $form->textArea($model, 'seo_description_ua', array('class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'seo_description_ua'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?php echo $form->labelEx($model, 'seo_keywords_ua'); ?></td>
                <td>
                    <?php echo $form->textArea($model, 'seo_keywords_ua', array('class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'seo_keywords_ua'); ?>
                </td>
            </tr>
        </table>
    </div>
</div>