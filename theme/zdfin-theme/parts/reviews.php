<?php if (have_rows('reviews-list')): ?>
    <section class="reviews" id="reviews">
        <div class="reviews__container">
            <h2 class="title reviews__title">отзывы</h2>
        </div>
        <div class="reviews__shift">
            <div class="reviews__slider">
                <ul class="reviews__list">
                    <?php while (have_rows('reviews-list')):
                        the_row(); ?>
                        <li class="reviews__item">
                            <img src="<?php the_sub_field('reviews-img'); ?>" alt="<?php the_sub_field('reviews-alt'); ?>"
                                class="reviews__img" />
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </section>
<?php endif; ?>