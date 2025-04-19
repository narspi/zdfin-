<?php if (have_rows('reviews-list')): ?>
    <section class="cases" id="cases">
        <div class="cases__container">
            <h2 class="title">Наши кейсы</h2>
            <p class="cases__descr">
                Мы помогли более 1000 компаний увеличить свою прибыль на разных этапах
                развития бизнеса.
            </p>
            <div class="cases__slider swiper">
                <div class="swiper-wrapper">
                    <?php while (have_rows('cases-list')):
                        the_row(); ?>
                        <article class="swiper-slide cases__slide">
                            <div class="cases__slide-top">
                                <?php
                                $img_data = get_sub_field('case-img');
                                ?>
                                <img src="<?= $img_data['url'] ?>" alt="<?= $img_data['alt'] ?>" class="cases__slide-logo" />
                                <div class="cases__slide-top-content">
                                    <p class="cases__slide-category"><?php the_sub_field('case-category'); ?></p>
                                    <h3 class="cases__slide-title">
                                        <?php the_sub_field('case-company'); ?>
                                    </h3>
                                    <?php
                                    $case_url_link = get_sub_field('case-url-link');
                                    $case_url_text = get_sub_field('case-url-text');
                                    if ($case_url_link and $case_url_text):
                                        ?>
                                        <a href="<?= $case_url_link ?>" class="cases__slide-tag"
                                            target="_blank"><?= $case_url_text ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="cases__slide-main">
                                <div class="cases__slide-item cases__slide-item--1">
                                    <p class="cases__slide-descr cases__slide-descr--arrow">
                                        Точка А
                                    </p>
                                    <div class="cases__slide-content">
                                        <?php the_sub_field('case-a-content'); ?>
                                    </div>
                                </div>
                                <div class="cases__slide-item cases__slide-item--2">
                                    <p class="cases__slide-descr cases__slide-descr--color">
                                        Точка Б / Результат
                                    </p>
                                    <div class="cases__slide-content">
                                        <?php the_sub_field('case-b-content'); ?>
                                    </div>
                                </div>
                                <div class="cases__slide-item cases__slide-item--3">
                                    <p class="cases__slide-descr">Что сделано</p>
                                    <div class="cases__slide-content">
                                        <?php the_sub_field('case-work-content'); ?>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="cases__scrollbar"></div>
        </div>
    </section>
<?php endif; ?>