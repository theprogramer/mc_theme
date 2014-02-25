<?php
/*
Template Name: Operation Page
*/
?>

<?php get_header(); ?>
<div class="content-wrapper" >
	<div class="container">
	    <section id="main" role="main" class="col-sm-12">

	        <?php while ( have_posts() ) : the_post(); ?>

	            <?php get_template_part( 'templates/partials/content', 'page' ); ?>

	        <?php endwhile; ?>

	    </section> <!-- /#main -->
	</div>
</div>
<?php get_footer(); ?>
