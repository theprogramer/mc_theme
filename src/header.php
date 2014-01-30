<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:600,300,300italic|The+Girl+Next+Door" rel="stylesheet" type="text/css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="container">
		<header id="header">
		    <div class="row">
				<div class="col-sm-6 solid">
					<a href="<?php echo home_url('/'); ?>">
						<img id="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" />
					</a>
				</div>
				<div class="col-sm-6 shadow">
				</div>
			</div>
		</header>
	</div>
