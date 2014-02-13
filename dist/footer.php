	<div class="wrapper shadow">
        <div class="container">
			<footer id="footer">
				<div class="row">
					<div class="col-sm-6">
						<div id="footer-sidebar">
							<?php //dynamic_sidebar('Footer'); ?>
						</div>
					</div>
					<div id="social" class="col-sm-6 solid">
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

        <script src="<?php bloginfo('template_directory'); ?>/scripts/main.js"></script>
    </body>
</html>
