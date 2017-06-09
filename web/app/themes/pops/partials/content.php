<?php

/**
 * The main template for basic-content
 *
 * @package POPS
 *
 */

get_header();

?>

	<section class="row main-container text-center">
			<div class="header-container">
				<h1><?php the_title(); ?></h1>
				<p class="header__ingress"> <?= get_the_excerpt(); ?> </p>
				<span class="font-size-p"><?= get_the_date(); ?></span>
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

<article class="blog__item">
	<div class="content-container container-fluid">
		<section class="blog__video margin-bottom-container"><?php the_field( 'video' ) ?></section>
		<section class="blog__text">
			<?php the_content(); ?>
		</section>
	</div>


</article>