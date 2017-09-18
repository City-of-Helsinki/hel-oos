<?php

/**
 * 404 wrapper
 *
 * @package POPS
 */

get_header( 'blog' );

?>


<section class="row main-container text-center">
	<div class="header-container">
		<p class="header__ingress"><?php _e( 'Error 404: Page not found', TEXT_DOMAIN ); ?></p>
	</div>
</section>
</header>

<style>
	.wave {
		background: url(<?php echo UTILS()->get_image_uri(); ?>/slice_blog.svg) repeat-x center;
	}
</style>

<div class="wave"></div>

<main class="blog-archive">
	<section class="container-fluid">
		<article>
			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', TEXT_DOMAIN ); ?></p>
			<?php get_search_form(); ?>
		</article>
	</section>
</main>


<?php get_footer();
?>
