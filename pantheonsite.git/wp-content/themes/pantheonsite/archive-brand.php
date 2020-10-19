<?php get_header(); ?>

<div class="<?php echo get_post_type(); ?>-page-wrapper <?php echo get_post_type(); ?>-archive page-featured-item">
    <?php get_template_part('template-parts/'. get_post_type() .'s/archive'); ?>
</div>

<?php get_footer(); ?>
