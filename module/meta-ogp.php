<?php
global $page, $paged;
//title
	if ( is_home() ) {
		$title = get_bloginfo( 'name' );
	} else {
		$title = wp_title( '', false, 'right' ) . '｜' . get_bloginfo( 'name' );
	}
	if ( $paged >= 2 || $page >= 2 ) {
		if( is_home ) {
			$title = $title . '-記事一覧-' . max( $paged, $page ) . 'ページ目 ｜ ';
		} else {
			$title = str_replace( '｜', '-' . max( $paged, $page ) . 'ページ目 ｜ ', $title );
		}
	}//if
  //url
	if ( is_home() ) {
		$canonical_url = get_bloginfo( 'url' ) . "/";
	} else if ( is_category() ) {
		$canonical_url = get_category_link( get_query_var( 'cat' ) );
	} else if ( is_page() || is_single() ) {
		$canonical_url = get_permalink();
	}
	if ( $paged >= 2 || $page >= 2 ) {
		$canonical_url = $canonical_url . 'page/' . max( $paged, $page ) . '/';
	}

?>
<!-- ogp -->
<meta property="og:locale" content="ja_JP">
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
<meta property="og:title" content="<?php if( isset( $title ) ) { echo $title; } ?>">
<meta property="og:url" content="<?php if( isset( $canonical_url ) ) { echo $canonical_url; } ?>">
<meta property="og:description" content="<?php if( isset( $description ) ) { echo $description; } ?>">
<meta property="og:image" content="<?php if( isset( $ogimage ) ) { echo $ogimage; } ?>">
