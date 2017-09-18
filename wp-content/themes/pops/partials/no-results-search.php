<?php

/**
 * The No results found -template
 *
 * @package POPS
 *
 */

?>

<article>
	<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.',
		TEXT_DOMAIN ); ?></p>
	<?php get_search_form(); ?>
</article>