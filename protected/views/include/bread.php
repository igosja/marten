<?php $this->widget('zii.widgets.CBreadcrumbs', array(
    'activeLinkTemplate' => '<a href="{url}">{label}</a>',
    'inactiveLinkTemplate' => '<span>{label}</span>',
    'homeLink' => CHtml::link(Yii::t('views.include.bread', 'home'), array('index/index')),
    'htmlOptions' => array('class' => 'breadchambs'),
    'links' => $this->breadcrumbs,
    'separator' => '',
    'tagName' => 'div',
)); ?>