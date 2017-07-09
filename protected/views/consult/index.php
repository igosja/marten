<?php
/**
 * @var $a_consult array
 * @var $o_page PageAbout
 */
?>
<section class="content">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="b-title"><?= $o_page['h1_' . Yii::app()->language]; ?></h1>
        <?= $o_page['text_1_' . Yii::app()->language]; ?>
        <div class="divider"></div>
        <ol>
            <?php foreach ($a_consult as $item) { ?>
                <li>
                    <strong><?= $item['name_' . Yii::app()->language]; ?></strong>
                    <?= $item['text_' . Yii::app()->language]; ?>
                </li>
            <?php } ?>
        </ol>
        <div class="divider"></div>
        <?= $o_page['text_2_' . Yii::app()->language]; ?>
    </div>
</section>