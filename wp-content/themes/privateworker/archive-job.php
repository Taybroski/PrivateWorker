<!-- This page contains the HTML and PHP to print every posted job / listing. -->
<?php 
	// Template Name: Listings
	get_header();
?>
<div class="listings_container">
	<?php
		if (have_posts()) {
			while (have_posts()) {
				the_post();
				$link = get_permalink();
				$author = get_the_author();
				$cat = get_the_category();
				$dPost = get_the_date();
				$tPost = get_the_time();
				// $vType = get_the_terms($post->ID, 'vehicletype');
				$vMake = get_the_terms($post->ID, 'vehiclemake');
				
				
		
				echo "<div class='listings_main'>";
					echo "<div class='listings_upper'>";

						echo "<div class='listings_image'></div>";

						echo "<div class='listings_detail'>";
							echo "<div class='listings_title'>";
								echo "<h1><a href='" . $link . "'>" . get_the_title() . "</a></h1>";
								echo "<p>Posted on {$dPost} at {$tPost} by {$author}</p>";
							echo "</div>";

							echo "<div><ul class='listings_cats'>";
								foreach ( $cat as $c ) 
								{
									echo "<li><a href='" . get_category_link($c->term_id) . "'>" . '| ' . $c->name . "</a></li>";
								}
							echo "</ul></div>";
							
							echo "<div class='bullets_container'><ul class='listings_options'>";
								echo "<li>" . the_terms($post->ID, 'vehicletype') . "</li>";
								echo "<li>" . the_terms($post->ID, 'vehiclemake') . "</li>";
							echo "</div></ul>";

						echo "</div>";
					echo "</div>";

					echo "<div class='listings_lower'>";
						the_content();
					echo "</div>";
					
				echo "</div>";			
			} // end if
		} // end while
	?>
</div>
<?php
	get_footer();
?>