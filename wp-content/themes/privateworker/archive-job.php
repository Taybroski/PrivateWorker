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
				$link 	= get_permalink();
				$author = get_the_author();
				$cat 		= get_the_category();
				$dPost 	= get_the_date();
				$tPost 	= get_the_time();
				$spec 	= get_fields(); // Get all job fields
				$vMake	= get_the_terms('vehiclemake');
				$vType	= get_the_terms('vehicletype');
				// Individual field variables
				$price 	= get_field('price');	
				$fuel		= get_field('fuel_type');
				$year 	= get_field('year');
				$engine	= get_field('engine');
				$asp		= get_field('aspiration');
				$email	= get_field('email');
				$tel		= get_field('phone');
						
				echo "<div class='listings_main'>";
					echo "<div class='listings_upper'>";

						echo "<div class='listings_image'></div>"; // Post image

						echo "<div class='listings_detail'>";
							echo "<div class='listings_title'>";
								echo "<h1><a href='" . $link . "'>" . get_the_title() . "</a></h1>";
								echo "<p>Posted on {$dPost} at {$tPost} by {$author}</p>";
							echo "</div>";

							echo "<div><ul class='listings_cats'>"; // Prints out categories in a list
								foreach ($cat as $c) {
									echo "<li><a href='" . get_category_link($c->term_id) . "'>" . '| ' . $c->name . "</a></li>";
								} // end foreach
							echo "</ul></div>";
	
	?>
<?php 
							echo "<div class='bullets_container'><ul class='listings_options'>";
								foreach ($vMake as $m) {
									echo "<li>" . $m . "</li>";
								} // end foreach
								foreach ($vType as $t) {
									echo "<li>" . $t . "</li>";
								} // end foreach
							echo "</ul></div>";
							

						echo "</div>";
					echo "</div>";

					echo "<div class='listings_lower'>";
						the_content(); // Post description
					echo "</div>";
					
				echo "</div>";			
			} // end if
		} // end while
	?>
</div>
<?php
	get_footer();
?>