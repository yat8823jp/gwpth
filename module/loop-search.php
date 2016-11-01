<?php
	if( have_posts() ) {
		while( have_posts() ) {
			the_post();
		}//while
	} else {
		get_template_part( 'module/error' );
	}
?>
