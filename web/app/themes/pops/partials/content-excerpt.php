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
	<section class="preview__text">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php the_excerpt(); ?>
	</section>
</article>