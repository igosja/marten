<?php
/**
 * @var $model Commerce
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
            </ul>
        </div>
    </div>
<?php
$attributes = array(
    'id',
    array(
        'name' => 'date',
        'value' => date('H:i d.m.Y', $model->date),
    ),
    'phone',
    'name',
    'email',
    'product',
    'power',
    array(
        'name' => 'price',
        'value' => number_format($model->price, 0, ',', ' ') . ' грн',
    ),
    'object',
    'gas',
    'electro',
    'warm',
    'kkal',
    'quantity',
    'height',
    'project',
    'pusk',
    'fuel',
    'fuelmethod',
    'weather',
    'smoke',
    'dust',
    'water',
    'net',
    'gsm',
    'bufer',
    'hot',
    'warmcounter',
    'warehouse',
    'size',
    'staff',
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