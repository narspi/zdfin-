<?php get_header(); ?>
<div class="page-wrapper">
    <div class="container">
        <h1 class="page-wrapper__title"><?php the_title(); ?></h1>
        <div class="page-wrapper__content">
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>