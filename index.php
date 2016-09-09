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

				<!--storycontent-->
				<?php the_content('Read the rest of this entry &raquo;'); ?>
				<!--storycontent-->

				<p>&nbsp;</p>
			
			</article> <!-- end article -->		
					
			<?php comments_template(); ?>
				
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
				
        <div class="browse">  
            <p class="older"><?php next_posts_link('&laquo; Older Posts') ?></p>  
            <p class="newer"><?php previous_posts_link('Newer Posts &raquo;') ?></p>  
        </div>  
	</section><!--End Content-->
<?php get_footer(); ?>