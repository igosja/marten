<?php
/**
 * @var $a_category array
 * @var $o_category Category
 */
?>
<section class="content">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="b-title"><?= $o_category['h1_' . Yii::app()->language]; ?></h1>
        <div class="cat clearfix">
            <?php foreach ($a_category as $item) { ?>
            <?= CHtml::link(
                    '<img src="' . ImageIgosja::resize($item['image_id'], 608, 608). '" alt="">
                <span class="cat__i__text">'.$item['h1_' . Yii::app()->language].'</span>',
                    array('view', 'id' => $item['url']),
                    array('class' => 'cat__i')
            )?>
        </div>



    </div>

    <div class="main-b__info">
        <div class="wrap clearfix">
            <h2 class="b-title">Последние отзывы</h2>
            <div class="clearfix">
                <div class="otziv-i">
                    <div class="otziv-i__info clearfix">
                        <div class="otziv-i__img">
                            <img src="img/trash/kotel-sm.png" alt="">
                        </div>
                        <div class="otziv-i__cont">
                            <div class="otziv-i__name">Виктор</div>
                            <div class="otziv-i__stars">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span class="none"></span>
                            </div>
                            <a href="" class="otziv-i__link">Котел 1 с плитой 120 КВТ</a>
                        </div>
                    </div>
                    <div class="otziv-i__date">
                        20.01.16 12:07
                    </div>
                    <div class="art__i__text">
                        Мне котел очень понравился у него нет никаких особых дизайнерских решений, но все функции выполняет и цена, как для твердотопливного, низкая. Кпд у Gorenje ECO HEAT UNI 4 CI всего скалируется от 67-77%, но я бы сказал, что топливо потребляет умеренно и при это выдает высокую температуру всех помещениях.<br />
                        ... <a href="">Читать весь отзыв</a>
                    </div>
                </div>

                <div class="otziv-i">
                    <div class="otziv-i__info clearfix">
                        <div class="otziv-i__img">
                            <img src="img/trash/kotel-sm.png" alt="">
                        </div>
                        <div class="otziv-i__cont">
                            <div class="otziv-i__name">Руслан</div>
                            <div class="otziv-i__stars">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <a href="" class="otziv-i__link">Котел твердотопливный Atmos DC75SE (пиролизный)</a>
                        </div>
                    </div>
                    <div class="otziv-i__date">
                        20.01.16 12:07
                    </div>
                    <div class="art__i__text">
                        Котел твердотопливный VIADRUS U22 C 2 я купил пару лет назад, установил только прошлым летом в доме. После этого у нас теперь всегда комфортные условия дома – горячая вода и отопление тогда, когда я этого пожелаю. Очень большой плюс в том, что можно использовать два вида топливо – твердые и жидкие, так<br />
                        ... <a href="">Читать весь отзыв</a>
                    </div>
                </div>

                <div class="otziv-i">
                    <div class="otziv-i__info clearfix">
                        <div class="otziv-i__img">
                            <img src="img/trash/kotel-sm.png" alt="">
                        </div>
                        <div class="otziv-i__cont">
                            <div class="otziv-i__name">Андрей</div>
                            <div class="otziv-i__stars">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span class="none"></span>
                                <span class="none"></span>
                            </div>
                            <a href="" class="otziv-i__link">Котел твердотопливный Макситерм LUX 15</a>
                        </div>
                    </div>
                    <div class="otziv-i__date">
                        20.01.16 12:07
                    </div>
                    <div class="art__i__text">
                        Современный котел VIADRUS U22 C 2 - полностью заменил старую печь в доме. Конечно с установкой такого котла пришлось немного повозиться, в силу его больших габаритов и огромного просто таки веса. Но после установки остается лишь радоваться его хорошей и качественной работе у меня в доме<br />
                        ... <a href="">Читать весь отзыв</a>
                    </div>
                </div>

                <div class="otziv-i">
                    <div class="otziv-i__info clearfix">
                        <div class="otziv-i__img">
                            <img src="img/trash/kotel-sm.png" alt="">
                        </div>
                        <div class="otziv-i__cont">
                            <div class="otziv-i__name">Виктор</div>
                            <div class="otziv-i__stars">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span class="none"></span>
                            </div>
                            <a href="" class="otziv-i__link">Котел 1 с плитой 120 КВТ</a>
                        </div>
                    </div>
                    <div class="otziv-i__date">
                        20.01.16 12:07
                    </div>
                    <div class="art__i__text">
                        Мне котел очень понравился у него нет никаких особых дизайнерских решений, но все функции выполняет и цена, как для твердотопливного, низкая. Кпд у Gorenje ECO HEAT UNI 4 CI всего скалируется от 67-77%, но я бы сказал, что топливо потребляет умеренно и при это выдает высокую температуру всех помещениях.<br />
                        ... <a href="">Читать весь отзыв</a>
                    </div>
                </div>

                <div class="otziv-i">
                    <div class="otziv-i__info clearfix">
                        <div class="otziv-i__img">
                            <img src="img/trash/kotel-sm.png" alt="">
                        </div>
                        <div class="otziv-i__cont">
                            <div class="otziv-i__name">Руслан</div>
                            <div class="otziv-i__stars">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <a href="" class="otziv-i__link">Котел твердотопливный Atmos DC75SE (пиролизный)</a>
                        </div>
                    </div>
                    <div class="otziv-i__date">
                        20.01.16 12:07
                    </div>
                    <div class="art__i__text">
                        Котел твердотопливный VIADRUS U22 C 2 я купил пару лет назад, установил только прошлым летом в доме. После этого у нас теперь всегда комфортные условия дома – горячая вода и отопление тогда, когда я этого пожелаю. Очень большой плюс в том, что можно использовать два вида топливо – твердые и жидкие, так<br />
                        ... <a href="">Читать весь отзыв</a>
                    </div>
                </div>

                <div class="otziv-i">
                    <div class="otziv-i__info clearfix">
                        <div class="otziv-i__img">
                            <img src="img/trash/kotel-sm.png" alt="">
                        </div>
                        <div class="otziv-i__cont">
                            <div class="otziv-i__name">Андрей</div>
                            <div class="otziv-i__stars">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span class="none"></span>
                                <span class="none"></span>
                            </div>
                            <a href="" class="otziv-i__link">Котел твердотопливный Макситерм LUX 15</a>
                        </div>
                    </div>
                    <div class="otziv-i__date">
                        20.01.16 12:07
                    </div>
                    <div class="art__i__text">
                        Современный котел VIADRUS U22 C 2 - полностью заменил старую печь в доме. Конечно с установкой такого котла пришлось немного повозиться, в силу его больших габаритов и огромного просто таки веса. Но после установки остается лишь радоваться его хорошей и качественной работе у меня в доме<br />
                        ... <a href="">Читать весь отзыв</a>
                    </div>
                </div>
            </div>

            <a href="" class="art-more">Загрузить еще</a>

        </div>
    </div>


    <div class="grey-bg main-b__text grey-bg_in">
        <div class="wrap">
            <?= $o_category['text_' . Yii::app()->language]; ?>
        </div>
    </div>
</section>