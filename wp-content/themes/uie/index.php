<?php
/**
 * The main template file
 */

get_header();

if (have_posts()) {
	?>
	<ul>
		<?php
		// Start the Loop.
		$my_query = new WP_Query('posts_per_page=20');
//	while ( $my_query->have_posts() ) : $my_query->the_post();

		while (have_posts()) {
			the_post();
	
			?>
			<li>
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</li>
			<?php
		}
		?>
	</ul>
	<?php	
} else {
	// If no content, include the "No posts found" template.
	get_template_part( 'content', 'none' );

}

get_footer();
?>