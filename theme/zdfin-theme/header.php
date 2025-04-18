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
    <header class="header-main">
        <div class="container header-main__container">
            <div class="header-main__logo-wrap">
                <a href="/" class="header__logo">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/logo.png" alt="Вернуться на главную">
                </a>
            </div>
            <nav class="nav" id="main-menu">
                <ul class="nav__list">
                    <li>
                        <a href="<?= home_url() ?>#team">
                            О нас
                        </a>
                    </li>
                    <li>
                        <a href="<?= home_url() ?>#tools">
                            Услуги
                        </a>
                    </li>

                    <li>
                        <a href="<?= home_url() ?>#cases">
                            Кейсы
                        </a>
                    </li>
                    <li>
                        <a href="<?= home_url() ?>#reviews">
                            Отзывы
                        </a>
                    </li>
                    <li>
                        <a href="<?= home_url() ?>#footer">
                            Контакты
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="header-main__phone-wrap">
                <a href="tel:+79213328730" class="header__phone">+7 (921) 332 87 30</a>
            </div>
            <button class="header__btn-form" data-modal="modal-2">Заказать звонок</button>
            <button aria-label="открыть меню" class="header__burger" aria-label="Открыть меню"
                aria-controls="main-menu"></button>
        </div>
    </header>