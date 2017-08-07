<?php
/**
 * @var $image ProductImage
 * @var $model ProductSimple
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
    'name',
    'sku',
    'power',
    'price',
    'text_ru',
    'text_uk',
    array(
        'name' => 'characteristic_ru',
        'type' => 'raw',
    ),
    array(
        'name' => 'size_ru',
        'type' => 'raw',
    ),
    array(
        'name' => 'characteristic_uk',
        'type' => 'raw',
    ),
    array(
        'name' => 'size_uk',
        'type' => 'raw',
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

<div class="col-lg-12">
    <h1 class="page-header text-center">Изображения</h1>
    <?php
    $columns = array(
        array(
            'header' => 'Изображение',
            'type' => 'raw',
            'value' => function ($image) {
                if (isset($image->image->url)) {
                    $result = '<div class="col-lg-6"><a href="javascript:;" class="thumbnail"><img src="'
                        . $image->image->url
                        . '"/></a></div>';
                } else {
                    $result = '';
                }
                return $result;
            }
        ),
        array(
            'class' => 'CButtonColumn',
            'deleteButtonUrl' => function ($image) {
                return array('deleteimage', 'id' => $image->primaryKey);
            },
            'headerHtmlOptions' => array('class' => 'col-lg-1'),
            'template' => '{delete}',
        ),
    );
    $this->widget('zii.widgets.grid.CGridView', array(
        'afterAjaxUpdate' => 'function(id, data){CGridViewAfterAjax()}',
        'columns' => $columns,
        'dataProvider' => $image->search(),
        'itemsCssClass' => 'table table-striped table-bordered sort-table',
        'pager' => array(
            'header' => '',
            'footer' => '',
            'internalPageCssClass' => '',
            'nextPageLabel' => '>',
            'lastPageLabel' => '>>',
            'nextPageCssClass' => 'next',
            'lastPageCssClass' => 'next',
            'prevPageLabel' => '<',
            'firstPageLabel' => '<<',
            'previousPageCssClass' => 'prev',
            'firstPageCssClass' => 'prev',
            'selectedPageCssClass' => 'active',
            'htmlOptions' => array('class' => 'pagination'),
        ),
        'pagerCssClass' => 'pager-css-class',
        'summaryCssClass' => 'text-left',
    ));
    ?>
</div>