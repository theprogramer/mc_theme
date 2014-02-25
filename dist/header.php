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
	<div id="wrapper-header">
    	<div class="wrapper shadow">
		    <div class="container">
			    <header id="header">
			        <div class="row">
					    <div class="col-sm-6 solid">
						    <a href="<?php echo home_url('/'); ?>">
						    	<?php if ($_GET['lang']=='pt-BR') : ?>
									<img id="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" />
								<?php else: ?>
									<img id="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_en.png" />
								<?php endif; ?>	
						    </a>
					    </div>
					    <div id="flags" class="col-sm-2">
					    </div>
					    <div id="subtitle" class="col-sm-4">
					    	<?php if ($_GET['lang']=='pt-BR') : ?>
								<h3 class="text-center">52 ANOS</h3>
						    	<p class="text-center">Tradição & Sucesso!</p>
							<?php else: ?>
								<h3 class="text-center">52 YEARS</h3>
								<p class="text-center">Tradition & Success!</p>
							<?php endif; ?>
					    </div>
				    </div>
			    </header>
		    </div>
    	</div>
    </div>