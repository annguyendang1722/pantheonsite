<?php
/**
 * The blog template file.
 *
 * @package flatsome
 */
get_header();
?>

<div id="content" class="<?php echo get_post_type(); ?>-wrapper <?php echo get_post_type(); ?>-single page-wrapper">
	<?php get_template_part( 'template-parts/'. get_post_type().'s/single'); ?>
</div>

<?php get_footer();
?>