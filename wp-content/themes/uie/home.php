<?php
/**
 * The main template file
 */

get_header();

// display featured posts
query_posts(array(
	'category_name' => 'featured',
	'posts_per_page' => -1
));
?>

<p class="subtitle">
	Thoughts about user interface design and strategy.
</p>

<?php
if (have_posts()) {
	?>
	<section>
		<h2 class="section">Featured</h2>
		<?php
		
		// Start the Loop.
		while (have_posts()) {
			the_post();
	
			?>
			<a href="<?php the_permalink(); ?>" class="article-preview">
				<h3><?php the_title(); ?></h3>
				<p class="author">by <?php the_author(); ?></p>
				<?php /* <p class="date"><?php the_date(); ?></p> */ ?>
			</a>
			<?php
		}
		?>
	</section>
	<?php
}

// now display the rest by date
wp_reset_query();
query_posts(array(
	'posts_per_page' => 8
));

if (have_posts()) {
	?>
	<section>
		<h2 class="section">Most Recent</h2>
		<?php
	
		// Start the Loop.
		while (have_posts()) {
			the_post();
	
			?>
			<a href="<?php the_permalink(); ?>" class="article-preview">
				<h3><?php the_title(); ?></h3>
				<p class="author">by <?php the_author(); ?></p>
				<?php /* <p class="date"><?php the_date(); ?></p> */ ?>
			</a>
			<?php
		}
		?>
		
		<p class="view-more">
			<a href="/all">View All Articles</a>
		</p>
	</section>
	<?php
}


get_footer();
?>
