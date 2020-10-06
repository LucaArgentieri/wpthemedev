<?php
/**
 * The header template file usually contains your site’s document type, meta information, links to stylesheets and scripts, and other data.
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 * @see  https://developer.wordpress.org/reference/functions/wp_head/
 * @see  https://developer.wordpress.org/reference/functions/body_class/
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&family=Roboto&display=swap" rel="stylesheet">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



	<!-- WP HEAD SCRIPTS -->

	<?php
	/**
	 * the wp_head() function lets WordPress execute all the pre-body operations including the injection of important styles and scripts.
	 * This function call should always be inside your <head> tag
	 * 
	 * @see  https://developer.wordpress.org/reference/functions/wp_head/
	 */
	wp_head();
	?>

	<!-- END WP HEAD SCRIPTS -->

</head>
<body <?php body_class(); ?>>


<header>

	<div class="header__container">
	<?php
			wp_nav_menu([
				'theme_location' => 'main_menu',
				'container' => 'nav',
				'container_id' => '',
				'container_class' => '',
				'menu_id' => '',
				'menu_class' => '',
			]);
	?>
			
	</div>
	</header>

<!-- END MENU -->

<!-- START WEBSITE BODY -->