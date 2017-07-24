<?php
/**
 * @var $also ProductAlso
 * @var $image ProductImage
 * @var $model Product
 * @var $simple ProductToSimple
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
                    array('update', 'id' => $model->primaryKey),
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
        'name' => 'url',
        'type' => 'raw',
        'value' => CHtml::link($model->url, array('/product/view', 'id' => $model->url), array('target' => '_blank'))
    ),
    array(
        'name' => 'category_id',
        'value' => $model->category->h1_ru,
    ),
    array(
        'name' => 'producttype_id',
        'value' => $model->producttype->name,
    ),
    array(
        'name' => 'instock',
        'value' => $model->instock ? 'Да' : 'Нет',
    ),
    array(
        'name' => 'video',
        'type' => 'raw',
        'value' => 'https://www.youtube.com/watch?v=<strong>' . $model->video . '</strong>',
    ),
    array(
        'name' => 'size_id',
        'type' => 'raw',
        'value' => (isset($model->size->url)) ?
            ('<div class="col-lg-6">
                <a href="javascript:;" class="thumbnail">
                    <img src="' . $model->size->url . '"/>
                </a>
            </div>') :
            '',
    ),
    array(
        'name' => 'pdf_id',
        'type' => 'raw',
        'value' => (isset($model->pdf->url)) ? ('<a href="' . $model->pdf->url . '" target="_blank">Инструкция</a>') : '',
    ),
    'h1_ru',
    'text_1_ru',
    array(
        'name' => 'description_ru',
        'type' => 'raw',
    ),
    array(
        'name' => 'text_2_ru',
        'type' => 'raw',
    ),
    'seo_title_ru',
    'seo_description_ru',
    'seo_keywords_ru',
    'h1_uk',
    'text_1_uk',
    array(
        'name' => 'description_uk',
        'type' => 'raw',
    ),
    array(
        'name' => 'text_2_uk',
        'type' => 'raw',
    ),
    'seo_title_uk',
    'seo_description_uk',
    'seo_keywords_uk',
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

<div class="col-lg-12">
    <h1 class="page-header text-center">Простые товары</h1>
    <?php
    $columns = array(
        array('header' => 'Название', 'value' => function ($simple) {
            return $simple->simple->name;
        }),
        array('header' => 'Артикул', 'value' => function ($simple) {
            return $simple->simple->sku;
        }),
        array('header' => 'Мощность', 'value' => function ($simple) {
            return $simple->simple->power;
        }),
        array('header' => 'Цена', 'value' => function ($simple) {
            return $simple->simple->price;
        }),
        array(
            'class' => 'CButtonColumn',
            'deleteButtonUrl' => function ($simple) {
                return array('deletesimple', 'id' => $simple->primaryKey);
            },
            'headerHtmlOptions' => array('class' => 'col-lg-1'),
            'template' => '{delete}',
        ),
    );
    $this->widget('zii.widgets.grid.CGridView', array(
        'afterAjaxUpdate' => 'function(id, data){CGridViewAfterAjax()}',
        'columns' => $columns,
        'dataProvider' => $simple->search(),
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

<div class="col-lg-12">
    <h1 class="page-header text-center">Также покупают</h1>
    <?php
    $columns = array(
        array('header' => 'Название', 'value' => function ($also) {
            return $also->product->h1_ru;
        }),
        array(
            'class' => 'CButtonColumn',
            'deleteButtonUrl' => function ($also) {
                return array('deletealso', 'id' => $also->primaryKey);
            },
            'headerHtmlOptions' => array('class' => 'col-lg-1'),
            'template' => '{delete}',
        ),
    );
    $this->widget('zii.widgets.grid.CGridView', array(
        'afterAjaxUpdate' => 'function(id, data){CGridViewAfterAjax()}',
        'columns' => $columns,
        'dataProvider' => $also->search(),
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
