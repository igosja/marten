<?php
/**
 * @var $a_project array
 * @var $a_projectcategory array
 * @var $more boolean
 * @var $o_page PageProject
 * @var $offset integer
 * @var $page integer
 * @var $page_first integer
 * @var $page_last integer
 * @var $page_next integer
 * @var $page_prev integer
 */
?>
<section class="content">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="b-title"><?= $o_page['h1_' . Yii::app()->language]; ?></h1>
        <div class="projects-menu">
            <?php if (Yii::app()->request->getQuery('id')) { ?>
                <?= CHtml::link(
                    Yii::t('views.project.index', 'link-all'),
                    array('index')
                ); ?>
            <?php } else { ?>
                <span><?= Yii::t('views.project.index', 'link-all'); ?></span>
            <?php } ?>
            <?php foreach ($a_projectcategory as $item) { ?>
                <?php if ($item['url'] == Yii::app()->request->getQuery('id')) { ?>
                    <span><?= $item['name_' . Yii::app()->language]; ?></span>
                <?php } else { ?>
                    <?= CHtml::link(
                        $item['name_' . Yii::app()->language],
                        array('index', 'id' => $item['url'])
                    ); ?>
                <?php } ?>
            <?php } ?>
        </div>
        <div class="projects clearfix">
            <?php foreach ($a_project as $item) { ?>
                <?= $this->renderPartial('item', array('item' => $item)); ?>
            <?php } ?>
        </div>
        <?php if ($more) { ?>
            <a href="javascript:" class="project-more" data-offset="<?= $offset; ?>" data-id="<?= Yii::app()->request->getQuery('id'); ?>">
                <?= Yii::t('views.project.index', 'link-more'); ?>
            </a>
        <?php } ?>
        <div class="pager clearfix">
            <?php if ($page_prev) { ?>
                <?= CHtml::link('', array('index', 'page' => $page_prev), array('class' => 'pager__prev')); ?>
            <?php } ?>
            <?php for ($i = $page_first; $i <= $page_last; $i++) { ?>
                <?php if ($page == $i) { ?>
                    <span><?= $i; ?></span>
                <?php } else { ?>
                    <?= CHtml::link($i, array('index', 'page' => $i)); ?>
                <?php } ?>
            <?php } ?>
            <?php if ($page_next) { ?>
                <?= CHtml::link('', array('index', 'page' => $page_next), array('class' => 'pager__next')); ?>
            <?php } ?>
        </div>
    </div>
    <div class="grey-bg main-b__text grey-bg_in">
        <div class="wrap">
            <?= $o_page['text_' . Yii::app()->language]; ?>
        </div>
    </div>
</section>