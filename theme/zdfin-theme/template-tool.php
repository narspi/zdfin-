<?php
/* Template name: Инструменты эллемент */
get_header();
?>
<div class="tool-page">
    <div class="container">
        <div class="title"><?php the_title(); ?></div>
        <div class="tool-page__content">
            <div class="tool-page__row">
                <div class="tool-page__row-item">
                    <p class="tool-page__row-title">Что это?</p>
                    <div class="tool-page__row-content">
                        <?php the_field('row-item-left'); ?>
                    </div>
                </div>
                <div class="tool-page__row-item">
                    <p class="tool-page__row-title">Как мы работаем?</p>
                    <div class="tool-page__row-content">
                        <?php the_field('row-item-right'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tool-page__bot">
            <div class="tool-page__bot-content">
                <p class="tool-page__bot-title">Результат</p>
                <div class="tool-page__bot-descr">
                    <?php the_field('bot-descr'); ?>
                </div>
            </div>
            <div class="tool-page__bot-info">
                <p class="tool-page__bot-price"><?php the_field('bot-price'); ?></p>
                <div class="tool-page__bot-text">
                    <?php the_field('bot-info-text'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>