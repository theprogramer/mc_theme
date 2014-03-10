<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-xs-3" style="padding:0;">
			<div id="left-menu" class="light-green">
				<div id="sidebar">
			        <?php get_sidebar(); ?>
				</div>
			</div>
		</div>
		<div class="col-xs-9 solid-white">
			<a href="<?php echo home_url('/'); ?>?lang=<?php echo $_GET['lang']; ?>">
				<img id="close" src="<?php echo get_template_directory_uri(); ?>/assets/images/close.png" />
	    	</a>
    		<section id="main" role="main">
				<?php while (have_posts()) : the_post(); ?>

					<?php get_template_part('templates/partials/content', 'single'); ?>

					<?php comments_template(); ?>

				<?php endwhile; ?>

			</section> <!-- /#main -->
		</div>
	</div>
</div>

<?php get_footer(); ?>
