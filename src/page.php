<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-3 light-green">
			<div id="sidebar">
		        <?php get_sidebar(); ?>
			</div>
		</div>
		<div class="col-sm-9 solid-white">
			<section id="main" role="main">

				<?php while (have_posts()) : the_post(); ?>

					<?php get_template_part('templates/partials/content', 'page'); ?>

				<?php endwhile; ?>

			</section> <!-- /#main -->
		</div>
	</div>
</div>
<?php get_footer(); ?>
