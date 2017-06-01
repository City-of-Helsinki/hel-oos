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
				<h3 class="elem-container">POPS</h3>
			</div>
			<div class="header__menu">
				<?php pops_main_menu(); ?>
			</div>
		</section>

		<?php if ( get_the_title() ) {
			if ( get_the_title() === 'Etusivu' ) { get_template_part( 'partials/components/home_header' ); }
			elseif ( get_the_title() === 'Hanke ja tekijät' ) { get_template_part( 'partials/components/about_header' ); }
			elseif ( get_the_title() === 'Lataukset' ) { get_template_part( 'partials/components/download_header' ); }
		} else {
			get_template_part( 'partials/components/blog_header' );
		} ?>
	</header>
