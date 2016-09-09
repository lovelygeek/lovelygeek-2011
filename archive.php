<?php get_header(); ?>
	<section id="content" class="clearfix">
		<?php get_sidebar(); ?>

		<?php if (have_posts()) : ?>
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	 	
		<?php /* If this is a category archive */ if (is_category()) { ?>
			<h1>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h1>
	 	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
			<h1>Archive for <?php the_time('F jS, Y'); ?></h1>
	 	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<h1>Archive for <?php the_time('F, Y'); ?></h1>
	 	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<h1>Archive for <?php the_time('Y'); ?></h1>
		<?php /* If this is an author archive */ } elseif (is_author()) { ?>
			<h1>Author Archive</h1>
	 	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h1>Blog Archives</h1>
	 	<?php } ?>
	
		<?php while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix entry'); ?>>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> on <?php the_time('D, F jS, Y @ g:ia') ?></h3>
				<p><?php echo substr(strip_tags(get_the_content()),0,140); ?>&#8230;<a href="<?php the_permalink(); ?>" class="readmore">Read more &raquo;</a></p> 
				<hr />
			</article> <!-- end article -->
		<?php endwhile; ?>
	
		<?php else : ?>
			<article <?php post_class('clearfix entry'); ?>>
				<h1 class="subject">Not Found</h1>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</article> <!-- end article -->
		<?php endif; ?>
	
		<div class="browse">
			<p class="older"><?php next_posts_link('&laquo; Older Posts '); ?></p>
			<p class="newer"><?php previous_posts_link('Newer Posts &raquo;'); ?></p>
		</div>
	
	</section><!--End Content-->
<?php get_footer(); ?>