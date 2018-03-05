<?php 
// Template Name: Landing
	get_header();
	$title = "private worker";
	$under_title = "jersey";
	$landing_msg0 = "looking for work?";
	$landing_msg1 = "need something fixed?";
	
?>

<container class="landing_container">

	<div class="title_container">
		<div class="main_title">
			<?php 
				echo "<h1>{$title}</h1>";
			?>
		</div>
		<div class="under_title">
			<?php 
				echo "<p>{$under_title}</p>";
			?>
		</div>
	</div>

	<div class="adspace">
		<!-- Division area and advert placement? -->
	</div>

	<div class="button_container">
		<div class="button_box">
			<div class="text_container">
				<?php
					echo "<a href='/listings'><h3>{$landing_msg0}</h3></a>";
				?>
			</div>
			<div class="landing_favicon lf_0"></div>
		</div>
		<div class="button_box">
			<div class="text_container">
				<?php
					echo "<a href='/sample-page'><h3>{$landing_msg1}</h3></a>";
				?>
			</div>
			<div class="landing_favicon lf_1"></div>
		</div>
	</div> 
	<div class="button_container">
		<div class="need_acc">
			<p>Need an account? <a href="/signup">Sign up</a> here!</p>
		</div>
	</div>

</container>

<?php
	get_footer();
?>