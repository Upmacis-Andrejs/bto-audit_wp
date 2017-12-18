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
    <!--[if lte IE 9]>
    <div id="update_browser_fake_body">
        <div id="update_browser_container">
            <div id="update_browser">
                <div id="update_browser_inner">
                    <h1>Lūdzu atjauniniet savu pārlūkprogrammu</h1>
                    <p>Jūs izmantojat novecojušu interneta pārlūkprogrammas versiju, kura netiek tehniski atbalstīta. Tādējādi atsevišķas mājas lapas funkcijas nav pieejamas vai darbojas nekorekti. Izmantojot zemāk norādīto informāciju, lūdzam atjaunot vai izmantot citu interneta pārlūkprogrammas versiju.</p>
                    <p>Bezmaksas interneta pārlūki - visi pārlūki veic tās pašas pamatfunkcijas un ir ērti lietojami.<br>
                    Izvēlies, kuru pārlūku vēlies lejupielādēt:</p>
                    <div id="browser_icon_wrap" class="clear">
                        <a href="http://www.mozilla.org/en-US/firefox/new/" id="firefox" class="browser_link">
                            <span class="browser_icon">&nbsp;</span>
                            <span class="browser_name">Mozilla Firefox</span>
                        </a>
                        <a href="https://www.google.com/intl/en/chrome/browser/" id="chrome" class="browser_link">
                            <span class="browser_icon">&nbsp;</span>
                            <span class="browser_name">Google Chrome</span>
                        </a>
                        <a href="http://www.opera.com/" id="opera" class="browser_link">
                            <span class="browser_icon">&nbsp;</span>
                            <span class="browser_name">Opera</span>
                        </a>
                        <a href="https://safari.en.softonic.com/" id="safari" class="browser_link">
                            <span class="browser_icon">&nbsp;</span>
                            <span class="browser_name">Safari</span>
                        </a>
                        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge" id="edge" class="browser_link">
                            <span class="browser_icon">&nbsp;</span>
                            <span class="browser_name">Microsoft Edge</span>
                        </a>
                    </div>
                    <div id="close_announcement_wrap">
                        <a href="#" id="close_announcement">Aizvērt</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <![endif]-->
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
