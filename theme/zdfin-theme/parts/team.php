<section class="team" id="team">
    <div class="team__container">
        <h2 class="title team__title">Команда</h2>
        <article class="team__lider">
            <div class="team__lider-top">
                <h3 class="team__lider-title">Наумкина Светлана</h3>
                <p class="team__lider-position">
                    Управляющий компанией «Здоровые финансы»
                </p>
            </div>
            <div class="team__lider-body">
                <div class="team__lider-photo">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/team/team-1.jpg"
                        alt="Лидер компании Наумкина Светлана" class="team__lider-img" />
                    <ul class="team__social">
                        <li class="team__social-item">
                            <a href="https://wa.me/79219451815" class="team__social-link">
                                <img src="<?= get_template_directory_uri() ?>/assets/img/social-team/icon1.svg"
                                    alt="Написать в whatsup" class="team__social-img" />
                            </a>
                        </li>
                        <li class="team__social-item">
                            <a href="https://t.me/buhboss" class="team__social-link">
                                <img src="<?= get_template_directory_uri() ?>/assets/img/social-team/icon2.svg"
                                    alt="Написать в телеграм" class="team__social-img" />
                            </a>
                        </li>
                        <li class="team__social-item">
                            <a href="https://www.instagram.com/buh.bpk.expert" class="team__social-link">
                                <img src="<?= get_template_directory_uri() ?>/assets/img/social-team/icon3.svg"
                                    alt="Написать в instagram" class="team__social-img" />
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="team__lider-content">
                    <?php the_field('lider-one-text'); ?>
                </div>
            </div>
        </article>
        <article class="team__lider">
            <div class="team__lider-top">
                <h3 class="team__lider-title">Бараева Татьяна</h3>
                <p class="team__lider-position">
                    Управляющий компанией «Здоровые финансы»
                </p>
            </div>
            <div class="team__lider-body">
                <div class="team__lider-photo">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/team/team-2.jpg"
                        alt="Управляющий компанией Бараева Татьяна" class="team__lider-img" />
                    <ul class="team__social">
                        <li class="team__social-item">
                            <a href="https://wa.me/79530452898" class="team__social-link">
                                <img src="<?= get_template_directory_uri() ?>/assets/img/social-team/icon1.svg"
                                    alt="Написать в whatsup" class="team__social-img" />
                            </a>
                        </li>
                        <li class="team__social-item">
                            <a href="https://t.me/baraeva_finans" class="team__social-link">
                                <img src="<?= get_template_directory_uri() ?>/assets/img/social-team/icon2.svg"
                                    alt="Написать в телеграм" class="team__social-img" />
                            </a>
                        </li>
                        <li class="team__social-item">
                            <a href="https://www.instagram.com/baraeva_finance" class="team__social-link">
                                <img src="<?= get_template_directory_uri() ?>/assets/img/social-team/icon3.svg"
                                    alt="Написать в instagram" class="team__social-img" />
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="team__lider-content">
                    <?php the_field('lider-two-text'); ?>
                </div>
            </div>
        </article>
        <div class="team__list">
            <article class="team__list-item">
                <img src="<?= get_template_directory_uri() ?>/assets/img/team/team-3.jpg"
                    alt="изображение члена команды" class="team__list-img" />
                <div class="team__list-info">
                    <h2 class="team__list-title">Руслан Емлиханов</h2>
                    <p class="team__list-descr">Финансовый директор</p>
                </div>
            </article>
            <article class="team__list-item">
                <img src="<?= get_template_directory_uri() ?>/assets/img/team/team-4.jpg"
                    alt="изображение члена команды" class="team__list-img" />
                <div class="team__list-info">
                    <h2 class="team__list-title">Олеся Доняева</h2>
                    <p class="team__list-descr">
                        Руководитель академии по обучению финансовых аналитиков
                    </p>
                </div>
            </article>
            <article class="team__list-item">
                <img src="<?= get_template_directory_uri() ?>/assets/img/team/team-5.jpg"
                    alt="изображение члена команды" class="team__list-img" />
                <div class="team__list-info">
                    <h2 class="team__list-title">Александр Бараев</h2>
                    <p class="team__list-descr">Финансовый директор</p>
                </div>
            </article>
        </div>
    </div>
</section>