<?php get_header(); ?>
<div class="container">
	<div id="slider" class="row">
		<div class="col-sm-12"></div>
	</div>
	<h1>asdasd</h1>
	<div class="row">
		<div class="col-sm-12 solid light-green">
			<nav id="main-nav" class="nav nav-tabs">
				<?php wp_nav_menu( array(
						'menu'              => 'primary',
						'theme_location'    => 'primary',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
					);
				?>
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
