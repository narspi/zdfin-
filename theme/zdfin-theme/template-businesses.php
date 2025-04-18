<?php
/* Template name: Шаблон бизнес */
get_header();
?>
<div class="new-page">
    <div class="container">
        <h1 class="title"><?php echo esc_html(the_title('', '', false)); ?></h1>
        <div class="new-page__content">
            <?php the_content(); ?>
        </div>
        <div class="decor-list">
            <p class="decor-list__title">Мы помогаем:</p>
            <ol class="decor-list__items">
                <li class="decor-list__item">
                    <span class="decor-list__text--bold">Оптимизировать расходы</span>
                    <span class="decor-list__text--semibold">— исключаем ненужные траты и перераспределяем бюджет</span>
                </li>
                <li class="decor-list__item">
                    <span class="decor-list__text--bold">Анализировать прибыльность товаров и услуг</span>
                    <span class="decor-list__text--semibold">— выявляем наиболее доходные направления.</span>
                </li>
                <li class="decor-list__item">
                    <span class="decor-list__text--bold">Планировать денежные потоки</span>
                    <span class="decor-list__text--semibold">— прогнозируем поступления и обязательные платежи, чтобы
                        избежать нехватки средств.</span>
                </li>
                <li class="decor-list__item">
                    <span class="decor-list__text--bold">Автоматизировать учет</span>
                    <span class="decor-list__text--semibold">— внедряем простые и понятные финансовые инструменты для
                        контроля бизнеса.</span>
                </li>
            </ol>
            <div class="decor-list__bot">
                <?php $descr = get_field('list-descr'); ?>
                <p class="decor-list__bot-descr"> <?php echo esc_html($descr); ?></p>
                <button class="decor-list__btn" data-modal="modal-1">Получить бесплатную консультацию</button>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>