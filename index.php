<?php
//Will add more
get_header();

if (have_posts()): the_posts();

	while (have_posts()): 
	 the_content();
	 
	 
	endwhile;

endif;

get_footer();
?>
