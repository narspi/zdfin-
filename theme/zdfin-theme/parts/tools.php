<?php
$pages = get_pages([
    'meta_key' => '_wp_page_template',
    'meta_value' => 'template-tool.php',
    'hierarchical' => 0,
    'sort_column' => 'menu_order',
    'sort_order' => 'asc'
]);
?>

<?php if ($pages): ?>
    <section class="tools" id="tools">
        <div class="tools__container">
            <div class="tools__grid">

                <?php
                $first_page = array_shift($pages);
                $tool_title = get_the_title($first_page->ID);
                $tool_description = get_field('tool-descr', $first_page->ID);
                $tool_price = get_field('bot-price', $first_page->ID);
                $tool_link = get_page_link($first_page->ID);
                ?>
                <article class="tools__item">
                    <h3 class="tools__item-title"><?php echo esc_html($tool_title); ?></h3>
                    <p class="tools__item-descr"><?php echo esc_html($tool_description); ?></p>
                    <div class="tools__item-bot">
                        <p class="tools__item-price"><?php echo esc_html($tool_price); ?></p>
                        <a href="<?php echo esc_url($tool_link); ?>" class="btn">Подробнее</a>
                    </div>
                </article>


                <div class="tools__intro">
                    <h2 class="tools__title">Какие инструменты мы используем?</h2>
                    <div class="tools__intro-content">
                        <p>
                            В своей работе применяем только проверенные и эффективные
                            методики:
                        </p>
                        <p>
                            Эти инструменты помогают не только понимать финансовое состояние
                            компании, но и управлять бизнесом осознанно.
                        </p>
                    </div>
                </div>



                <?php
                $next_three = array_splice($pages, 0, 3);
                foreach ($next_three as $page): ?>
                    <?php
                    $tool_title = get_the_title($page->ID);
                    $tool_description = get_field('tool-descr', $page->ID);
                    $tool_price = get_field('bot-price', $page->ID);
                    $tool_link = get_page_link($page->ID);
                    ?>
                    <article class="tools__item">
                        <h3 class="tools__item-title"><?php echo esc_html($tool_title); ?></h3>
                        <p class="tools__item-descr"><?php echo esc_html($tool_description); ?></p>
                        <div class="tools__item-bot">
                            <p class="tools__item-price"><?php echo esc_html($tool_price); ?></p>
                            <a href="<?php echo esc_url($tool_link); ?>" class="btn">Подробнее</a>
                        </div>
                    </article>
                <?php endforeach; ?>

                <div class="tools__decor"></div>

                <?php
                $next_page = array_shift($pages);
                $tool_title = get_the_title($next_page->ID);
                $tool_description = get_field('tool-descr', $next_page->ID);
                $tool_price = get_field('bot-price', $next_page->ID);
                $tool_link = get_page_link($next_page->ID);
                ?>
                <article class="tools__item tools__item--desc-2-3">
                    <h3 class="tools__item-title"><?php echo esc_html($tool_title); ?></h3>
                    <p class="tools__item-descr"><?php echo esc_html($tool_description); ?></p>
                    <div class="tools__item-bot">
                        <p class="tools__item-price"><?php echo esc_html($tool_price); ?></p>
                        <a href="<?php echo esc_url($tool_link); ?>" class="btn">Подробнее</a>
                    </div>
                </article>

                <?php
                $next_page = array_shift($pages);
                $tool_title = get_the_title($next_page->ID);
                $tool_description = get_field('tool-descr', $next_page->ID);
                $tool_price = get_field('bot-price', $next_page->ID);
                $tool_link = get_page_link($next_page->ID);
                ?>
                <article class="tools__item tools__item--desc-3-4">
                    <h3 class="tools__item-title"><?php echo esc_html($tool_title); ?></h3>
                    <p class="tools__item-descr"><?php echo esc_html($tool_description); ?></p>
                    <div class="tools__item-bot">
                        <p class="tools__item-price"><?php echo esc_html($tool_price); ?></p>
                        <a href="<?php echo esc_url($tool_link); ?>" class="btn">Подробнее</a>
                    </div>
                </article>

                <?php
                $next_page = array_shift($pages);
                $tool_title = get_the_title($next_page->ID);
                $tool_description = get_field('tool-descr', $next_page->ID);
                $tool_price = get_field('bot-price', $next_page->ID);
                $tool_link = get_page_link($next_page->ID);
                ?>
                <article class="tools__item tools__item--desc-4-5">
                    <h3 class="tools__item-title"><?php echo esc_html($tool_title); ?></h3>
                    <p class="tools__item-descr"><?php echo esc_html($tool_description); ?></p>
                    <div class="tools__item-bot">
                        <p class="tools__item-price"><?php echo esc_html($tool_price); ?></p>
                        <a href="<?php echo esc_url($tool_link); ?>" class="btn">Подробнее</a>
                    </div>
                </article>

                <div class="tools__bottom">
                    <div class="tools__bottom-decor"></div>
                    <p class="tools__bottom-text">
                        Первичная онлайн- консультация с финансовым директором
                        <span style="color: #2b660b">бесплатно</span>
                    </p>
                </div>

            </div>

        </div>
    </section>
<?php endif; ?>