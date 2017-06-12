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
    background: url(<?php echo UTILS()->get_image_uri(); ?>/slice_blog.svg) repeat-x center;
    height: 40px;
		/*width: 120%;*/
  }
</style>

<div class="wave"></div>

<article class="blog__item">
	<div class="content-container container-fluid">
		<section class="blog__video margin-bottom-container"><?php the_field( 'video' ) ?></section>
		<section class="blog__text">
			<?php the_content(); ?>
		</section>
	</div>


</article>