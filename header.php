<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php if (is_front_page()) { bloginfo('name'); } else { wp_title(''); } ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png?v=2">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>
		<!-- Font Awesmome CDN -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<?php global $brew_options; ?>

	<body <?php body_class(); ?>>

    <header class="header clearfix">

      <nav role="navigation" class="navbar navbar-default bg-faded">
				<div class="container">
					<div class="row">
						<div class="logo col-md-3">

							<?php if (!empty($brew_options['site-logo']['url'])) { ?>
								<a class="navbar-brand site-brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage">
									<img class="img-logo" src="<?php echo $brew_options['site-logo']['url'] ?>">
								</a>
							<?php } else { ?>
								<a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage"><?php bloginfo('name'); ?></a>
							<?php } ?>

						</div>

						<button
							class="navbar-toggler hidden-lg-up pull-right"
							type="button"
							data-toggle="collapse"
							data-target="#mainCollapsingNav"
							aria-controls="mainCollapsingNav"
							aria-expanded="false"
							aria-label="Toggle navigation">
							&#9776;
						</button>

						<div id="mainCollapsingNav" class="col-lg-9 col-md-12 collapse navbar-toggleable-md">
							<?php bones_main_nav(); ?>
						</div>

					</div>
				</div>
      </nav>

		</header> <?php // end header ?>
