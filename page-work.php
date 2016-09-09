<?php
/*
Template Name: Work - page with no sidebar
*/
?>

<?php get_header(); ?>
	<section id="content" class="clearfix">
		<div id="gallery">
		<?php the_title( '<h1>', '</h1>' ); ?>
			<?php query_posts('post_type=page&post_parent=12&posts_per_page=9'); while (have_posts()) : the_post(); ?>
				<article class="workbox">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('work-thumb'); ?></a>
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<?php the_meta(); ?>
				</article>
			<?php endwhile; ?>
	<?php wp_reset_query();?>
	</div><!--#gallery-->
	</section><!--End Content-->
<?php get_footer(); ?>