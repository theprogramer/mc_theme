	<div id="wrapper-footer">
		<div class="wrapper shadow">
	        <div class="container">
				<footer id="footer">
					<div class="row">
						<div class="col-xs-10 solid">
							<div id="footer-sidebar">
								<?php //dynamic_sidebar('Footer'); ?>
								<?php 
								    echo do_shortcode("[metaslider id=120]"); 
								?>
							</div>
						</div>
						<div id="social" class="col-xs-2 solid">
							<a href="https://www.facebook.com/martini.claro.3"><img id="facebook" src="<?php bloginfo('template_directory'); ?>//assets/images/facebook.png" /></a>
							<a href="https://linkedin.com"><img id="linkedin" src="<?php bloginfo('template_directory'); ?>//assets/images/linkdin.png" /></a>
						</div>
					</div>
				</footer>
			</div>
	    </div>
		<div class="wrapper solid light-green">
	        <div class="container">
				<footer id="copyright">
					<div class="row">
						<div class="col-xs-12">
							<div id="copyright-sidebar">
								<?php dynamic_sidebar('Footer'); ?>
							</div>
						</div>
					</div>
				</footer>
			</div>
	    </div>
    </div>

        <?php wp_footer(); ?>

        <script src="<?php bloginfo('template_directory'); ?>/scripts/main.js"></script>
    </body>
</html>
