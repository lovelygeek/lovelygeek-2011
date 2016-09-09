		<footer>
		<p class="center">&copy; Cristina Robinson 2010-<?php echo date("Y") ?>. All rights reserved. 
		<a href="http://qbee.lovelygeek.net" title="View my Quilting Bee quilt!"><img src="<?php bloginfo( 'template_url' ); ?>/images/qbee.gif" alt="" class="middle" /></a></p>
		</footer>

	</div> <!--Ends Container-->
	
		<!--EDIT FUNCTIONS.PHP FOR GOOGLE ANALYTICS-->
		
		<!-- Place all scripts here, with the scripts.js file last. Scripts are now optimized via Modernizr.load -->
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/mylibs/jquery.flexslider.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/mylibs/jquery.fancybox.pack.js?v=2.0.1"></script>	
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>
		
		<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
		chromium.org/developers/how-tos/chrome-frame-getting-started -->
		<!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>