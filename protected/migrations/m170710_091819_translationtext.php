<?php

class m170710_091819_translationtext extends CDbMigration
{
    public function up()
    {
        $this->insertMultiple('i18n_source_messages', array(
            array('category' => 'models.Feedback', 'message' => 'label-email'),
            array('category' => 'models.Feedback', 'message' => 'label-name'),
            array('category' => 'models.Feedback', 'message' => 'label-text'),
            array('category' => 'models.CallMe', 'message' => 'label-name'),
            array('category' => 'models.CallMe', 'message' => 'label-phone'),
            array('category' => 'models.CallMe', 'message' => 'label-text'),
            array('category' => 'views.contact.index', 'message' => 'address'),
            array('category' => 'views.contact.index', 'message' => 'phone'),
            array('category' => 'views.contact.index', 'message' => 'email'),
            array('category' => 'views.contact.index', 'message' => 'site'),
            array('category' => 'views.contact.index', 'message' => 'form-h2'),
            array('category' => 'views.contact.index', 'message' => 'label-name'),
            array('category' => 'views.contact.index', 'message' => 'label-email'),
            array('category' => 'views.contact.index', 'message' => 'label-text'),
            array('category' => 'views.contact.index', 'message' => 'button-submit'),
            array('category' => 'views.contact.index', 'message' => 'required'),
            array('category' => 'views.news.item', 'message' => 'link-detail'),
            array('category' => 'views.news.index', 'message' => 'link-more'),
            array('category' => 'views.video.main', 'message' => 'link-more'),
            array('category' => 'views.project.index', 'message' => 'link-all'),
            array('category' => 'views.project.index', 'message' => 'link-more'),
            array('category' => 'views.layouts.main', 'message' => 'header-link-about-us'),
            array('category' => 'views.layouts.main', 'message' => 'header-link-news'),
            array('category' => 'views.layouts.main', 'message' => 'header-link-video'),
            array('category' => 'views.layouts.main', 'message' => 'header-link-review'),
            array('category' => 'views.layouts.main', 'message' => 'header-link-payment'),
            array('category' => 'views.layouts.main', 'message' => 'header-link-guarantee'),
            array('category' => 'views.layouts.main', 'message' => 'header-link-contact'),
            array('category' => 'views.layouts.main', 'message' => 'monday'),
            array('category' => 'views.layouts.main', 'message' => 'saturday'),
            array('category' => 'views.layouts.main', 'message' => 'call-me'),
            array('category' => 'views.layouts.main', 'message' => 'footer-who-we-are'),
            array('category' => 'views.layouts.main', 'message' => 'footer-link-about-us'),
            array('category' => 'views.layouts.main', 'message' => 'footer-link-project'),
            array('category' => 'views.layouts.main', 'message' => 'footer-link-news'),
            array('category' => 'views.layouts.main', 'message' => 'footer-link-video'),
            array('category' => 'views.layouts.main', 'message' => 'footer-link-review'),
            array('category' => 'views.layouts.main', 'message' => 'footer-link-contact'),
            array('category' => 'views.layouts.main', 'message' => 'footer-production'),
            array('category' => 'views.layouts.main', 'message' => 'footer-services'),
            array('category' => 'views.layouts.main', 'message' => 'footer-link-payment'),
            array('category' => 'views.layouts.main', 'message' => 'footer-link-guarantee'),
            array('category' => 'views.layouts.main', 'message' => 'footer-link-credit'),
            array('category' => 'views.layouts.main', 'message' => 'footer-link-dealer'),
            array('category' => 'views.layouts.main', 'message' => 'footer-contacts'),
            array('category' => 'views.layouts.main', 'message' => 'rights-reserved'),
            array('category' => 'views.layouts.main', 'message' => 'site-creation'),
            array('category' => 'views.layouts.main', 'message' => 'form-call-me'),
            array('category' => 'views.layouts.main', 'message' => 'form-info'),
            array('category' => 'views.layouts.main', 'message' => 'button-submit'),
            array('category' => 'views.layouts.main', 'message' => 'form-required'),
            array('category' => 'views.layout.index', 'message' => 'form-call-me-label-name'),
            array('category' => 'views.layout.index', 'message' => 'form-call-me-label-phone'),
            array('category' => 'views.about.index', 'message' => 'achievement'),
            array('category' => 'views.about.index', 'message' => 'photo-with-us'),
            array('category' => 'views.index.index', 'message' => 'slider-1'),
            array('category' => 'views.index.index', 'message' => 'slider-2'),
            array('category' => 'views.index.index', 'message' => 'link-advantage'),
            array('category' => 'views.index.index', 'message' => 'link-consult'),
            array('category' => 'views.index.index', 'message' => 'link-why'),
            array('category' => 'views.index.index', 'message' => 'project'),
            array('category' => 'views.index.index', 'message' => 'info'),
            array('category' => 'views.index.index', 'message' => 'link-all'),
            array('category' => 'views.include.bread', 'message' => 'home'),
            array('category' => 'models.Order', 'message' => 'label-email'),
            array('category' => 'models.Order', 'message' => 'label-name'),
            array('category' => 'models.Order', 'message' => 'label-phone'),
            array('category' => 'models.Order', 'message' => 'label-text'),
            array('category' => 'views.category.category', 'message' => 'review'),
            array('category' => 'views.category.category', 'message' => 'link-more'),
            array('category' => 'views.category.product', 'message' => 'price'),
            array('category' => 'views.category.product', 'message' => 'from'),
            array('category' => 'views.category.product', 'message' => 'review'),
            array('category' => 'views.category.product', 'message' => 'link-more'),
            array('category' => 'views.product.view', 'message' => 'sku'),
            array('category' => 'views.product.view', 'message' => 'power'),
            array('category' => 'views.product.view', 'message' => 'price'),
            array('category' => 'views.product.view', 'message' => 'instock'),
            array('category' => 'views.product.view', 'message' => 'delivery'),
            array('category' => 'views.product.view', 'message' => 'guarantee'),
            array('category' => 'views.product.view', 'message' => 'exchange'),
            array('category' => 'views.product.view', 'message' => 'install'),
            array('category' => 'views.product.view', 'message' => 'tab-description'),
            array('category' => 'views.product.view', 'message' => 'tab-characteristic'),
            array('category' => 'views.product.view', 'message' => 'tab-size'),
            array('category' => 'views.product.view', 'message' => 'tab-review'),
            array('category' => 'views.product.view', 'message' => 'tab-pdf'),
            array('category' => 'views.product.view', 'message' => 'link-more'),
            array('category' => 'views.product.view', 'message' => 'add-review'),
            array('category' => 'views.product.view', 'message' => 'label-name'),
            array('category' => 'views.product.view', 'message' => 'label-email'),
            array('category' => 'views.product.view', 'message' => 'label-text'),
            array('category' => 'views.product.view', 'message' => 'button-submit'),
            array('category' => 'views.product.view', 'message' => 'form-required'),
            array('category' => 'views.product.view', 'message' => 'also'),
            array('category' => 'views.product.view', 'message' => 'from'),
            array('category' => 'views.layouts.main', 'message' => 'form-order'),
            array('category' => 'views.layout.index', 'message' => 'form-order-label-name'),
            array('category' => 'views.layout.index', 'message' => 'form-order-label-phone'),
            array('category' => 'views.layout.index', 'message' => 'form-order-label-email'),
            array('category' => 'views.review.index', 'message' => 'link-more'),
            array('category' => 'views.product.view', 'message' => 'diameter'),

        ));

        $this->insertMultiple('i18n_translated_messages', array(
            array('id' => 1, 'language' => 'ru', 'translation' => 'Email'),
            array('id' => 1, 'language' => 'uk', 'translation' => 'Email'),
            array('id' => 2, 'language' => 'ru', 'translation' => 'Имя'),
            array('id' => 2, 'language' => 'uk', 'translation' => 'Ім\'я'),
            array('id' => 3, 'language' => 'ru', 'translation' => 'Сообщение'),
            array('id' => 3, 'language' => 'uk', 'translation' => 'Повідомлення'),
            array('id' => 4, 'language' => 'ru', 'translation' => 'Имя'),
            array('id' => 4, 'language' => 'uk', 'translation' => 'Ім\'я'),
            array('id' => 5, 'language' => 'ru', 'translation' => 'Телефон'),
            array('id' => 5, 'language' => 'uk', 'translation' => 'Телефон'),
            array('id' => 6, 'language' => 'ru', 'translation' => 'Сообщение'),
            array('id' => 6, 'language' => 'uk', 'translation' => 'Повідомлення'),
            array('id' => 7, 'language' => 'ru', 'translation' => 'Адрес:'),
            array('id' => 7, 'language' => 'uk', 'translation' => 'Адреса:'),
            array('id' => 8, 'language' => 'ru', 'translation' => 'Тел.:'),
            array('id' => 8, 'language' => 'uk', 'translation' => 'Тел.:'),
            array('id' => 9, 'language' => 'ru', 'translation' => 'E-mail:'),
            array('id' => 9, 'language' => 'uk', 'translation' => 'E-mail:'),
            array('id' => 10, 'language' => 'ru', 'translation' => 'Сайт:'),
            array('id' => 10, 'language' => 'uk', 'translation' => 'Сайт:'),
            array('id' => 11, 'language' => 'ru', 'translation' => 'Обратная связь'),
            array('id' => 11, 'language' => 'uk', 'translation' => 'Зворотній зв\'язок'),
            array('id' => 12, 'language' => 'ru', 'translation' => 'ВАШЕ ИМЯ:'),
            array('id' => 12, 'language' => 'uk', 'translation' => 'ВАШЕ ІМ\'Я:'),
            array('id' => 13, 'language' => 'ru', 'translation' => 'E-MAIL:'),
            array('id' => 13, 'language' => 'uk', 'translation' => 'E-MAIL:'),
            array('id' => 14, 'language' => 'ru', 'translation' => 'ВАШЕ СООБЩЕНИЕ:'),
            array('id' => 14, 'language' => 'uk', 'translation' => 'ВАШЕ ПОВІДОМЛЕННЯ:'),
            array('id' => 15, 'language' => 'ru', 'translation' => 'Отправить'),
            array('id' => 15, 'language' => 'uk', 'translation' => 'Надіслати'),
            array('id' => 16, 'language' => 'ru', 'translation' => '— поля обязательные для заполнения'),
            array('id' => 16, 'language' => 'uk', 'translation' => '— поля обов\'язкові для заповнення'),
            array('id' => 17, 'language' => 'ru', 'translation' => 'Подробнее'),
            array('id' => 17, 'language' => 'uk', 'translation' => 'Детальніше'),
            array('id' => 18, 'language' => 'ru', 'translation' => 'ЗАГРУЗИТЬ ЕЩЕ'),
            array('id' => 18, 'language' => 'uk', 'translation' => 'ЗАВАНТАЖИТИ ЩЕ'),
            array('id' => 19, 'language' => 'ru', 'translation' => 'ЕЩЕ ВИДЕО'),
            array('id' => 19, 'language' => 'uk', 'translation' => 'ЩЕ ВІДЕО'),
            array('id' => 20, 'language' => 'ru', 'translation' => 'Все проекты'),
            array('id' => 20, 'language' => 'uk', 'translation' => 'Всі проекти'),
            array('id' => 21, 'language' => 'ru', 'translation' => 'ЗАГРУЗИТЬ ЕЩЕ'),
            array('id' => 21, 'language' => 'uk', 'translation' => 'ЗАВАНТАЖИТИ ЩЕ'),
            array('id' => 22, 'language' => 'ru', 'translation' => 'О компании'),
            array('id' => 22, 'language' => 'uk', 'translation' => 'Про компанію'),
            array('id' => 23, 'language' => 'ru', 'translation' => 'Статьи'),
            array('id' => 23, 'language' => 'uk', 'translation' => 'Статті'),
            array('id' => 24, 'language' => 'ru', 'translation' => 'Видео'),
            array('id' => 24, 'language' => 'uk', 'translation' => 'Відео'),
            array('id' => 25, 'language' => 'ru', 'translation' => 'Отзывы'),
            array('id' => 25, 'language' => 'uk', 'translation' => 'Відгуки'),
            array('id' => 26, 'language' => 'ru', 'translation' => 'Оплата и доставка'),
            array('id' => 26, 'language' => 'uk', 'translation' => 'Оплата та доставка'),
            array('id' => 27, 'language' => 'ru', 'translation' => 'Гарантии'),
            array('id' => 27, 'language' => 'uk', 'translation' => 'Гарантії'),
            array('id' => 28, 'language' => 'ru', 'translation' => 'Контакты'),
            array('id' => 28, 'language' => 'uk', 'translation' => 'Контакти'),
            array('id' => 29, 'language' => 'ru', 'translation' => 'пн-пт'),
            array('id' => 29, 'language' => 'uk', 'translation' => 'пн-пт'),
            array('id' => 30, 'language' => 'ru', 'translation' => 'сб-вс'),
            array('id' => 30, 'language' => 'uk', 'translation' => 'сб-нд'),
            array('id' => 31, 'language' => 'ru', 'translation' => 'Заказать звонок'),
            array('id' => 31, 'language' => 'uk', 'translation' => 'Замовити дзвінок'),
            array('id' => 32, 'language' => 'ru', 'translation' => 'КТО МЫ?'),
            array('id' => 32, 'language' => 'uk', 'translation' => 'ХТО МИ?'),
            array('id' => 33, 'language' => 'ru', 'translation' => 'О компании'),
            array('id' => 33, 'language' => 'uk', 'translation' => 'Про компанію'),
            array('id' => 34, 'language' => 'ru', 'translation' => 'Реализованные проекты'),
            array('id' => 34, 'language' => 'uk', 'translation' => 'Реалізовані проекти'),
            array('id' => 35, 'language' => 'ru', 'translation' => 'Статьи'),
            array('id' => 35, 'language' => 'uk', 'translation' => 'Статті'),
            array('id' => 36, 'language' => 'ru', 'translation' => 'Видео'),
            array('id' => 36, 'language' => 'uk', 'translation' => 'Відео'),
            array('id' => 37, 'language' => 'ru', 'translation' => 'Отзывы'),
            array('id' => 37, 'language' => 'uk', 'translation' => 'Відгуки'),
            array('id' => 38, 'language' => 'ru', 'translation' => 'Контакты'),
            array('id' => 38, 'language' => 'uk', 'translation' => 'Контакти'),
            array('id' => 39, 'language' => 'ru', 'translation' => 'ПРОДУКЦИЯ'),
            array('id' => 39, 'language' => 'uk', 'translation' => 'ПРОДУКЦІЯ'),
            array('id' => 40, 'language' => 'ru', 'translation' => 'УСЛУГИ'),
            array('id' => 40, 'language' => 'uk', 'translation' => 'ПОСЛУГИ'),
            array('id' => 41, 'language' => 'ru', 'translation' => 'Оплата и доставка'),
            array('id' => 41, 'language' => 'uk', 'translation' => 'Оплата та доставка'),
            array('id' => 42, 'language' => 'ru', 'translation' => 'Гарантии'),
            array('id' => 42, 'language' => 'uk', 'translation' => 'Гарантії'),
            array('id' => 43, 'language' => 'ru', 'translation' => 'Котлы в кредит'),
            array('id' => 43, 'language' => 'uk', 'translation' => 'Котли в кредит'),
            array('id' => 44, 'language' => 'ru', 'translation' => 'Дилерам'),
            array('id' => 44, 'language' => 'uk', 'translation' => 'Дилерам'),
            array('id' => 45, 'language' => 'ru', 'translation' => 'КОНТАКТЫ'),
            array('id' => 45, 'language' => 'uk', 'translation' => 'КОНТАКТИ'),
            array('id' => 46, 'language' => 'ru', 'translation' => 'Все права защищены'),
            array('id' => 46, 'language' => 'uk', 'translation' => 'Всі права захищені'),
            array('id' => 47, 'language' => 'ru', 'translation' => 'Создание сайтов'),
            array('id' => 47, 'language' => 'uk', 'translation' => 'Створення сайтів'),
            array('id' => 48, 'language' => 'ru', 'translation' => 'ЗАКАЗАТЬ ЗВОНОК'),
            array('id' => 48, 'language' => 'uk', 'translation' => 'ЗАМОВИТИ ДЗВІНОК'),
            array('id' => 49, 'language' => 'ru', 'translation' => 'Дополнительная информация:'),
            array('id' => 49, 'language' => 'uk', 'translation' => 'Додаткова інформація:'),
            array('id' => 50, 'language' => 'ru', 'translation' => 'Заказ подтверждаю'),
            array('id' => 50, 'language' => 'uk', 'translation' => 'Замовлення підтверджую'),
            array('id' => 51, 'language' => 'ru', 'translation' => '— поля обязательные для заполнения'),
            array('id' => 51, 'language' => 'uk', 'translation' => '— поля обов\'язкові для заповнення'),
            array('id' => 52, 'language' => 'ru', 'translation' => 'ВАШЕ ИМЯ:'),
            array('id' => 52, 'language' => 'uk', 'translation' => 'ВАШЕ ІМ\'Я:'),
            array('id' => 53, 'language' => 'ru', 'translation' => 'ТЕЛЕФОН:'),
            array('id' => 53, 'language' => 'uk', 'translation' => 'ТЕЛЕФОН:'),
            array('id' => 54, 'language' => 'ru', 'translation' => 'Наши достижения:'),
            array('id' => 54, 'language' => 'uk', 'translation' => 'Наши досягнення:'),
            array('id' => 55, 'language' => 'ru', 'translation' => 'Фото с нами'),
            array('id' => 55, 'language' => 'uk', 'translation' => 'Фото з нами'),
            array('id' => 56, 'language' => 'ru', 'translation' => 'Твердотоплевные котлы'),
            array('id' => 56, 'language' => 'uk', 'translation' => 'Твердопаливні котли'),
            array('id' => 57, 'language' => 'ru', 'translation' => 'от производителя'),
            array('id' => 57, 'language' => 'uk', 'translation' => 'від виробника'),
            array('id' => 58, 'language' => 'ru', 'translation' => 'Преимущества<br/> работы с нами'),
            array('id' => 58, 'language' => 'uk', 'translation' => 'Переваги<br/> роботи с нами'),
            array('id' => 59, 'language' => 'ru', 'translation' => 'Бесплатная<br/> консультация'),
            array('id' => 59, 'language' => 'uk', 'translation' => 'Безкоштовна<br/> консультація'),
            array('id' => 60, 'language' => 'ru', 'translation' => 'Почему<br/> "Мартен"?'),
            array('id' => 60, 'language' => 'uk', 'translation' => 'Чому<br/> "Мартен"?'),
            array('id' => 61, 'language' => 'ru', 'translation' => 'Реализованные проекты'),
            array('id' => 61, 'language' => 'uk', 'translation' => 'Реалізовані проекти'),
            array('id' => 62, 'language' => 'ru', 'translation' => 'Полезная информация'),
            array('id' => 62, 'language' => 'uk', 'translation' => 'Корисна інформація'),
            array('id' => 63, 'language' => 'ru', 'translation' => 'ВСЕ СТАТЬИ'),
            array('id' => 63, 'language' => 'uk', 'translation' => 'ВСІ СТАТТІ'),
            array('id' => 64, 'language' => 'ru', 'translation' => 'Главная'),
            array('id' => 64, 'language' => 'uk', 'translation' => 'Головна'),
            array('id' => 65, 'language' => 'ru', 'translation' => 'Email'),
            array('id' => 65, 'language' => 'uk', 'translation' => 'Email'),
            array('id' => 66, 'language' => 'ru', 'translation' => 'Имя'),
            array('id' => 66, 'language' => 'uk', 'translation' => 'Ім\'я'),
            array('id' => 67, 'language' => 'ru', 'translation' => 'Телефон'),
            array('id' => 67, 'language' => 'uk', 'translation' => 'Телефон'),
            array('id' => 68, 'language' => 'ru', 'translation' => 'Текст'),
            array('id' => 68, 'language' => 'uk', 'translation' => 'Текст'),
            array('id' => 69, 'language' => 'ru', 'translation' => 'Последние отзывы'),
            array('id' => 69, 'language' => 'uk', 'translation' => 'Останні відгуки'),
            array('id' => 70, 'language' => 'ru', 'translation' => 'ЗАГРУЗИТЬ ЕЩЕ'),
            array('id' => 70, 'language' => 'uk', 'translation' => 'ЗАВАНТАЖИТИ ЩЕ'),
            array('id' => 71, 'language' => 'ru', 'translation' => 'Цена'),
            array('id' => 71, 'language' => 'uk', 'translation' => 'Ціна'),
            array('id' => 72, 'language' => 'ru', 'translation' => 'от'),
            array('id' => 72, 'language' => 'uk', 'translation' => 'від'),
            array('id' => 73, 'language' => 'ru', 'translation' => 'Последние отзывы'),
            array('id' => 73, 'language' => 'uk', 'translation' => 'Останні відгуки'),
            array('id' => 74, 'language' => 'ru', 'translation' => 'Загрузить еще'),
            array('id' => 74, 'language' => 'uk', 'translation' => 'Завантажити ще'),
            array('id' => 75, 'language' => 'ru', 'translation' => 'Артикул:'),
            array('id' => 75, 'language' => 'uk', 'translation' => 'Артикул:'),
            array('id' => 76, 'language' => 'ru', 'translation' => 'МОЩНОСТЬ КВТ'),
            array('id' => 76, 'language' => 'uk', 'translation' => 'ПОТУЖНІСТЬ КВТ'),
            array('id' => 77, 'language' => 'ru', 'translation' => 'Цена'),
            array('id' => 77, 'language' => 'uk', 'translation' => 'Ціна'),
            array('id' => 78, 'language' => 'ru', 'translation' => 'Есть в наличии'),
            array('id' => 78, 'language' => 'uk', 'translation' => 'Є в наявності'),
            array('id' => 79, 'language' => 'ru', 'translation' => 'Доставка по<br /> всей Украине'),
            array('id' => 79, 'language' => 'uk', 'translation' => 'Доставка по<br /> всій Україні'),
            array('id' => 80, 'language' => 'ru', 'translation' => 'Гарантия от<br /> производителя'),
            array('id' => 80, 'language' => 'uk', 'translation' => 'Гарантия від<br /> виробника'),
            array('id' => 81, 'language' => 'ru', 'translation' => 'Обмен товара на<br /> протяжении 14 дней'),
            array('id' => 81, 'language' => 'uk', 'translation' => 'Обмін товару <br /> протягом 14 днів'),
            array('id' => 82, 'language' => 'ru', 'translation' => 'Установка<br /> под ключ'),
            array('id' => 82, 'language' => 'uk', 'translation' => 'Встановлення<br /> під ключ'),
            array('id' => 83, 'language' => 'ru', 'translation' => 'Описание'),
            array('id' => 83, 'language' => 'uk', 'translation' => 'Опис'),
            array('id' => 84, 'language' => 'ru', 'translation' => 'Характеристики'),
            array('id' => 84, 'language' => 'uk', 'translation' => 'Характеристики'),
            array('id' => 85, 'language' => 'ru', 'translation' => 'Габариты'),
            array('id' => 85, 'language' => 'uk', 'translation' => 'Габарити'),
            array('id' => 86, 'language' => 'ru', 'translation' => 'Отзывы'),
            array('id' => 86, 'language' => 'uk', 'translation' => 'Відгуки'),
            array('id' => 87, 'language' => 'ru', 'translation' => 'Инструкция PDF'),
            array('id' => 87, 'language' => 'uk', 'translation' => 'Інструкція PDF'),
            array('id' => 88, 'language' => 'ru', 'translation' => 'Загрузить еще'),
            array('id' => 88, 'language' => 'uk', 'translation' => 'Завантажити ще'),
            array('id' => 89, 'language' => 'ru', 'translation' => 'ДОБАВИТЬ ОТЗЫВ'),
            array('id' => 89, 'language' => 'uk', 'translation' => 'ДОДАТИ ВІДГУК'),
            array('id' => 90, 'language' => 'ru', 'translation' => 'ВАШЕ ИМЯ:'),
            array('id' => 90, 'language' => 'uk', 'translation' => 'ВАШЕ ІМ\'Я:'),
            array('id' => 91, 'language' => 'ru', 'translation' => 'E-MAIL:'),
            array('id' => 91, 'language' => 'uk', 'translation' => 'E-MAIL:'),
            array('id' => 92, 'language' => 'ru', 'translation' => 'КОММЕНТАРИЙ:'),
            array('id' => 92, 'language' => 'uk', 'translation' => 'КОМЕНТАР:'),
            array('id' => 93, 'language' => 'ru', 'translation' => 'Отправить'),
            array('id' => 93, 'language' => 'uk', 'translation' => 'Надіслати'),
            array('id' => 94, 'language' => 'ru', 'translation' => '— поля обязательные для заполнения'),
            array('id' => 94, 'language' => 'uk', 'translation' => '— поля обов\'язкові для заповнення'),
            array('id' => 95, 'language' => 'ru', 'translation' => 'С этим товаром покупают'),
            array('id' => 95, 'language' => 'uk', 'translation' => 'З цим товаром купують'),
            array('id' => 96, 'language' => 'ru', 'translation' => 'от'),
            array('id' => 96, 'language' => 'uk', 'translation' => 'від'),
            array('id' => 97, 'language' => 'ru', 'translation' => 'КУПИТЬ'),
            array('id' => 97, 'language' => 'uk', 'translation' => 'ПРИДБАТИ'),
            array('id' => 98, 'language' => 'ru', 'translation' => 'ВАШЕ ИМЯ:'),
            array('id' => 98, 'language' => 'uk', 'translation' => 'ВАШЕ ІМ\'Я:'),
            array('id' => 99, 'language' => 'ru', 'translation' => 'ТЕЛЕФОН:'),
            array('id' => 99, 'language' => 'uk', 'translation' => 'ТЕЛЕФОН:'),
            array('id' => 100, 'language' => 'ru', 'translation' => 'E-MAIL:'),
            array('id' => 100, 'language' => 'uk', 'translation' => 'E-MAIL:'),
            array('id' => 101, 'language' => 'ru', 'translation' => 'ЗАГРУЗИТЬ ЕЩЕ'),
            array('id' => 101, 'language' => 'uk', 'translation' => 'ЗАВАНТАЖИТИ ЩЕ'),
            array('id' => 102, 'language' => 'ru', 'translation' => 'ДИАМЕТР'),
            array('id' => 102, 'language' => 'uk', 'translation' => 'ДІАМЕТР'),
        ));
    }

    public function down()
    {
        $this->truncateTable('i18n_source_messages');
        $this->truncateTable('i18n_translated_messages');
    }
}