<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="UTF-8">
<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<?php get_template_part('module/meta', 'ogp'); ?>
<link rel="shortcut icon" href="<?php echo COMMON_PFIX; ?>/favicon.ico" />
</head>
<body <?php body_class(); ?>>

<?php wp_head(); ?>

	<header class="lout-header-home responsive-element">
		<h1 class="com-sitelogo uti-block"><a href="<?php echo home_url( '/' ); ?>"></a></h1>
		<?php get_search_form();?>
	</header>
	<?php get_template_part( 'module/pankuzu' ); ?>

	<?php if( is_home() ){ get_template_part( 'module/home', 'information' ); } ?>
	<main class="lout-main obj-main-grid">
