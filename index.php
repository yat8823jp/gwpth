<?php get_header( ); ?>

<?php //$query = new WP_Query( 'post_type=event' ); ?>

	<article class="lout-content">

	<?php
		if( is_search() ) {
			get_template_part( 'module/loop', 'search' );
		} else if( is_404() ) {
			get_template_part( 'module/error' );
		} else {
			if( have_posts() ) {
				while( have_posts() ) {
					the_post();
					get_template_part( 'module/loop', 'contents' );
				}//while
			} else {
				get_template_part( 'module/error' );
			}
		}
	?>

	</article>

	<?php get_sidebar(); ?>

<?php get_footer() ?>
