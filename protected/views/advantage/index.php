<?php
/**
 * @var $a_advantage array
 * @var $o_page PageAbout
 */
?>
<section class="content">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="b-title"><?= $o_page['h1_' . Yii::app()->language]; ?></h1>
        <?= $o_page['text_' . Yii::app()->language]; ?>
        <div class="divider"></div>
        <div class="clearfix adv-list">
            <div class="clearfix">
                <?php for ($i = 0, $count_advantage = count($a_advantage); $i < $count_advantage; $i++) { ?>
                    <div class="adv-list__item">
                        <div class="adv-list__item__nmb">
                            <?= $i + 1; ?>
                        </div>
                        <h3 class="adv-list__item__title">
                            <?= $a_advantage[$i]['name_' . Yii::app()->language]; ?>
                        </h3>
                        <p class="adv-list__item__text">
                            <?= $a_advantage[$i]['text_' . Yii::app()->language]; ?>
                        </p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>