<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/pelican-theme-icon.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Prata" rel="stylesheet">
		<!-- End Google Fonts -->

		<!-- Icons -->
		<script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
		<!-- End Icons -->


		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

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
	<div class="container">

		<!-- //AD PLACEMENT - TOP BANNER	 -->
		<div class="placeholder-ad-wrap placeholder-ad-wrap--banner-1">
			<div id="placeholder-ad-banner-1">
				<div class="placeholder-ad-img placeholder-ad-img--banner-1"></div>
			</div>
		</div>


		<!-- header -->
		<header class="header" role="banner">
			<div class="branding-bar">
				<div class="branding-bar__left">
					<div class="branding-bar__logo-wrap">
						<!-- <i class="fas fa-crow"></i> -->
						<svg xmlns="http://www.w3.org/2000/svg" width="400" height="400" viewBox="0 0 400 400">
							<ellipse cx="198.594" cy="196.043" rx="178.528" ry="177.9"/>
							<path d="M207.951 120.384c10.301-13.258 19.839-28.33 31.105-33.752 7.37-3.547 21.389-8.826 39.487-6.645 17.27 2.082 28.517 8.48 34.193 20.903 6.92 15.146 7.8 26.337 3.276 49.956-4.032 21.048-15.913 34.036-30.2 52.608-14.285 18.571-37.635 30.95-49.736 50.811-12.09 19.844 24.527 27.531 49.062 24.081 27.125-3.814 76.63-28.394 85.491-25.599-14.023 35.038-52.68 87.93-92.605 107.796-39.925 19.867-99.333 18.493-121.999 11.428-18.37-8.615-33.118-78.656 7.257-112.576 19.586-16.454 47.309-27.593 62.368-38.419 12.88-9.26 21.012-18.672 28.867-27.742 7.746-8.944 16.028-27.446 18.03-38.788 1.054-5.967 2.598-16.318-4.473-24.273-8.717-9.807-18.835-6.99-25.96-5.222-10.398 2.58-22.517 10.592-34.66 19.878-12.143 9.285-44.286 41.428-52.143 50-7.857 8.571-45 50-49.286 55-4.286 5-31.428 27.857-33.571 32.142-2.143 4.286-2.143 11.43-2.143 11.43s-5-13.572-2.857-16.43c2.143-2.857 10-3.57 17.143-11.428 7.142-7.857 35.714-45.714 45.714-56.429 10-10.714 46.125-46.587 53.982-57.3 7.857-10.715 14.395-19.506 23.658-31.43z" fill="#f4f4f4" stroke="#000"/>
							<circle cx="235.571" cy="-107" r="5" transform="scale(1 -1)"/>
							<path d="M243.429 126.286c-21.526 5.947-41.043 26.935-76.072 61.964-19.394 19.394-29.965 33.112-44.124 48.508-14.16 15.395-26.111 24.294-33.932 31.492-10.12 9.315-16.774 12.569-16.803 25.561 9.343-1.537 15.82-3.086 24.841-3.597 9.686-.548 30.692 1.198 44.693-5.648 5.852-11.022 12.734-23.733 33.138-36.169 21.01-12.805 48.46-26.476 59.889-37.905 11.807-11.807 21.04-18.862 30.426-41.053 5.958-14.087 9.215-29.735 2.193-37.273-5.793-6.22-12.53-9.118-24.25-5.88z" fill="#f2e23c"/>
							<g fill="#fff">
								<path d="M254.143 82.714s8.571-3.928 10.714-7.857c2.143-3.928 1.786-12.5 1.786-12.5s3.214 1.786 3.928 5.714c.715 3.929 1.429 8.572-2.142 11.786-3.572 3.214-14.286 2.857-14.286 2.857z"/>
								<path d="M265.526 82.965s10.66-4.633 13.325-9.266c2.665-4.633 2.22-14.741 2.22-14.741s3.998 2.106 4.886 6.739c.889 4.633 1.777 10.108-2.665 13.898-4.441 3.79-17.766 3.37-17.766 3.37z"/>
								<path d="M275.165 81.491s10.456 1.667 14.903-.676c4.448-2.342 9.449-10.592 9.449-10.592s1.892 3.677.114 7.802c-1.777 4.124-4 8.917-9.337 9.7-5.338.783-15.129-6.234-15.129-6.234z"/>
							</g>
							<circle cx="199.429" cy="198" r="178.542" fill="none" stroke="#000" stroke-width="5"/>
						</svg>
					</div>
					<div class="branding-bar__title">
						<span class="font-heading branding-bar__title-text"><?php bloginfo( 'name' ); ?></span>
					</div>
				</div>
				<div class="branding-bar__right">
					<div class="branding-bar__menu-toggle" id="mainMenuToggle">
						<i class="fas fa-bars" id="mainMenuIcon"></i>
					</div>
				</div>
			</div>
			<!-- nav -->
			<div class="top-menu-wrapper" id="mainMenu">
				<div class="main-nav nav">
					<nav class="main-nav__menu" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
				</div>

				<div class="secondary-nav nav">
					<nav class="secondary-nav__menu" role="navigation">
						<?php secondary_nav(); ?>
					</nav>
				</div>

				<div class="social-menu social-menu--header">
					<ul class="social-menu__list">
						<li class="social-menu__item">
							<a href="#" class="social-menu__link"><i class="fab fa-facebook-f"></i></a>
						</li>
						<li class="social-menu__item">
							<a href="#" class="social-menu__link"><i class="fab fa-twitter"></i></a>
						</li>
						<li class="social-menu__item">
							<a href="#" class="social-menu__link"><i class="fab fa-instagram"></i></a>
						</li>
					</ul>
				</div>

			</div>
			<!-- /nav -->
			

		</header>
		<!-- /header -->


		<!-- Open page content -->
		<div class="main-content">
