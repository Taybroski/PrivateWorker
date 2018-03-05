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
	?>
						
	<div class='listings_main'>
		<div class='listings_upper'>

			<div class='listings_image'></div> <!-- Post image -->

			<div class='listings_detail'>
				<div class='listings_title'>
					<?php
						echo "<h1><a href='" . $link . "'>" . get_the_title() . "</a></h1>";
						echo "<p>Posted on {$dPost} at {$tPost} by {$author}</p>";
					?>
				</div>

				<div>
					<ul class='listings_cats'> 
						<?php 
							foreach ($cat as $c) { // Prints out categories in a list
								echo "<li><a href='" . get_category_link($c->term_id) . "'>" . '| ' . $c->name . "</a></li>";
							} // end foreach
						?>
					</ul>
				</div>
		
				<div class="bullets_container">
					<ul class="listings_options">
						<li>
							<?php
								foreach ($vMake as $m) 
								{	echo $m; } 
							?>
						</li>
						<li>
							<?php
								foreach ($vType as $t) 
								{	echo $t; } 
							?>
						</li>
					</ul>
				</div>

				<div class="fields">
						
				</div>

			</div> <!-- End listing detail -->
		</div> <!-- End listing upper -->

		<div class='listings_lower'>
			<?php the_content(); ?>
		</div>
					
	</div> <!-- End listing main -->
	<?php 		
			} // end while
		} // end if
		get_footer(); 
	?>