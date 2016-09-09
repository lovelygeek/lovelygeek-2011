<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<div id="banner">
	<div class="flexslider">
		<ul class="slides">
		<li>
			<a href="http://www.lovelygeek.net/work/abmi-corp/"><img src="<?php bloginfo('template_url'); ?>/images/abmi.jpg" alt="Featured Work - ABMI" /></a>
			<p class="flex-caption">ABMI Corp - All Business Machines, Inc</p>
		</li>
		<li>
			<a href="http://www.lovelygeek.net/work/zappettini-bradley/"><img src="<?php bloginfo('template_url'); ?>/images/zblawoffice.jpg" alt="Featured Work - ZB Law Office" /></a>
			<p class="flex-caption">The Law Office of Zappettini &amp; Bradley</p>
		</li>
		<li>
			<a href="http://www.lovelygeek.net/work/morgans-restaurant/"><img src="<?php bloginfo('template_url'); ?>/images/morgans.jpg" alt="Featured Work - Morgan's Restaurant" /></a>
			<p class="flex-caption">Morgan's Restaurant - Step up, Sit Back, and Savor</p>
		</li>
		</ul>
	</div><!--flexslider-->
</div><!--banner-->
	
	<section id="pathwayBucket">
		<article class="pathway">
			<h2>About Me</h2>
			<div class="bucket">
			<a href="http://www.flickr.com/photos/darth_cena/5864621387/" title="Cristina Robinson"><img src="http://farm6.static.flickr.com/5066/5864621387_9562d63bb8_t.jpg" width="100" height="100" alt="Cristina Robinson" class="alignleft" /></a>
			Hello! My name is Cristina Robinson, and I am a web professional based in Sacramento, California. I like to create web sites that are clean, simple, and use web standards.
			<p class="btn-home"><a href="<?php bloginfo('url'); ?>/about/">More About Me &raquo;</a></p> 
			</div>
		</article>

		<article class="pathway">
			<h2>What I Do</h2>
			<div class="bucket">
			<p><img src="<?php bloginfo('template_url'); ?>/images/coding.png" alt="code" class="alignleft" /> CODING<br /><small>HTML, CSS, PHP, Javascript, jQuery</small></p>
			<p><img src="<?php bloginfo('template_url'); ?>/images/design.png" alt="design" class="alignleft" /> DESIGN<br /><small>Web design, logos, interface</small></p>
			<p><img src="<?php bloginfo('template_url'); ?>/images/wordpress.png" alt="wordpress" class="alignleft" /> WORDPRESS <br /><small>Design and site build for Wordpress</small></p>
			<p class="btn-home"><a href="<?php bloginfo('url'); ?>/work/">See My Work &raquo;</a></p> 
			</div>
		</article>
		
		<article class="pathway">	
		<h2>From the Blog</h2>
			<div class="bucket">
				<?php query_posts('posts_per_page=1'); while (have_posts()) : the_post(); ?>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('front-thumb', array('class' => 'alignleft')); ?></a>
				<h4><a href="<?php the_permalink(); ?>"><?php echo substr(strip_tags(get_the_title()),0,17); ?>...</a></h4>
				<?php the_time('F jS, Y'); ?>
	            <p><?php echo substr(strip_tags(get_the_content()),0,90); ?>...
	            <a href="<?php the_permalink(); ?>" class="readmore">Read more &raquo;</a></p> 
				<?php endwhile;?>
	  			<p class="btn-home"><a href="<?php echo site_url(); ?>/blog/">View the Blog &raquo;</a></p>          
	  			<?php wp_reset_query();?>
			</div>
		</article>
	</section>

<div id="twitter">
	<strong><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" alt="Follow me on Twitter!" class="middle" /> <a href="http://twitter.com/#!/DarthCena" title="Follow me on Twitter!">DarthCena</a></strong> - <?php twitter_messages("darthcena", 1, false); ?>
</div>
<?php get_footer(); ?>