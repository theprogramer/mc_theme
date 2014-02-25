<?php get_header(); ?>
<div class="content-wrapper" >
	<div class="container">
		<div class="row">
			<div class="col-sm-3" style="padding:0;">
				<div id="left-menu" class="light-green">
					<div id="sidebar">
				        <?php get_sidebar(); ?>
					</div>
				</div>
			</div>
			<div class="col-sm-9 solid-white">
				<a href="<?php echo home_url('/'); ?>">
					<img id="close" src="<?php echo get_template_directory_uri(); ?>/assets/images/close.png" />
		    	</a>
				<section id="main" role="main">

					<?php while (have_posts()) : the_post(); ?>

						<?php get_template_part('templates/partials/content', 'page'); ?>

					<?php endwhile; ?>

				</section> <!-- /#main -->
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
