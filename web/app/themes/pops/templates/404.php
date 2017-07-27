<?php

/**
 * The main 404-wrapper
 *
 * @package POPS
 */

get_header();

?>

<?php do_action( 'pops_before_page' ); ?>
<?php get_template_part( 'partials/no-results', '404' ); ?>
<?php get_footer(); ?>
