<?php

/**
 * The main article-list template
 *
 * @package POPS
 */

get_header('blog');

?>


	<section class="row main-container text-center">
			<div class="header-container">
				<h1 class="margin-bottom-container"><?php the_field('header', get_option('page_for_posts')); ?></h1>
				<p class="header__ingress"> <?= wp_strip_all_tags(get_field('subheader', get_option('page_for_posts'))); ?> </p>
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
		<?php
		if (have_posts()) :
			echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="4" button_label="Lataa lisää"]');
		endif;
		?>
	</section>
</main>









<?php get_footer();
?>
