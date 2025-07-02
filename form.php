<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>drupal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="style.css">
    <?php
$is_ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
?>
</head>

<body>
    <div class="first-window">
        <video autoplay loop muted>
            <source src="img/video.mp4" type="video/mp4">
        </video>
        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <a href="#" class="logo">
                        <img src="img/logo.svg" alt="logo">
                    </a>
                    <nav class="menu">
                        <ul class="menu__list">
                            <li class="menu__item">
                                <a href="#support" class="menu__link scroll-to">поддержка сайтов</a>
                            </li>
                            <li class="menu__item">
                                <a href="#tarif" class="menu__link scroll-to">тарифы</a>
                            </li>
                            <li class="menu__item">
                                <a href="#case" class="menu__link scroll-to">наши работы</a>
                            </li>
                            <li class="menu__item">
                                <a href="#review" class="menu__link scroll-to">отзывы</a>
                            </li>
                            <li class="menu__item">
                                <a href="#contact" class="menu__link scroll-to">контакты</a>
                            </li>
                        </ul>
                        <a href="" class="phone">8 800 222-26-73</a>
                        <div class="language">
                            RU
                            <ul class="language-menu">
                                <li>RU</li>
                                <li>EN</li>
                            </ul>
                        </div>
                    </nav>
                    <div class="burger-menu">
                        <img class="burger-menu" src="img/burger-menu-svgrepo-com.svg" alt="">
                    </div>
                </div>
            </div>
        </header>
        <section class="main">
            <div class="container">
                <div class="main__inner">
                    <div class="main__left">
                        <h1 class="main__title">Поддержка сайтов на Drupal</h1>
                        <p class="main__text">
                            Сопровождение и поддержка сайтов
                            на CMS Drupal любых версий и запущенности
                        </p>
                        <button href="#tarif" class="main__button scroll-to">ТАРИФЫ</button>
                    </div>
                    <div class="main__right">
                        <ul class="main__list">
                            <li class="main__item">
                                <h5 class="main__item-title first">#1</h5>
                                <p class="main__item-text">
                                    Drupal-разработчик
                                    в России по версии Рейтинга Рунета
                                </p>
                            </li>
                            <li class="main__item">
                                <h5 class="main__item-title">3+</h5>
                                <p class="main__item-text">
                                    средний опыт специалистов более 3 лет
                                </p>
                            </li>
                            <li class="main__item">
                                <h5 class="main__item-title">14</h5>
                                <p class="main__item-text">
                                    лет опыта в сфере Drupal
                                </p>
                            </li>
                            <li class="main__item">
                                <h5 class="main__item-title">200+</h5>
                                <p class="main__item-text">
                                    модулей и тем в формате DrupalGive
                                </p>
                            </li>
                            <li class="main__item">
                                <h5 class="main__item-title">35 000</h5>
                                <p class="main__item-text">
                                    часов поддержки сайтов на Drupal
                                </p>
                            </li>
                            <li class="main__item">
                                <h5 class="main__item-title">200+</h5>
                                <p class="main__item-text">
                                    Проектов на поддержке
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div> -
    <section class="comp">
        <div class="container">
            <h2 class="comp__title section-title">13 лет совершенствуем компетенции в Drupal поддержке!</h2>
            <p class="comp__text">Разрабатываем и оптимизируем модули, расширяем функциональность сайтов, обновляем
                дизайн</p>
            <ul class="comp__list">
                <li class="comp__item">
                    <img src="img/competency-1.svg" alt="" class="comp__img">
                    <p class="comp__item-text">Добавление информации на сайт, создание новых разделов</p>
                </li>
                <li class="comp__item">
                    <img src="img/competency-2.svg" alt="" class="comp__img">
                    <p class="comp__item-text">Разработка
                        и оптимизация модулей сайта</p>
                </li>
                <li class="comp__item">
                    <img src="img/competency-3.svg" alt="" class="comp__img">
                    <p class="comp__item-text">Интеграция с CRM, 1C, платежными системами, любыми веб-сервисами</p>
                </li>
                <li class="comp__item">
                    <img src="img/competency-4.svg" alt="" class="comp__img">
                    <p class="comp__item-text">Любые доработки функционала
                        и дизайна</p>
                </li>
                <li class="comp__item">
                    <img src="img/competency-5.svg" alt="" class="comp__img">
                    <p class="comp__item-text">Аудит и мониторинг безопасности Drupal сайтов</p>
                </li>
                <li class="comp__item">
                    <img src="img/competency-6.svg" alt="" class="comp__img">
                    <p class="comp__item-text">Миграция, импорт контента и апгрейд Drupal</p>
                </li>
                <li class="comp__item">
                    <img src="img/competency-7.svg" alt="" class="comp__img">
                    <p class="comp__item-text">Оптимизация
                        и ускорение Drupal-сайтов</p>
                </li>
                <li class="comp__item">
                    <img src="img/competency-8.svg" alt="" class="comp__img">
                    <p class="comp__item-text">Веб-маркетинг, консультации
                        и работы по SEO</p>
                </li>
            </ul>
        </div>
    </section>
    <div class="support" id="support">
        <div class="container">
            <h2 class="support__title section-title">
                Поддержка
                от Drupal-coder
            </h2>
            <ul class="support__list">
                <li class="support__item">
                    <span class="support__num">01.</span>
                    <h4 class="support__header">Постановка задачи по Email</h4>
                    <p class="support__text">
                        Удобная и привычная модель постановки задач, при которой задачи фиксируются и никогда
                        не теряются.
                    </p>
                    <img src="img/support1.svg" alt="" class="support__icon">
                </li>
                <li class="support__item">
                    <span class="support__num">02.</span>
                    <h4 class="support__header">Система Helpdesk – отчетность, прозрачность</h4>
                    <p class="support__text">
                        Возможность посмотреть все заявки в работе
                        и отработанные часы
                        в личном кабинете через браузер.
                    </p>
                    <img src="img/support2.svg" alt="" class="support__icon">
                </li>
                <li class="support__item">
                    <span class="support__num">03.</span>
                    <h4 class="support__header">Расширенная техническая
                        поддержка</h4>
                    <p class="support__text">
                        Возможность организации расширенной техподдержки с 6:00
                        до 22:00 без выходных.
                    </p>
                    <img src="img/support3.svg" alt="" class="support__icon">
                </li>
                <li class="support__item">
                    <span class="support__num">04.</span>
                    <h4 class="support__header">Персональный менеджер проекта</h4>
                    <p class="support__text">
                        Ваш менеджер проекта всегда в курсе текущего состояния проекта
                        и в любой момент готов ответить на любые вопросы.
                    </p>
                    <img src="img/support4.svg" alt="" class="support__icon">
                </li>
                <li class="support__item">
                    <span class="support__num">05.</span>
                    <h4 class="support__header">Удобные способы оплаты</h4>
                    <p class="support__text">
                        Безналичный расчет по договору или электронные деньги: WebMoney, Яндекс.Деньги, Paypal.
                    </p>
                    <img src="img/support5.svg" alt="" class="support__icon">
                </li>
                <li class="support__item">
                    <span class="support__num">06.</span>
                    <h4 class="support__header">Работаем с SLA
                        и NDA</h4>
                    <p class="support__text">
                        Работа в рамках соглашений
                        о конфиденциальности
                        и об уровне качетсва работ.
                    </p>
                    <img src="img/support6.svg" alt="" class="support__icon">
                </li>
                <li class="support__item">
                    <span class="support__num">07.</span>
                    <h4 class="support__header">Штатные
                        специалисты</h4>
                    <p class="support__text">
                        Надежные штатные специалисты, никаких фрилансеров.
                    </p>
                    <img src="img/support7.svg" alt="" class="support__icon">
                </li>
                <li class="support__item">
                    <span class="support__num">08.</span>
                    <h4 class="support__header">Удобные каналы
                        связи</h4>
                    <p class="support__text">
                        Консультации по телефону, скайпу,
                        в месенджерах.
                    </p>
                    <img src="img/support8.svg" alt="" class="support__icon">
                </li>
            </ul>
        </div>
    </div>
    <section class="expertise">
        <div class="container">
            <div class="expertise__content">
                <h2 class="expertise__title section-title">Экспертиза в Drupal, опыт 14 лет!</h2>
                <ul class="expertise__list">
                    <li class="expertise__item">
                        <p class="expertise__text">
                            Только системный подход – контроль версий, резервирование
                            и тестирование!
                        </p>
                    </li>
                    <li class="expertise__item">
                        <p class="expertise__text">
                            Только Drupal сайты,
                            не берем на поддержку сайты на других CMS!
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <img src="img/laptop.svg" alt="" class="expertise__img">

    </section>
    <section class="tarif" id="tarif">
        <div class="container">
            <div class="tarif__title section-title">Тарифы</div>
            <ul class="tarif__list">
                <li class="tarif__item">
                    <h4 class="tarif__title-item">Бизнес</h4>
                    <div class="tarif__price">2000</div>
                    <div class="tarif__hour">в час</div>
                    <ul class="tarif__services">
                        <li class="tarif__service">
                            <img src="img/checked.svg" alt="" class="tarif__arrow">
                            <div class="service__text">Предоплата от 10 часов</div>
                        </li>
                        <li class="tarif__service">
                            <img src="img/checked.svg" alt="" class="tarif__arrow">
                            <div class="service__text">Консультации и работы по SEO</div>
                        </li>
                        <li class="tarif__service">
                            <img src="img/checked.svg" alt="" class="tarif__arrow">
                            <div class="service__text">Услуги дизайнера</div>
                        </li>
                        <li class="tarif__service">
                            <img src="img/checked.svg" alt="" class="tarif__arrow">
                            <div class="service__text">Высокое время реакции – до 2 рабочих дней</div>
                        </li>
                        <li class="tarif__service">
                            <img src="img/checked.svg" alt="" class="tarif__arrow">
                            <div class="service__text">Неиспользованные часы не переносятся</div>
                        </li>
                        <button class="tariff__button">ОСТАВИТЬ ЗАЯВКУ!</button>
                    </ul>
                </li>
                <li class="tarif__item active">
                    <h4 class="tarif__title-item">Бизнес</h4>
                    <div class="tarif__price">2000</div>
                    <div class="tarif__hour">в час</div>
                    <ul class="tarif__services">
                        <li class="tarif__service">
                            <img src="img/checked.svg" alt="" class="tarif__arrow">
                            <div class="service__text">Предоплата от 10 часов</div>
                        </li>
                        <li class="tarif__service">
                            <img src="img/checked.svg" alt="" class="tarif__arrow">
                            <div class="service__text">Консультации и работы по SEO</div>
                        </li>
                        <li class="tarif__service">
                            <img src="img/checked.svg" alt="" class="tarif__arrow">
                            <div class="service__text">Услуги дизайнера</div>
                        </li>
                        <li class="tarif__service">
                            <img src="img/checked.svg" alt="" class="tarif__arrow">
                            <div class="service__text">Высокое время реакции – до 2 рабочих дней</div>
                        </li>
                        <li class="tarif__service">
                            <img src="img/checked.svg" alt="" class="tarif__arrow">
                            <div class="service__text">Неиспользованные часы не переносятся</div>
                        </li>
                        <button class="tariff__button">ОСТАВИТЬ ЗАЯВКУ!</button>
                    </ul>
                </li>
                <li class="tarif__item">
                    <h4 class="tarif__title-item">Бизнес</h4>
                    <div class="tarif__price">2000</div>
                    <div class="tarif__hour">в час</div>
                    <ul class="tarif__services">
                        <li class="tarif__service">
                            <img src="img/checked.svg" alt="" class="tarif__arrow">
                            <div class="service__text">Предоплата от 10 часов</div>
                        </li>
                        <li class="tarif__service">
                            <img src="img/checked.svg" alt="" class="tarif__arrow">
                            <div class="service__text">Консультации и работы по SEO</div>
                        </li>
                        <li class="tarif__service">
                            <img src="img/checked.svg" alt="" class="tarif__arrow">
                            <div class="service__text">Услуги дизайнера</div>
                        </li>
                        <li class="tarif__service">
                            <img src="img/checked.svg" alt="" class="tarif__arrow">
                            <div class="service__text">Высокое время реакции – до 2 рабочих дней</div>
                        </li>
                        <li class="tarif__service">
                            <img src="img/checked.svg" alt="" class="tarif__arrow">
                            <div class="service__text">Неиспользованные часы не переносятся</div>
                        </li>
                        <button class="tariff__button">ОСТАВИТЬ ЗАЯВКУ!</button>
                    </ul>
                </li>
            </ul>
            <p class="tarif__text">Вам не подходят наши тарифы? Оставьте заявку и мы предложим вам индивидуальные
                условия!</p>
            <a href="" class="tarif__individ">Получить индивидуальный тариф</a>
        </div>
    </section>
    <section class="case" id="case">
        <div class="container">
            <h2 class="case__title section-title">Последние кейсы</h2>
            <div class="case__content">
                <article about="#" class="blog is-promoted keys-1">
                    <div class="keys1-wrapper">
                        <div class="keys1-picture">
                            <img src="img/image 11.2.png" width="360px" height="215px">
                        </div>
                        <div class="keys1-container">
                            <div class="keys1-header">
                                <h2>
                                    <a herf="#">
                                        <span>
                                            Настройка выгрузки YML для Яндекс.Маркета
                                        </span>
                                    </a>
                                </h2>
                                <div class="keys1-header-date">04.05.2020</div>
                            </div>
                            <div class="keys1-body">
                                <p>Эти слова совершенно справедливы, однако гипнотический рифф продолжает паузный пласт.
                                </p>
                            </div>
                        </div>
                    </div>
                </article>

                <article about="#" class="blog is-promoted keys-2">
                    <div class="keys2-wrapper">
                        <div class="keys2-picture">
                            <img src="img/image 11.2.png" width="800px">
                        </div>
                        <div class="keys2-container">
                            <div class="keys2-header">
                                <h2>
                                    <a herf="#">
                                        <span>
                                            Использование отчетов Ecommerce в Яндекс.Метрике
                                        </span>
                                    </a>
                                </h2>
                            </div>
                            <div class="keys2-body">

                            </div>
                        </div>
                    </div>
                </article>
                <article about="#" class="blog is-promoted keys-1">
                    <div class="keys1-wrapper">
                        <div class="keys1-picture">
                            <img src="img/image 8.3.png" height="480px">
                        </div>
                        <div class="keys1-container">
                            <div class="keys1-header">
                                <h2>
                                    <a herf="#" class="link_keys">
                                        <span>

                                            Повышение конверсии страницы с формой заявки с применением AB-тестирования

                                        </span>
                                    </a>
                                </h2>
                                <div class="keys1-header-date">
                                    24.01.2020
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article about="#" class="blog is-promoted keys-1">
                    <div class="keys1-wrapper">
                        <div class="keys1-picture">
                            <img src="img/image 7.3.png" height="480px">
                        </div>
                        <div class="keys1-container">
                            <div class="keys1-header">
                                <h2>
                                    <a herf="#" class="link_keys">
                                        <span>

                                            Drupal 7: ускорение времени генерации страниц интернет-магазина на 32%
                                        </span>
                                    </a>
                                </h2>
                                <div class="keys1-header-date">
                                    24.01.2020
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article about="#" class="blog is-promoted keys-1">
                    <div class="keys1-wrapper">
                        <div class="keys1-picture">
                            <img src="img/image 6.2.png" height="250px">
                        </div>
                        <div class="keys1-container">
                            <div class="keys1-header">
                                <h2>
                                    <a herf="#">
                                        <span>

                                            Настройка выгрузки YML для Яндекс.Маркета </span>
                                    </a>
                                </h2>
                                <div class="keys1-header-date">

                                    22.08.2019
                                </div>
                            </div>
                            <div class="keys1-body">
                                <p>Эти слова совершенно справедливы, однако гипнотический рифф продолжает паузный пласт.
                                </p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="case__btn-cntr">
                <button class="case__btn">Показать еще</button>
            </div>

        </div>
    </section>
    <section class="team">
        <div class="container">
            <h2 class="team__title section-title">Команда</h2>
            <ul class="team__list">
                <li class="team__item">
                    <img src="img/team-img1.png" alt="" class="team__photo">
                    <h5 class="team__name">Лёша</h5>
                    <p class="team__desc">руководитель поддержки, планирование задач</p>
                </li>
                <li class="team__item">
                    <img src="img/team-img2.png" alt="" class="team__photo">
                    <h5 class="team__name">Роман</h5>
                    <p class="team__desc">инфраструктура веб-проектов</p>
                </li>
                <li class="team__item">
                    <img src="img/team-img3.png" alt="" class="team__photo">
                    <h5 class="team__name">Ирина</h5>
                    <p class="team__desc">менеджер по работе
                        с клинетами, организация оказания услуг</p>
                </li>
                <li class="team__item">
                    <img src="img/team-img3.png" alt="" class="team__photo">
                    <h5 class="team__name">Даша</h5>
                    <p class="team__desc">SEO, веб-маркетинг</p>
                </li>
                <li class="team__item">
                    <img src="img/team-img1.png" alt="" class="team__photo">
                    <h5 class="team__name">Сергей</h5>
                    <p class="team__desc">технический директор, 14 лет опыт работы с Drupal</p>
                </li>
                <li class="team__item">
                    <img src="img/team-img2.png" alt="" class="team__photo">
                    <h5 class="team__name">Вадим</h5>
                    <p class="team__desc">UX/UI дизайн</p>
                </li>
            </ul>
        </div>
    </section>

    <section class="review" id="review">
        <div class="container">
            <h2 class="review__title section-title">Отзывы</h2>
            <div class="review__slider">
                <div class="review__slides slider">
                    <div class="review__slide slide">
                        <img src="img/winamp.png" alt="" class="slide__img">
                        <p class="slide__text">Команда Drupal Coder вызвала только положительные впечатления!</p>
                        <span class="slide__info">Нуреев Александр, менеджер проекта Winamp Russian Community</span>
                    </div>
                    <div class="review__slide slide">
                        <img src="img/winamp.png" alt="" class="slide__img">
                        <p class="slide__text">Команда Drupal Coder вызвала только положительные впечатления!2</p>
                        <span class="slide__info">Нуреев Александр, менеджер проекта Winamp Russian Community</span>
                    </div>
                    <div class="review__slide slide">
                        <img src="img/winamp.png" alt="" class="slide__img">
                        <p class="slide__text">Команда Drupal Coder вызвала только положительные впечатления!3</p>
                        <span class="slide__info">Нуреев Александр, менеджер проекта Winamp Russian Community</span>
                    </div>
                    <div class="review__slide slide">
                        <img src="img/winamp.png" alt="" class="slide__img">
                        <p class="slide__text">Команда Drupal Coder вызвала только положительные впечатления!3</p>
                        <span class="slide__info">Нуреев Александр, менеджер проекта Winamp Russian Community</span>
                    </div>
                    <div class="review__slide slide">
                        <img src="img/winamp.png" alt="" class="slide__img">
                        <p class="slide__text">Команда Drupal Coder вызвала только положительные впечатления!3</p>
                        <span class="slide__info">Нуреев Александр, менеджер проекта Winamp Russian Community</span>
                    </div>
                    <div class="review__slide slide">
                        <img src="img/winamp.png" alt="" class="slide__img">
                        <p class="slide__text">Команда Drupal Coder вызвала только положительные впечатления!3</p>
                        <span class="slide__info">Нуреев Александр, менеджер проекта Winamp Russian Community</span>
                    </div>
                    <div class="review__slide slide">
                        <img src="img/winamp.png" alt="" class="slide__img">
                        <p class="slide__text">Команда Drupal Coder вызвала только положительные впечатления!3</p>
                        <span class="slide__info">Нуреев Александр, менеджер проекта Winamp Russian Community</span>
                    </div>
                    <div class="review__slide slide">
                        <img src="img/winamp.png" alt="" class="slide__img">
                        <p class="slide__text">Команда Drupal Coder вызвала только положительные впечатления!3</p>
                        <span class="slide__info">Нуреев Александр, менеджер проекта Winamp Russian Community</span>
                    </div>
                    <div class="review__slide slide">
                        <img src="img/winamp.png" alt="" class="slide__img">
                        <p class="slide__text">Команда Drupal Coder вызвала только положительные впечатления!3</p>
                        <span class="slide__info">Нуреев Александр, менеджер проекта Winamp Russian Community</span>
                    </div>
                    <div class="review__slide slide">
                        <img src="img/winamp.png" alt="" class="slide__img">
                        <p class="slide__text">Команда Drupal Coder вызвала только положительные впечатления!3</p>
                        <span class="slide__info">Нуреев Александр, менеджер проекта Winamp Russian Community</span>
                    </div>
                </div>
                <div class="review__right">
                    <div class="review__left-arrow prev arrow">
                        <img src="img/arrow-left.svg" alt="">
                    </div>
                    <div class="review__pager pager"><span class="current-page">1</span><span
                            class="total-pages">14</span></div>
                    <div class="review__right-arrow next arrow">
                        <img src="img/arrow-right.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer__content">
                <div class="footer__left left">
                    <h2 class="footer__title section-title">Оставить заявку на поддержку сайта</h2>
                    <p class="footer__text">Срочно нужна поддержка сайта? Ваша команда не успевает справиться
                        самостоятельно или предыдущий подрядчик не справился с работой? Тогда вам точно к нам! Просто
                        оставьте заявку и наш менеджер с вами свяжется!</p>
                    <div href="" class="footer__phone footer-link">
                        <img src="img/phone.svg" alt="" class="footer__phone-img">
                        <a href="" class="footer__phone-link">8 800 222-26-73</a>
                    </div>
                    <div href="" class="footer__mail footer-link">
                        <img src="img/mail.svg" alt="" class="footer__mail-img">
                        <a href="" class="footer__mail-link">info@drupal-coder.ru</a>
                    </div>
                </div>
                <div class="footer__right right">

                    <form method="post" class="footer__form form" id="contact">
                        <div class="head">
                            <h2 class="footer__title section-title"><b>Форма обратной связи</b></h2>

                            <div class="mess"><?php 
                                if(isset($_SESSION['success_message'])) {
                                    echo $_SESSION['success_message'];
                                    unset($_SESSION['success_message']);
                                }
                                if (isset($_SESSION['error'])) {
                                    echo $_SESSION['error'];
                                    unset($_SESSION['error']);
                                }
                                if (isset($_SESSION['info_message'])) {
                                    echo $_SESSION['info_message'];
                                    unset($_SESSION['info_message']);
                                }
                            ?>
                            </div>
                            <div class="mess_info"><?php
                            if (isset($_SESSION['success_message'])) {
                                echo $_SESSION['success_message'];
                                unset($_SESSION['success_message']);
                            }
                            if (isset($_SESSION['error'])) {
                                echo $_SESSION['error'];
                                unset($_SESSION['error']);
                            }
                            if (isset($_SESSION['info_message'])) {
                                echo $_SESSION['info_message'];
                                unset($_SESSION['info_message']);
                            }
                            ?>
                            </div>
                            <div class="field">
                                <div class="error" data-field="fio"><?php echo $messages['fio'] ?></div>
                                <label> <input name="fio"
                                        class="input <?php echo ($errors['fio'] != NULL) ? 'red' : ''; ?>"
                                        value="<?php echo $values['fio']; ?>" type="text" placeholder="ФИО" />
                                </label>

                            </div>

                            <div class="field">
                                <div class="error" data-field="number"> <?php echo $messages['number']?> </div>
                                <label> <input name="number"
                                        class="input <?php echo ($errors['number'] != NULL) ? 'red' : ''; ?>"
                                        value="<?php echo $values['number']; ?>" type="tel"
                                        placeholder="Номер телефона" /> </label>

                            </div>

                            <div class="field">
                                <div class="error" data-field="email"> <?php echo $messages['email']?> </div>
                                <label> <input name="email"
                                        class="input <?php echo ($errors['email'] != NULL) ? 'red' : ''; ?>"
                                        value="<?php echo $values['email']; ?>" type="text" placeholder="Почта" />
                                </label>
                            </div>

                            <div class="field">
                                <label>
                                    <div class="error" data-field="date"> <?php echo $messages['date'] ?> </div>
                                    <input name="date"
                                        class="input <?php echo ($errors['date'] != NULL) ? 'red' : ''; ?>"
                                        value="<?php if(strtotime($values['date']) > 100000) echo $values['date']; ?>"
                                        type="date" />
                                </label>
                            </div>

                            <div class="field">
                                <div>Пол</div>
                                <div class="mb-1">
                                    <div class="error" data-field="radio"> <?php echo $messages['radio']?> </div>
                                    <label>
                                        <input name="radio" class="ml-2" type="radio" value="M"
                                            <?php if($values['radio'] == 'M') echo 'checked'; ?> />
                                        <span class="<?php echo ($errors['radio'] != NULL) ? 'error' : ''; ?>">
                                            Мужской </span>
                                    </label>
                                    <label>
                                        <input name="radio" class="ml-2" type="radio" value="W"
                                            <?php if($values['radio'] == 'W') echo 'checked'; ?> />
                                        <span class="<?php echo ($errors['radio'] != NULL) ? 'error' : ''; ?>">
                                            Женский </span>
                                    </label>
                                </div>
                            </div>

                            <div class="field">
                                <div>Любимый язык программирования</div>
                                <div class="error" data-field="language[]"> <?php echo $messages['language'] ?>
                                </div>
                                <select class="my-2 <?php echo ($errors['language'] != NULL) ? 'red' : ''; ?>"
                                    name="language[]" multiple="multiple">
                                    <option value="Pascal"
                                        <?php echo (in_array('Pascal', $languages)) ? 'selected' : ''; ?>>Pascal
                                    </option>
                                    <option value="C" <?php echo (in_array('C', $languages)) ? 'selected' : ''; ?>>C
                                    </option>
                                    <option value="C++" <?php echo (in_array('C++', $languages)) ? 'selected' : ''; ?>>
                                        C++
                                    </option>
                                    <option value="JavaScript"
                                        <?php echo (in_array('JavaScript', $languages)) ? 'selected' : ''; ?>>
                                        JavaScript</option>
                                    <option value="PHP" <?php echo (in_array('PHP', $languages)) ? 'selected' : ''; ?>>
                                        PHP
                                    </option>
                                    <option value="Python"
                                        <?php echo (in_array('Python', $languages)) ? 'selected' : ''; ?>>Python
                                    </option>
                                    <option value="Java"
                                        <?php echo (in_array('Java', $languages)) ? 'selected' : ''; ?>>Java
                                    </option>
                                    <option value="Haskel"
                                        <?php echo (in_array('Haskel', $languages)) ? 'selected' : ''; ?>>Haskel
                                    </option>
                                    <option value="Clojure"
                                        <?php echo (in_array('Clojure', $languages)) ? 'selected' : ''; ?>>
                                        Clojure</option>
                                    <option value="Scala"
                                        <?php echo (in_array('Scala', $languages)) ? 'selected' : ''; ?>>Scala
                                    </option>
                                </select>
                            </div>

                            <div class="field">
                                <div>Биография</div>
                                <label>
                                    <div class="error" data-field="bio"> <?php echo $messages['bio'] ?> </div>
                                    <textarea name="bio"
                                        class="input <?php echo ($errors['bio'] != NULL) ? 'red' : ''; ?>"
                                        placeholder="Биография"><?php echo $values['bio']; ?></textarea>
                                </label>
                            </div>

                            <div class="field">
                                <label>
                                    <div class="error" data-field="check"> <?php echo $messages['check']?>
                                    </div>
                                    <input name="check" type="checkbox"
                                        <?php echo ($values['check'] != NULL) ? 'checked' : ''; ?> />
                                    С контрактом ознакомлен(а)
                                </label>
                            </div>
                            <div class="form-buttons">
                                <button class="form__button submit-btn" type="submit"
                                    style="display: <?= $log ? 'none' : 'inline-block' ?>">Отправить</button>
                                <a class="form__button btnlike" href="login.php"
                                    style="display: <?= $log ? 'none' : 'inline-block' ?>">Войти</a>
                                <button class="form__button edbut" type="submit" name="action" value="update"
                                    style="display: <?= $log ? 'inline-block' : 'none' ?>">Изменить</button>
                                <button class="form__button button logout-btn" type="submit" name="action"
                                    value="logout" style="display: <?= $log ? 'inline-block' : 'none' ?>">Выйти</button>

                    </form>
                    <!-- <form action="" class="footer__form form" id="contact">
                        <div class="">
                            <input class="name-field footer-input input" type="text" placeholder="Ваше имя" id="fullName" required/>
                        </div>
                        <div class=""></div>
                        <div class=""></div>
                        <div class=""></div>
                        <input class="tel-field footer-input input" type="tel" placeholder="Телефон" id="phone" required/>
                        <input class="email-field footer-input input" type="email" placeholder="E-mail" id="email" required/>
                        <textarea class="form__area footer-area input" rows="5" placeholder="Ваш комментарий" id="message" required></textarea>

                        <div class="form__check">
                            <input class="checkbox" type="checkbox" id="agreement" required>
                            <label class="check-label" for="agreement">Отправляя заявку, я даю согласие на обработку своих персональных данных</p>
                        </div>

                        <button class="form__button" type="submit">Оставить заявку!</button>
                        <p id="responseMessage"></p>
                    </form> -->
                </div>
            </div>

            <div class="footer__bottom">
                <p class="footer__bottom-text">Проект ООО «Инитлаб», Краснодар, Россия.</p>
                <p class="footer__bottom-text">Drupal является зарегистрированной торговой маркой Dries Buytaert.
                </p>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
