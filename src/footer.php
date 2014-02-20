	<div class="wrapper shadow">
        <div class="container">
			<footer id="footer">
				<div class="row">
					<div class="col-sm-10 solid">
						<div id="footer-sidebar">
							<?php //dynamic_sidebar('Footer'); ?>
							<?php 
							    echo do_shortcode("[metaslider id=120]"); 
							?>
						</div>
					</div>
					<div id="social" class="col-sm-2 solid">
						<img id="facebook" src="/assets/images/facebook.png" />
						<img id="linkedin" src="/assets/images/linkdin.png" />
					</div>
				</div>
			</footer>
		</div>
    </div>
	<div class="wrapper solid light-green">
        <div class="container">
			<footer id="copyright">
				<div class="row">
					<div class="col-sm-12">
						<div id="copyright-sidebar">
							<?php dynamic_sidebar('Footer'); ?>
						</div>
					</div>
				</div>
			</footer>
		</div>
    </div>

        <?php wp_footer(); ?>

        <!-- build:js(.tmp) scripts/main.js -->
        <script src="../src/assets/scripts/vendor/highlight.pack.js"></script>
        <script src="assets/scripts/highlight.js"></script>
        <!-- endbuild -->
    </body>
</html>
