<?php
/**
 * The template used for displaying page content in single.php
 *
 * @package wildly-minimalistic
 * @since wildly-minimalistic 2.5
 */
?>
<h1>Single</h1>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1><?php the_title(); ?></h1>

    <?php get_template_part('templates/partials/inc', 'comments-link'); ?>

    <div class="entry">
        <?php the_content(); ?>

        <?php wp_link_pages(array(
            'before' => 'Pages: ',
            'next_or_number' => 'number',
        )); ?>

        <?php get_template_part('templates/partials/inc', 'meta'); ?>

        <nav class="post-navigation">
            <span class="navigation-next"><?php previous_post_link(); ?></span>
            <span class="navigation-previous"><?php next_post_link(); ?></span>
        </nav>
    </div>
</article>
