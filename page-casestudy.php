<?php
/*
Template Name: Case Study
*/
?>

<?php get_header(); ?>
	<section id="content" class="clearfix">
		<?php get_sidebar(); ?>
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix entry'); ?>>
				<h1><?php the_title(); ?></h1>
				<div class="center"><?php 
				 if ( has_post_thumbnail()) {
				   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
				   echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" class="' . fancybox .'">';
				   echo get_the_post_thumbnail($post->ID, 'screen-shot'); 
				   echo '</a>';
				 }
				?></div>
			</article> <!-- end article -->
		<?php endwhile; endif; ?>

	</section><!--End Content-->
<?php get_footer(); ?>