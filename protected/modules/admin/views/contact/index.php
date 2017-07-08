<?php
/**
 * @var $model PageMain
 */
?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-head text-center"><?= $this->h1; ?></h1>
            <ul class="list-inline preview-links text-center">
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
    'phone_city',
    'phone_umc',
    'phone_kyivstar',
    'phone_life',
    'email',
    'hours_monday',
    'hours_saturday',
    'google_lat',
    'google_lng',
    'company_ru',
    'address_1_ru',
    'address_2_ru',
    'address_head_ru',
    'h1_ru',
    'seo_title_ru',
    'seo_description_ru',
    'seo_keywords_ru',
    'company_ua',
    'address_1_ua',
    'address_2_ua',
    'address_head_ua',
    'h1_ua',
    'seo_title_ua',
    'seo_description_ua',
    'seo_keywords_ua',
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