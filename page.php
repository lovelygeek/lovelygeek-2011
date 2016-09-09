<?php get_header(); ?>
	<section id="content" class="clearfix">
		<?php get_sidebar(); ?>
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix entry'); ?>>
				<h1><?php the_title(); ?></h1>
				<?php the_content('Read the rest of this entry &raquo;'); ?>
			</article> <!-- end article -->

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?> 

		<?php endwhile; endif; ?>
	</section><!--End Content-->
<?php get_footer(); ?>