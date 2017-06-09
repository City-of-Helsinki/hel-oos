<?php

/**
 * The main article-list template
 *
 * @package POPS
 */

get_header();

?>


	<section class="row main-container text-center">
			<div class="header-container">
				<h1 class="margin-bottom-container"><?php the_field( 'header', get_option('page_for_posts') ); ?></h1>
				<p class="header__ingress"> <?= wp_strip_all_tags( get_field( 'subheader', get_option('page_for_posts') ) ); ?> </p>
			</div>
		</section>
</header>

<style>
  .wave {
    background-color: #F5A3C7;
    mask-image: url(<?php echo UTILS()->get_image_uri(); ?>/slice.svg);
    -webkit-mask-image: url(<?php echo UTILS()->get_image_uri(); ?>/slice.svg);
    -ms-mask-image: url(<?php echo UTILS()->get_image_uri(); ?>/slice.svg);
    mask-position: left;
    -webkit-mask-position: left;
    -ms-mask-position: left;
    height: 40px;
  }
</style>

<div class="col-xs-12 wave"></div>

<main class="blog">
	<section class="container-fluid">
		<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();
			get_template_part( 'partials/content', 'excerpt' );
		endwhile;
		else :
			get_template_part( 'partials/no-results' );
		endif;
		?>
	</section>

	<section class="pagination">
		<?php echo UTILS()->pagination(); ?>
	</section>
</main>









<?php get_footer(); ?>
