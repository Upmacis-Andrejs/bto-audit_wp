<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<meta name="format-detection" content="telephone=no">
		<link href="//www.google-analytics.com" rel="dns-prefetch">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- add link to fonts CDN -->

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper" id="body-wrapper">

			<!-- header -->
			<header class="header headroom z-99 clear" id="site-header" role="banner">
				<div class="container flex h-100">
					<div class="row">
						<a class="float-left" id="nav-icon" href="#" data-aos="fade-down" data-aos-delay="500" data-aos-duration="700">
						  <span></span>
						  <span></span>
						  <span></span>
						  <span></span>
						</a>
						<div class="header-logo flex-vert-c float-right" data-aos="fade-down" data-aos-delay="750" data-aos-duration="700">
							<?php my_custom_logo(); ?>
						</div>
					</div>
					<div class="row flex-vert-b nav-wrapper">
						<!-- nav -->
						<div class="visuallyhidden" id="preload-nav-bg-img"></div>
						<nav class="nav hidden hyphenate" role="navigation">
							<?php btoaudit_nav(); ?>
						</nav>
						<!-- /nav -->
					</div>
				</div>
			</header>
			<!-- /header -->
