<?php get_header(); ?>
<div class="container">
	<div id="slider" class="row">
		<div class="col-sm-12"></div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<nav id="main-nav" class="nav nav-tabs">
				<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
			</nav>
		</div>
	</div>
	<div class="row">
		<section id="main" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php get_template_part('templates/partials/content', get_post_format()); ?>
<h1>--------</h1>

			<?php endwhile; ?>

				<?php //get_template_part('templates/partials/inc', 'nav'); ?>

			<?php else : ?>

				<article class="col-sm-12">
				    <h1>Not Found</h1>
				</article>

			<?php endif; ?>

		</section> <!-- /#main -->
	</div>
</div>

<?php get_footer(); ?>
