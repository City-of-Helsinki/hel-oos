<?php

/**
 * The main footer-template
 *
 * @package POPS
 */

wp_footer();

?>

<style>
  .wave--footer {
    width: 100%;
    background: url(<?php echo UTILS()->get_image_uri(); ?>/slice_footer.svg) repeat-x center;
    transform: rotate(180deg);
    height: 40px;
  }
</style>

<div class="wave--footer"></div>

<footer class="footer text-center">
    <div class="row content-container">
      <div class="main-container">
        <img src="<?php echo UTILS()->get_image_uri(); ?>/oos.png" style="height: 120px;" />
      </div><!--
    --><div class="main-container">
        <img src="<?php echo UTILS()->get_image_uri(); ?>/oph.svg" style="height: 160px;" />
      </div><!--
    --><div class="main-container">
        <img src="<?php echo UTILS()->get_image_uri(); ?>/helsinki.svg" style="height: 80px;" />
      </div>
    </div>
    <nav class="footer__menu row">
      <?php pops_main_menu(); ?>
    </nav>
  </footer>
</body>
</html>

