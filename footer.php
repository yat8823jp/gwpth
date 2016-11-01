<?php if(! is_home() ){
	if( function_exists( 'wp_pagenavi' ) ) {
		wp_pagenavi();
	}
} ?>
</main>
<footer class="lout-footer">
	<address class="lout-copyright">(c)</address>
</footer>
<?php wp_footer(); ?>
</body>
</html>
