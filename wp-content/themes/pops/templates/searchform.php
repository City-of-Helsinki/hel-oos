<?php

/**
 * The main search-form wrapper
 *
 * @package POPS
 */

?>

<form class="form-inline" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="form-group">
        <input type="text" name="s" id="s" class="oos-search-form-control" placeholder="<?php _e( 'Input search terms', TEXT_DOMAIN ); ?>">
    </div>
    <button type="submit" class="btn btn-search"><?php echo esc_attr_x( 'Search', 'search button' ); ?></button>
</form>
