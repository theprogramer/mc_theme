<?php get_header(); ?>
<div class="container">
	<div class="row">
		<section id="main" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php get_template_part('templates/partials/content', get_post_format()); ?>

			<?php endwhile; ?>

				<?php get_template_part('templates/partials/inc', 'nav'); ?>

			<?php else : ?>

				<article class="col-sm-12">
				    <h1>Not Found</h1>
				</article>

			<?php endif; ?>

		</section> <!-- /#main -->
	</div>
</div>

<?php get_footer(); ?>
