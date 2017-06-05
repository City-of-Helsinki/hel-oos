<?php

/**
 * The main template for listing articles on index.php
 *
 * @package POPS
 *
 */

?>

<article class="preview">
	<section class="preview__video"><?php the_field( 'video' ) ?></section>
	<a href="<?php the_permalink(); ?>">
		<section class="preview__text col-xs-12">
			<h3 class="margin-bottom-container"><?php the_title(); ?></h3>
			<p class="margin-bottom-container"><?= wp_strip_all_tags( get_the_excerpt() ); ?></p>
			<span class="font-size-p pull-left">Lue lisää</span>
			<span class="pull-right"><?= get_the_date(); ?></span>
		</section>
	</a>
</article>