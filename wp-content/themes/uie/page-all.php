<?php
/**
 * The main template file
 */

get_header();

?>

<?php
if (have_posts()) {
	// Start the Loop.
	while (have_posts()) {
		the_post();

		?>
		<p class="subtitle">
			<?php echo strip_tags(get_the_content()); ?>
		</p>
		<?php
	}
}

// now display the rest by date
wp_reset_query();
query_posts(array(
	'posts_per_page' => -1
));

if (have_posts()) {
	$beta_check = (isset($_GET['beta']) && $_GET['beta'] === 'show');
	$beta_count = 0;
	
	if ($beta_check) {
		$beta_count = (int) get_category_by_slug('beta')->category_count;
		
		echo '<p>Articles still in beta: ' . $beta_count . '</p>';
	}
	?>
	
	<section>
		<h2 class="section">Newest to Oldest</h2>
		<?php
	
		// Start the Loop.
		while (have_posts()) {
			the_post();
			$beta_class = (in_category('beta') && $beta_check) ? ' in-beta' : '';
	
			?>
			<a href="<?php the_permalink(); ?>" class="article-preview<?php echo $beta_class; ?>">
				<h3><?php echo apply_filters('widont', get_the_title(), 8); ?></h3>
				<p class="author">by <?php the_author(); ?></p>
				<?php /* <p class="date"><?php the_date(); ?></p> */ ?>
			</a>
			<?php
		}
		?>
	</section>
	<?php
}


get_footer();
?>
