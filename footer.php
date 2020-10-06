<?php
/**
 * The footer template file usually contains your site’s scripts, and other data.
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 * @see  https://developer.wordpress.org/reference/functions/wp_footer/
 */
?>
<!-- END WEBSITE BODY -->

<!-- START FOOTER -->
	<footer>
			<div class="widget-area">
				<?php dynamic_sidebar('footer'); ?>
			</div>
			<?php
				wp_nav_menu([
					'theme_location' => 'footer_menu',
					'container' => 'nav',
					'container_id' => '',
					'container_class' => '',
					'menu_id' => '',
					'menu_class' => '',
				]);
			?>
	</footer>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	
<script>
  AOS.init();
</script>
<!-- END FOOTER -->

<!-- WP FOOTER SCRIPTS -->

<?php
/**
 * the wp_footer() function lets WordPress execute all the post-body operations including the injection of important scripts that don't need to be called in the head of the website.
 * This function call should always be at the very end of your <body> tag
 * 
 * @see  https://developer.wordpress.org/reference/functions/wp_footer/
 */
wp_footer();
?>

<!-- END WP FOOTER SCRIPTS -->

</body>
</html>