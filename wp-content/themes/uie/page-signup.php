<?php
wp_reset_query();
query_posts(array(
	'posts_per_page' => 1
));

if (have_posts()) {
	// Start the Loop.
	while (have_posts()) {
		the_post();
		?>
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
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
		<title>UIE’s Article of the Week</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/core.css">
		<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/footer.css">
		<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">
		<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/landing.css">

		<!-- opengraph -->
		<meta property="og:locale" content="en_US"/>
		<meta property="og:site_name" content="UIE Article of the Week"/>
		<meta property="og:title" content="UIE Article of the Week"/>
		<meta itemprop="name" content="UIE Article of the Week"/>
		<meta name="twitter:title" content="UIE Article of the Week"/>
		<meta property="og:url" content="https://articles.uie.com"/>
		<meta name="twitter:url" content="https://articles.uie.com"/>
		<meta property="og:type" content="website"/>
		<meta property="og:description" content="Sign up and get an article a week with insights and advice to help you rid the world of bad design."/>
		<meta itemprop="description" content="Sign up and get an article a week with insights and advice to help you rid the world of bad design."/>
		<meta property="og:image" content="https://articles.uie.com/wp-content/uploads/2016/02/open-graph.png"/>
		<meta itemprop="image" content="https://articles.uie.com/wp-content/uploads/2016/02/open-graph.png"/>
		<meta name="twitter:card" content="summary_large_image"/>
		
		<!-- favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	</head>
	<body>
		<header class="brand row" id="updates">
			<div class="page">
				<div class="stage">
					<div class="logo">
						<a href="/">
							<svg version="1.1" class="image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="142px" height="76px" viewBox="0 0 142 76" enable-background="new 0 0 142 76" xml:space="preserve">
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
							<span>Article of the Week</span>
						</a>
					</div>

					<div class="pitch row">
						<div class="explain">
							<p>
								Sign up and get an article a week with insights and advice to help you rid the world of bad&nbsp;design.
							</p>

							<p class="read-article">
								<a href="#article" class="smooth">Read the Most Recent Article&nbsp;&darr;</a>
							</p>
						</div>

						<?php
						if ($_GET['subscribe'] === 'success') {
							// subscribed to the news letter
							?>
							<form action="https://www.uie.com/newsletter/" method="post" style="background: rgba(0, 0, 0, 0.3);">
								<fieldset class="form-row">
									<p class="preface">
										<i class="fa fa-check-circle"></i>  We’ve added you to the list.
									</p>
		
									<p class="small">
										You may need to confirm your subscription. Check your email for a message
										from us; then click the link inside.
									</p>
								</fieldset>
							</form>
							<?php
						} else {
							// not subscribed, display form
							?>
							<form action="https://www.uie.com/newsletter/" method="post" style="background: rgba(0, 0, 0, 0.3);">
								<fieldset class="form-row">
									<p class="preface">
										Delivered right to your inbox.
									</p>

									<div class="input input-text">
										<label for="email">Email</label>
										<input type="email" name="email" id="email" value="" placeholder="Email" required>
									</div>

									<div class="input input-text">
										<label for="first-name">First Name (optional)</label>
										<input type="text" name="first-name" id="first-name" value="" placeholder="First Name (optional)">
									</div>

									<div class="input input-text">
										<label for="last-name sr-only">Last Name (optional)</label>
										<input type="text" name="last-name" id="last-name" value="" placeholder="Last Name (optional)">
									</div>

									<div class="input input-submit">
										<p class="promise">
											<strong>UIE values your privacy.</strong><br>
											We will never sell your e-mail address.
										</p>
										
										<input type="hidden" name="successurl" value="https://articles.uie.com/signup/?subscribe=success#subscribe">
										<input type="hidden" name="listid" value="newuietips">
										<input type="submit" class="button" value="Sign Up">
									</div>
								</fieldset>
							</form>
							<?php
						}
						?>
					</div>
				</div>
			</div>
		</header>
		
		<div class="page content">
			<div class="stage" id="article">
				<div class="main row">
					<div class="ten column offset-by-one">
						<article class="signup-page">
							<h1>
								<?php echo apply_filters('widont', get_the_title(), 12); ?>
							</h1>
							<p class="author">By <span><?php the_author(); ?></span></p>
							<?php
							$source = get_post_meta(get_the_ID(), 'source', true);
							if ($source) {
								?>
								<p class="small note">
									<?php echo apply_filters('widont', $source, 80); ?>
								</p>
								<?php
							}
							
							the_content();

							$bio = get_field('rich_biography', 'user_' . get_the_author_meta('ID'));
							$author_image = get_user_meta(get_the_author_meta('ID'), 'author_image', true);
							
							if (!$author_image) {
								// default image
								$author_image = '<div class="entry_author_image"><img src="' . esc_url( get_template_directory_uri() ) . '/img/no-avatar.png" alt="Headshot for ' . get_the_author() . '"></div>';
							} else {
								$author_image = get_author_image();
							}

							if ($bio) {
								?>
								<footer class="about-the-author">
									<h2>About the Author</h2>
									<div class="headshot"><?php echo $author_image; ?></div>
									<div class="blurb small">
										<?php echo apply_filters('widont', $bio, 80); ?>
									</div>
								</footer>
								<?php
							}
							?>
						</article>
					</div>
				</div>
			</div>

			<div class="bottom-call-to-action">
				<div class="pitch">
					<p>Design insight, straight to your inbox.</p>
					<p>
						<a href="#updates" class="button smooth">Sign Me Up</a>
					</p>
				</div>
			</div>
		</div>

		<footer class="global">
			<div class="stage row">
				<div class="uie">
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

					<p>
						510 Turnpike Street, Suite 102<br>
						North Andover, MA 01845<br>
						(800) 588-9855 <span>or</span> +1 978-327-5561
					</p>
				</div>

				<div class="footer-about">
					<p>
						Questions or comments? <a href="/feedback">Talk to us.</a><br>
						<span class="small">Copyright © 1997–<?php echo date('Y'); ?>, All Rights Reserved.</span>
					</p>
				</div>
			</div>
		</footer>

		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/site.js"></script>
	</body>
</html>
		<?php
	}
}
?>