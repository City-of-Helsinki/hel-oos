<?php

/**
 * The main Header template
 *
 * @package POPS
 */

?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>

	<meta charset="<?php echo get_bloginfo('charset'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="theme-color" content="#F5A3C7" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="google-site-verification" content="LtJR7dXI-7BdgTN7III8edPHZ9kI-QbwVtYThdfgOts" />
    <meta name="msvalidate.01" content="5984877F1C5D04022CBABCADA9563839" />

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<title><?php wp_title('|', true, 'right'); ?></title>

	<!-- ============================================================ -->
	<?php wp_head(); ?>
	<!-- ============================================================ -->

</head>

<body <?php body_class(); ?>>
	<?php do_action('pops_after_body');
	?>

	<header class="header">
		<section class="row medium-container">
			<div class="header__logo">
				<h3>OOS</h3>
				<a href="https://www.youtube.com/playlist?list=PLHrkP0ZaJoKD8sdCQ2GfMQpYwLpdwVKYI" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
			</div>
			<nav class="header__menu">
				<?php pops_main_menu(); ?>
			</nav>
		</section>
