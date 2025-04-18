<?php
$pages = get_pages([
    'meta_key' => '_wp_page_template',
    'meta_value' => 'template-businesses.php',
    'hierarchical' => 0,
    'sort_column' => 'menu_order',
    'sort_order' => 'asc'
]);
?>
<?php if ($pages): ?>
    <section class="businesses">
        <div class="container">
            <h2 class="title businesses__title">
                Кому подходит финансовая аналитика?
            </h2>
            <p class="businesses__descr">
                Независимо от масштаба, четкое управление финансами – основа успеха.
            </p>
            <div class="businesses__list">
                <?php foreach ($pages as $key => $page): ?>
                    <?php
                    $businesses__title = get_the_title($page->ID);
                    $businesses__url = get_the_post_thumbnail_url($page->ID, 'large');
                    $businesses__descr = get_field('businesses-descr', $page->ID);
                    ?>
                    <article class="businesses__list-item" style="background-image: url('<?= $businesses__url; ?>')">
                        <div class="businesses__list-content">
                            <h3 class="businesses__list-title"><?php echo esc_html($businesses__title); ?></h3>
                            <p class="businesses__list-descr">
                                <?php echo esc_html($businesses__descr); ?>
                            </p>
                            <a href="<?php the_permalink($page->ID) ?>" class="businesses__list-btn">Подробнее</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
            <div class="businesses__bot">
                <button class="btn-light" data-modal="modal-1">Получить бесплатную консультацию</button>
            </div>
        </div>
    </section>
<?php endif; ?>