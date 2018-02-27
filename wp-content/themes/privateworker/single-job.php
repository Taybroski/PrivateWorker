<!-- This page contains the HTML and PHP for a single job / post. -->
<?php 
	get_header();
	if (have_posts()) {
		while (have_posts()) {
			the_post(); 
			the_title();
			the_content(); 

			$categories = get_the_category();

			foreach($categories as $cat) {
				echo "<p><a href='" . get_category_link( $cat->term_id ) . "'>" . $cat->name . "</a></p>";
			} 
			prePrint($post); // Prints technical details of the Post object.
			prePrint(get_the_category()); // Prints technical details for Category object.
			
		} // end if
	} // end while
	get_footer();
?>