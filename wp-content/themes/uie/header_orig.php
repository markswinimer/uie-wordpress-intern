<!doctype html>
<!--[if lte IE 9]>
<html class="ie" lang="en">
<![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en">
<!--<![endif]-->
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, shrink-to-fit=no">
		<title>
			<?php
			if (is_single()) {
				the_title();
				echo ' — ';
			}
			?>
			UX Articles by UIE
		</title>
		
		<?php wp_head(); ?>

		<!-- favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/core.css">
		<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/footer.css">
		<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css?v=2017-09-15">

		<!--[if lt IE 9]>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.js"></script>
		<![endif]-->
	</head>
	<body>
		<header class="primary">
			<div class="stage">
				<a href="http://uie.com">
					<!--[if gte IE 9]><!-->
					<svg version="1.1" class="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="142px" height="76px" viewBox="0 0 142 76" enable-background="new 0 0 142 76" xml:space="preserve">
						<g>
							<path fill="#ffffff" d="M141.406,59.525c-1.69,10.677-9.842,16.483-27.467,16.483c-13.777,0-26.155-6.177-26.155-25.186 c0-16.197,10.969-24.621,27.847-24.621c17.808,0,26.338,9.074,26.338,25.837v3.18h-32.432v1.407c0,5.433,1.875,7.772,6.372,7.772 c2.528,0,4.967-1.494,5.627-4.873H141.406z M121.536,45.303V44.65c0-4.501-2.344-6.841-5.905-6.841 c-3.656,0-6.094,2.34-6.094,6.841v0.652H121.536z"/>
							<g>
								<path fill="#ffffff" d="M53.962,55.485c0,13.692-9.839,20.523-26.993,20.523c-17.163,0-27-6.831-27-20.523V27.609h22.508v26.936 c0,4.489,2.133,6.208,4.492,6.208c2.362,0,4.484-1.719,4.484-6.208V27.609h22.509V55.485z"/>
							</g>
							<polyline fill="#ffffff" points="82.52,74.599 82.52,27.609 59.84,27.609 59.84,74.599 82.52,74.599"/>
						</g>
						<g>
							<path fill="#ffffff" d="M59.811,8.642h6.137L62.883,3.01l5.139-3.001l3.146,5.643l3.147-5.643l5.147,3.001l-3.076,5.632h6.144 v5.703h-6.144l3.076,5.65l-5.147,2.994l-3.147-5.634l-3.146,5.634l-5.139-2.994l3.065-5.65h-6.137V8.642z"/>
						</g>
						<desc>UIE</desc>
					</svg>
					<!--<![endif]-->
					<!--[if lt IE 9]>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/uie.png" alt="UIE" class="ie-logo">
					<![endif]-->
				</a>

				<a href="#menu" class="menu-button smooth">
					<i class="fa fa-bars"></i>
					Menu
				</a>
			</div>
			
			<nav class="primary">
				<div class="stage" id="primary-nav">
					<ul>
						<li><a href="https://aycl.uie.com">All You Can Learn</a></li>
						<li><a href="https://www.uie.com/events/">Events</a></li>
						<li><a href="https://www.uie.com/jared-live/">Jared Live</a></li>
						<li><a href="/" class="on">Articles</a></li>
						<li><a href="https://www.uie.com/brainsparks/">Blog</a></li>
						<li><a href="https://uie.fm">Podcasts</a></li>
						<li><a href="https://www.uie.com/about/">About Us</a></li>
					</ul>
				</div>
			</nav>
		</header>

		<main>
			<div class="stage">
