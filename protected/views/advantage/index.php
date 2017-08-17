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
            <?php for ($i = 0, $count_advantage = count($a_advantage); $i < $count_advantage; $i++) { ?>
                <?php if (0 == $i % 2) { ?>
                    <div class="clearfix">
                <?php } ?>
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
                <?php if (1 == $i % 2 || $i+1 = $count_advantage) { ?>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>