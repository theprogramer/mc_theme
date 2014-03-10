<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
<div id="navigator" class="wrapper solid light-green">
    <div class="container">
	    <div class="row">
		    <divclass="col-xs-12 solid light-green">
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
    </div>
</div>
<div class="content-wrapper" >
	<div class="container">
	    <section id="main" role="main" class="col-xs-12">

	        <?php while ( have_posts() ) : the_post(); ?>

	            <?php the_content(); ?>
	            <?php //get_template_part( 'templates/partials/content', 'page' ); ?>

	        <?php endwhile; ?>
	    </section> <!-- /#main -->
	</div>
</div>
<?php get_footer(); ?>
