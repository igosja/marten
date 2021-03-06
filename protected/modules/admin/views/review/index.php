<?php
/**
 * @var $model News
 */
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header text-center"><?= $this->h1; ?></h1>
    </div>
</div>
<?= $this->renderPartial('/include/grid-view-text'); ?>
<div class="col-lg-12">
    <?php
    $columns = array(
        array(
            'headerHtmlOptions' => array('class' => 'col-lg-1, col-md-1, col-sm-1, col-xs-1'),
            'name' => 'id',
        ),
        'name' => 'name',
        array(
            'name' => 'product_id',
            'value' => function ($model) {
                return $model->product->h1_ru;
            }
        ),
        array(
            'name' => 'date',
            'type' => 'date'
        ),
        array(
            'filter' => false,
            'headerHtmlOptions' => array('class' => 'col-lg-1, col-md-1, col-sm-1, col-xs-1'),
            'name' => 'status',
            'type' => 'raw',
            'value' => function ($model) {
                if (1 == $model->status) {
                    $checked = 'checked';
                } else {
                    $checked = '';
                }
                $input = '<input
                                class="status"
                                data-id="' . $model->id . '"
                                type="checkbox" ' . $checked . '
                                data-toggle="toggle"
                                data-size="mini"
                                data-onstyle="success"
                          />';
                return $input;
            }
        ),
        array(
            'class' => 'CButtonColumn',
            'headerHtmlOptions' => array('class' => 'col-lg-1'),
            'template' => '{view} {delete}',
        ),
    );
    $this->widget('zii.widgets.grid.CGridView', array(
        'afterAjaxUpdate' => 'function(id, data){CGridViewAfterAjax()}',
        'columns' => $columns,
        'dataProvider' => $model->search(),
        'itemsCssClass' => 'table table-striped table-bordered sort-table',
        'htmlOptions' => array('data-controller' => $this->uniqueid),
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
        'rowHtmlOptionsExpression' => 'array("data-id" => $data->id, "data-controller" => "' . $this->uniqueid . '")',
        'summaryCssClass' => 'text-left',
        'summaryText' => '???????????????? ???????????? <strong>{start}</strong>-<strong>{end}</strong> ???? <strong>{count}</strong>.',
    ));
    ?>
</div>