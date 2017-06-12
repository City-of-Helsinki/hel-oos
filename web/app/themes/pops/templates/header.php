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

	<meta charset="<?php echo get_bloginfo( 'charset' ); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<!-- ============================================================ -->
	<?php wp_head(); ?>
	<!-- ============================================================ -->

</head>

<body <?php body_class(); ?>>
	<?php do_action( 'pops_after_body' ); ?>

	<header class="header">
		<section class="row medium-container">
			<div class="header__logo">
				<h3>OOS</h3>
				<a href="https://www.youtube.com/watch?v=IEfQ_9DIItI&list=PL2w4TvBbdQ3sMABf317ExCob_v6rW2-4s"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
			</div>
			<nav class="header__menu">
				<?php pops_main_menu(); ?>
			</nav>
		</section>
