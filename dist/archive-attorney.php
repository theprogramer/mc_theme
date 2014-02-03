<?php get_header(); ?>
<h1>Attorney</h1>
<section id="main" role="main">

    <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('templates/partials/content', 'single'); ?>

        <?php comments_template(); ?>

    <?php endwhile; ?>

</section> <!-- /#main -->

<?php get_footer(); ?>
