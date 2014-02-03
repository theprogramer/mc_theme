<?php
/**
 * The template used for displaying page content in single.php
 *
 * @package wildly-minimalistic
 * @since wildly-minimalistic 2.5
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1><?php the_title(); ?></h1>

    <?php //get_template_part('templates/partials/inc', 'comments-link'); ?>

	<div class="row">

		<div class="entry col-sm-7">
			<?php the_content(); ?>

			<?php //get_template_part('templates/partials/inc', 'meta'); ?>
		</div>
		<div class="col-sm-5">
			<?php $custom_fields = get_post_custom();?>
			<?php if (isset($custom_fields['Email'])) : ?>
				<span>Email:</span>&nbsp;<a href="mailto://<?php echo $custom_fields['Email'][0]; ?>"><?php echo $custom_fields['Email'][0]; ?></a>
			<?php endif; ?>
			<br />
			<?php if (isset($custom_fields['Telephone'])) : ?>
				<span>Telephone:</span>&nbsp;<a href="tel:<?php echo $custom_fields['Telephone'][0]; ?>"><?php echo $custom_fields['Telephone'][0]; ?></a>
			<?php endif; ?>
			<br />
			<?php if (isset($custom_fields['Fax'])) : ?>
				<span>Fax:</span>&nbsp;<a href="tel:<?php echo $custom_fields['Fax'][0]; ?>"><?php echo $custom_fields['Fax'][0]; ?></p>
			<?php endif; ?>
			<br />
		</div>
	</div>
</article>
