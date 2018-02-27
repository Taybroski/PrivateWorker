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
            
            // Use this function to print out the inside of an array or object
            prePrint(get_the_category());
            
        } // end if
    } // end while
	get_footer();
?>