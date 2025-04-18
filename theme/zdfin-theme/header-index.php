<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <meta name="description"
        content="Профессиональные услуги финансовой аналитики, бухгалтерского учета, бизнес-консультирования и аудита. Мы помогаем компаниям оптимизировать финансы, удвоить прибыль и успешно развиваться на рынке. Экспертные решения для роста вашего бизнеса от команды с многолетним опытом.">
    <meta name="keywords"
        content="финансовый анализ, финансовая аналитика, бухгалтерский учет, бизнес-консалтинг, аудит, оптимизация финансов, увеличение прибыли, рост бизнеса, финансовые услуги, unit-экономика, управленческий баланс">

    <meta property="og:title" content="Здоровые финансы: Анализ, аудит и консалтинг для роста бизнеса">
    <meta property="og:description"
        content="Профессиональные услуги финансовой аналитики, бухгалтерского учета и аудита для оптимизации финансов и увеличения прибыли.">
    <meta property="og:image" content="https://zdfinance.ru/assets/imgs/youbissnes.webp">
    <meta property="og:url" content="https://zdfinance.ru/">
    <meta property="og:type" content="website">
    <link rel="canonical" href="https://zdfinance.ru/">
    <!-- Yandex.Metrika counter -->

    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) { if (document.scripts[j].src === r) { return; } }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(99245282, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/99245282" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>

    <!-- /Yandex.Metrika counter -->
    <?php wp_head(); ?>
</head>

<body>
    <div class="top">
        <div class="top__container">
            <header class="header">
                <div class="header__inner">
                    <div class="header__links">
                        <div class="header__logo-wrap">
                            <a href="/" class="header__logo">
                                <img src="<?= get_template_directory_uri() ?>/assets/img/logo.png"
                                    alt="Вернуться на главную" />
                            </a>
                        </div>
                        <nav class="nav" id="main-menu">
                            <ul class="nav__list">
                                <li>
                                    <a href="<?= home_url() ?>#team"> О нас </a>
                                </li>
                                <li>
                                    <a href="<?= home_url() ?>#tools"> Услуги </a>
                                </li>

                                <li>
                                    <a href="<?= home_url() ?>#cases"> Кейсы </a>
                                </li>
                                <li>
                                    <a href="<?= home_url() ?>#reviews"> Отзывы </a>
                                </li>
                                <li>
                                    <a href="<?= home_url() ?>#footer"> Контакты </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header__phone-wrap">
                        <a href="tel:+79213328730" class="header__phone">+7 (921) 332 87 30</a>
                    </div>
                    <button class="header__btn-form" data-modal="modal-2">Заказать звонок</button>
                    <button aria-label="открыть меню" class="header__burger" aria-label="Открыть меню"
                        aria-controls="main-menu"></button>
                </div>
            </header>
            <div class="top__body">
                <div class="top__intro">
                    <p class="top__view-text">
                        Покажем, где теряются деньги,<br />и поможем их вернуть в бизнес!
                    </p>
                    <h1 class="top__title">
                        Финансовая аналитика для роста и&nbsp;стабильности вашего бизнеса
                    </h1>
                    <p class="top__extra-text">
                        Оптимизируем расходы, увеличиваем прибыль,<br />предотвращаем
                        кассовые разрывы
                    </p>
                    <div>
                        <button class="top__intro-btn" data-modal="modal-1">
                            Получить бесплатную консультацию
                        </button>
                    </div>
                </div>
                <div class="top__extra">
                    <a href="<?php the_field('master-class'); ?>" class="top__extra-master" target="_blank">
                        Бесплатный<br />мастер-класс
                    </a>
                    <div class="top__extra-row">
                        <a href="<?php the_field('presentation-file'); ?>" class="top__extra-row-link"
                            download>Скачать<br />презентацию</a>
                        <a href="<?php the_field('commercial-file'); ?>" class="top__extra-row-link"
                            download>Получить<br />коммерческое<br />предложение</a>
                    </div>
                    <a href="<?php the_field('nalog-file'); ?>" class="top__extra-nalog" download>
                        Налоговая<br />реформа 2025
                    </a>
                </div>
            </div>
        </div>
    </div>