<?php
/**
 * @var $model Category
 */
?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center"><?= $this->h1; ?></h1>
            <ul class="list-inline preview-links text-center">
                <li>
                    <?= CHtml::link(
                        'Список',
                        array('index'),
                        array('class' => 'btn btn-default')
                    ); ?>
                </li>
                <li>
                    <?= CHtml::link(
                        'Редактировать',
                        array('update', 'id' => $model->id),
                        array('class' => 'btn btn-default')
                    ); ?>
                </li>
            </ul>
        </div>
    </div>
<?php
$attributes = array(
    'id',
    array(
        'name' => 'parent_id',
        'value' => isset($model->category->name_ru) ? $model->category->name_ru : 'Главная',
    ),
    array(
        'name' => 'url',
        'type' => 'raw',
        'value' => CHtml::link($model->url, array('/category/view', 'id' => $model->url), array('target' => '_blank'))
    ),
    array(
        'name' => 'image_id',
        'type' => 'raw',
        'value' => (isset($model->image->url)) ?
            ('<div class="col-lg-6">
                <a href="javascript:;" class="thumbnail">
                    <img src="' . $model->image->url . '"/>
                </a>
            </div>') :
            '',
    ),
    'h1_ru',
    'seo_title_ru',
    'seo_description_ru',
    'seo_keywords_ru',
    'h1_uk',
    'seo_title_uk',
    'seo_description_uk',
    'seo_keywords_uk',
    array(
        'name' => 'status',
        'type' => 'raw',
        'value' => '<input
            class="status"
            data-id="' . $model->id . '"
            data-onstyle="success"
            data-size="mini"
            data-toggle="toggle"
            type="checkbox"
            ' . ($model->status ? 'checked' : '') . '
          />',
    ),
);
$this->widget('zii.widgets.CDetailView', array(
    'attributes' => $attributes,
    'data' => $model,
    'htmlOptions' => array('class' => 'table'),
    'itemCssClass' => '',
    'itemTemplate' => '<tr data-controller="' . $this->uniqueid . '"><td class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">{label}</td><td>{value}</td></tr>',
    'nullDisplay' => '-',
));
?>