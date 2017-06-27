<?php

/**
 * Download page template
 *
 * @package POPS
 *
 * Template Name: Download-template
 * Description: Download-template
 */

get_header('download');

$items = count(get_field('embed_repeater'));

?>

  <section class="row main-container text-center">
    <div class="header-container">
      <h1 class="margin-bottom-container"><?= get_field('header');
                                          ?></h1>
      <p class="header__ingress"> <?= wp_strip_all_tags(get_field('subheader'));
                                  ?> </p>
    </div>
  </section>
</header>

<style>
  .wave {
    background: url(<?php echo UTILS()->get_image_uri();
                    ?>/slice_download.svg) repeat-x center;
  }
</style>

<div class=" wave"></div>

<main class="download">
  <section class="download__items">
    <?php if (have_rows('embed_repeater')) : ?>
        <?php while (have_rows('embed_repeater')) : the_row();
        ?>
          <section class="download__item">
            <?= get_sub_field('embed_url') ?>
            <p class="download__desc text-muted"><?= get_sub_field('embed_desc') ?></p>
          </section>
        <?php endwhile;
        ?>
      <?php endif;
      ?>
  </section>
</main>

<?php get_footer();
?>
