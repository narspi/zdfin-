<section class="choices">
    <div class="choices__container">
        <h2 class="title choices__title">Почему выбирают нас?</h2>
        <div class="choices__content">
            <div class="choices__content-column">
                <div class="choices__content-row">
                    <a href="<?= home_url() ?>#cases"
                        class="choices__block choices__block-top choices__block-link choices__block-link--ring-arrow">
                        <span class="choices__block-number">1000+</span>
                        <span class="choices__block-row-text">Успешных проектов</span>
                    </a>
                    <p class="choices__block choices__block-top">
                        <span class="choices__block-number">10 лет</span>
                        <span class="choices__block-row-text">Опыт работы - более</span>
                    </p>
                </div>
                <p class="choices__block">
                    <span style="font-weight: 700">Прозрачность –</span>
                    <span style="font-weight: 300">понятные объяснения без сложных финансовых терминов</span>
                </p>
                <a href="<?= home_url() ?>#tools" class="choices__block choices__block-link choices__block-link--arrow">
                    <span style="font-weight: 700">Индивидуальный подход –</span>
                    <span style="font-weight: 300">адаптируем решения под ваш бизнес</span>
                </a>
            </div>
            <img src="<?= get_template_directory_uri() ?>/assets/img/choices-decor1.jpg" alt=""
                class="choices__decor choices__decor--one">
            <img src="<?= get_template_directory_uri() ?>/assets/img/choices-decor2.jpg" alt=""
                class="choices__decor choices__decor--two">
        </div>
        <div class="choices__video">
            <video controls>
                <source src="<?= get_template_directory_uri() ?>/assets/video/top-video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</section>