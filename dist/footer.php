        <div id="sidebar">
            <?php get_sidebar(); ?>
        </div> <!-- /#sidebar -->

		<div class="container">
			<footer id="footer">
				<div class="row">
					<div class="col-sm-6 shadow">
						<?php //dynamic_sidebar('Footer'); ?>
					</div>
					<div class="col-sm-6 solid">
					</div>
				</div>
			</footer>
		</div>

        <?php wp_footer(); ?>

        <script src="<?php bloginfo('template_directory'); ?>/scripts/main.js"></script>
    </body>
</html>
