<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<nav id="main-nav" class="nav nav-tabs">
				<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
			</nav>
		</div>
	</div>
</div>
<div class="container">
    <section id="main" role="main" class="col-sm-12">

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'templates/partials/content', 'page' ); ?>

        <?php endwhile; ?>
		<h1>--------</h1>

    </section> <!-- /#main -->
</div>
<?php get_footer(); ?>
