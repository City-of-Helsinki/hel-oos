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
    background: url(<?php echo UTILS()->get_image_uri();
                    ?>/slice_footer.svg) repeat-x center;
    transform: rotate(180deg);
    height: 96px;
  }
</style>

<div class="wave--footer"></div>

<footer class="footer text-center">
    <div class="row content-container">
      <div class="main-container">
        <img src="<?php echo UTILS()->get_image_uri();
                  ?>/oos.png" style="height: 120px;" />
      </div><!--
    --><div class="main-container">
        <img src="<?php echo UTILS()->get_image_uri();
                  ?>/oph.svg" style="height: 160px;" />
      </div><!--
    --><div class="main-container">
        <img src="<?php echo UTILS()->get_image_uri();
                  ?>/helsinki.svg" style="height: 80px;" />
      </div>
    </div>
    <nav class="footer__menu row">
      <?php pops_main_menu();
      ?>
    </nav>
  </footer>
  <div class="licence">
    Tämä teos on lisensoitu <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons 4.0 Kansainvälinen -lisenssillä</a>
</div>
</body>
</html>

