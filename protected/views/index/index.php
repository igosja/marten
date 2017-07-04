<?php
/**
 * @var $a_slide array
 */
?>
<section class="content">
    <div class="main-slider" id="slider">
        <?php foreach ($a_slide as $item) { ?>
            <div class="item">
                <?php if (isset($item->image->url)) { ?>
                <img src="<?= $item->image->url; ?>" alt="">
                <?php } ?>
                <div class="main-slider__text">
                    Твердотоплевные котлы<br/>
                    <span style="color:#ffcf29">от производителя</span>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="main-b__about">
        <div class="wrap">
            <h1 class="b-title">О компании «Мартен»</h1>
            <p><strong>Наша компания — Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong><br/>
                Твердотопливный котел длительного горения Marten станет незаменимым помощником в создании и сбережении
                тепла Вашего дома. Он идеально подойдет для жилого дома площадью до 980 квадратных метров и не нуждается
                в постоянном присмотре до 24 часов. Установка твердотопливного котла в Вашем доме - это
                экономически-аргументированная идеальная альтернатива электрического и газового котла, так как топливом
                может быть, как древесина так и уголь, щепа, антрацит, топливные брикеты и т. д.</p>
            <p>Важно знать: Стоимость древесины, как топливного сырья местного происхождения, является недорогой и не
                подвержена серьезным колебаниям.</p>
            <iframe src="https://www.youtube.com/embed/xwIDkDw9A74" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <div class="main-b__btns">
        <div class="wrap clearfix">
            <a href="javascript:" class="main-b__btns__btn clearfix"><span></span>Преимущества<br/> работы с
                нами</a>
            <a href="javascript:" class="main-b__btns__btn clearfix"><span></span>Бесплатная<br/>
                консультация</a>
            <a href="javascript:" class="main-b__btns__btn clearfix"><span></span>Почему<br/> «Мартен»?</a>
        </div>
    </div>
    <div class="main-b__proj">
        <div class="wrap clearfix">
            <h2 class="b-title">Реализованные проекты</h2>
            <div class="proj-b clearfix">
                <a href="javascript:" class="proj-b__i">
                    <img src="img/project/project-1.jpg" alt="">
                    <span class="proj-b__i__info"><span><small>#</small>Бытовые котлы</span></span>
                </a>
                <a href="javascript:" class="proj-b__i">
                    <img src="img/project/project-2.jpg" alt="">
                    <span class="proj-b__i__info"><span><small>#</small>Модульная котельня</span></span>
                </a>
                <a href="javascript:" class="proj-b__i">
                    <img src="img/project/project-3.jpg" alt="">
                    <span class="proj-b__i__info"><span><small>#</small>Промы</span></span>
                </a>
            </div>
        </div>
    </div>
    <div class="main-b__info">
        <div class="wrap clearfix">
            <h2 class="b-title">Полезная информация</h2>
            <div class="art clearfix">
                <div class="art__i">
                    <a href="javascript:" class="art__i__img">
                        <img src="img/art/img-1.jpg" alt="">
                    </a>
                    <div class="art__i__date">
                        25.05.2017
                    </div>
                    <a href="javascript:" class="art__i__title">Тверде паливо та процес його спалювання</a>

                    <div class="art__i__text">
                        Викопне тверде паливо (вугілля, сланці, торф) відноситься до невідновлюваних (вичерпних) видів
                        енергетичних ресурсів (джерел енергії), всі інші види твердого палива — до відновлюваних
                        (поновлюваних за короткий проміжок часу).
                    </div>
                </div>
                <div class="art__i">
                    <a href="javascript:" class="art__i__img">
                        <img src="img/art/img-2.jpg" alt="">
                    </a>
                    <div class="art__i__date">
                        25.05.2017
                    </div>
                    <a href="javascript:" class="art__i__title">Особливості вибору системи опалення для будинку</a>
                    <div class="art__i__text">
                        Зазвичай будинки такої площі не мають спеціальних приміщень для котла, тому, розміщуючи котел,
                        потрібно економно використовувати і без того невелику житлову площу.
                    </div>
                </div>
                <div class="art__i">
                    <a href="javascript:" class="art__i__img art__i__video">
                        <img src="img/art/img-3.jpg" alt="">
                    </a>
                    <div class="art__i__date">
                        25.05.2017
                    </div>
                    <a href="javascript:" class="art__i__title">Твердопаливні чавунні котли Solid</a>
                    <div class="art__i__text">
                        Чавунний секційний котел, що працює на твердому паливі. Котел заснований на принципі нової
                        запатентованої допоміжної пневмосистеми, яка забезпечує чисте згорання та низький рівень
                        викидів.
                    </div>
                </div>
            </div>
            <div class="centered"><a href="javascript:" class="art__more">Все статьи</a></div>
        </div>
    </div>
    <div class="grey-bg main-b__text">
        <div class="wrap">
            <p>
                <strong>Наша компания</strong> — Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod
                bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales
                pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
            </p>
            <p>
                Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget
                odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin
                gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.
            </p>
            <p>
                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum,
                nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida
                dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis
                natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus
                pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.
            </p>
        </div>
    </div>
</section>
