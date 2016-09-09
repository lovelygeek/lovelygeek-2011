<?php get_header(); ?>
	<section id="content" class="clearfix">
		<?php get_sidebar(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix entry'); ?>>

				<h1 class="subject"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				
				<p class="meta">
					<?php the_time('l, F jS, Y') ?> @ <?php the_time() ?> in <?php the_category(', '); ?> 
					<img src="<?php bloginfo( 'template_url' ); ?>/images/comments.png" alt="" class="middle" /> <?php wp_link_pages(); ?><a href="<?php comments_link(); ?>"><?php comments_number('No Comments','1 Comment','% Comments'); ?></a>
					<?php edit_post_link('Edit &raquo;', '&oslash; ', ''); ?>
				</p>

				<?php the_content('Read the rest of this entry &raquo;'); ?>

				<p>&nbsp;</p>
			
				<?php comments_template(); // Get wp-comments.php template ?>

		</article> <!-- end article -->

		<div class="browse">
			<p class="next"><?php next_post_link('%link &raquo;'); ?></p>
			<p class="previous"><?php previous_post_link('&laquo; %link'); ?></p>
		</div>

		<?php endwhile; endif; ?>
		
	</section><!--End Content-->
<?php get_footer(); ?>

