<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="content">
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
<div class="post">
	<div class="blog">
		<div class="post" id="post-<?php the_ID(); ?>"><div class="subject"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> on <?php the_time('D, F jS, Y @ g:ia') ?></div>
	</div>
</div>

<div class="excerpt">
<?php the_excerpt(); ?>
</div>

<p class="centerize">- - -</p>
</div>
<?php endwhile; ?>

<?php else : ?>
<h1 class="center">Not Found</h1>
<?php include (TEMPLATEPATH . '/searchform.php'); ?>
<?php endif; ?>

<div class="browse">
<?php posts_nav_link(' &oslash; ', __('<img src="http://darth-cena.net/blog/wp-content/themes/version23/images/arrowleft.png" alt="left" class="middle" /> Previous 3 entries'), __('Next 3 entries <img src="http://darth-cena.net/blog/wp-content/themes/version23/images/arrowright.png" alt="right" class="middle" />')); ?>
</div>

</div><!--Blog Div-->
<?php get_footer(); ?>