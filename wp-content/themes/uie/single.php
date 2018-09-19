<?php
/**
 * The main template file
 */

get_header();

if (have_posts()) {
	// Start the Loop.
	while (have_posts()) {
		the_post();
		?>
		
		<article>
			<div class="row">
				<div class="ten offset-by-one column">
					<h1>
						<?php echo apply_filters('widont', get_the_title(), 12); ?>
					</h1>
			
					<div class="meta">
						<div>
							<?php
							$author_image = get_user_meta(get_the_author_meta('ID'), 'author_image', true);
							
							if (!$author_image) {
								// default image
								$author_image = '<div class="entry_author_image"><img src="' . esc_url( get_template_directory_uri() ) . '/img/no-avatar.png" alt="Headshot for ' . get_the_author() . '"></div>';
							} else {
								$author_image = get_author_image();
							}
	
							?>
							<div class="headshot">
								<?php echo $author_image; ?>
							</div>
	
							<div class="details">
								by <?php the_author(); ?><br>
							</div>
						</div>
					</div>
					
					<?php
					$source = get_post_meta(get_the_ID(), 'source', true);
					if ($source) {
						?>
						<p class="small source">
							<em><?php echo apply_filters('widont', $source, 80); ?></em>
						</p>
						<?php
					}
					?>
					
					<?php
					$prearticle_ad = get_post_meta(get_the_ID(), 'prearticle_ad_text', true);
					if ($prearticle_ad) {
						?>
						<p class="prearticle-roll">
							<?php echo apply_filters('widont', $prearticle_ad, 80); ?>
						</p>
						<?php
					}
					?>

					<?php the_content(); ?>

					<div class="post-article-date">
						Published here on <?php the_date(); ?>.
					</div>
					
					<?php
					$postarticle_ad = get_post_meta(get_the_ID(), 'postarticle_ad_text', true);
					if ($postarticle_ad) {
						?>
						<p class="postarticle-roll">
							<?php echo apply_filters('widont', $postarticle_ad, 80); ?>
						</p>
						<?php
					}
					?>
					
					<?php
					$bio = get_field('rich_biography', 'user_' . get_the_author_meta('ID'));

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

					<section class="related">
						<?php if ( function_exists( 'echo_ald_crp' ) ) echo_ald_crp(); ?>
					</section>
				</div>
			</div>
		</article>
		
		<section class="newsletter email-box" id="subscribe">
			<?php
			if ($_GET['subscribe'] === 'success') {
				// subscribed to the news letter
				?>
				<h3>
					<i class="fa fa-check-circle"></i> We’ve added you to the list.
				</h3>
				
				<p class="success">
					You may need to confirm your subscription. Check your email for a message 
					from us; then click the link inside.
				</p>
				<?php
			} else {
				// not subscribed, display form
				?>
				<form action="https://www.uie.com/newsletter/" method="post">
					<h3>
						<small>Get all the UX goodness we have to&nbsp;give.</small>
						Have a new article delivered to your inbox each&nbsp;week.
					</h3>

					<div class="row">
						<div class="four column">
							<label for="email" class="sr-only">Email</label>
							<input type="email" name="email" id="email" placeholder="Email" required>
						</div>
						<div class="field four column">
							<label for="fname" class="sr-only">First Name (Optional)</label>
							<input type="text" name="fname" id="fname" placeholder="First Name (Optional)">
						</div>
						<div class="four column">
							<label for="lname" class="sr-only">Last Name (Optional)</label>
							<input type="text" name="lname" id="lname" placeholder="Last Name (Optional)">
						</div>
					</div>

					<div class="field row last">
						<p class="small promise">
							<strong>UIE values your privacy.</strong><br>
							We will never sell your email address.
						</p>
						
						<input type="submit" value="Sign Me Up">
					</div>

					<input type="hidden" name="successurl" value="<?php the_permalink(); ?>?subscribe=success#subscribe">
					<input type="hidden" name="listid" value="newuietips">
				</form>
				<?php
			}
			?>
		</section>
		<?php
	}
} else {
	// If no content, include the "No posts found" template.
	get_template_part( 'content', 'none' );

}

get_footer();
?>
