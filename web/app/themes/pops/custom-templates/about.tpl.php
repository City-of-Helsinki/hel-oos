<?php

/**
 * About page template
 *
 * @package POPS
 *
 * Template Name: About-template
 * Description: About-template
 */

get_header();

$main_contacts = count( get_field( 'main_contact' ) );
$images = count( get_field( 'images' ) );
$other_contacts = count( get_field( 'other_contact_repeater' ) );

?>

  <section class="row main-container text-center">
    <div class="header-container">
      <h1 class="margin-bottom-container"><?= get_field( 'header' ); ?></h1>
      <p class="header__ingress"> <?= wp_strip_all_tags( get_field( 'subheader' ) ); ?> </p>
    </div>
  </section>
</header>

<style>
  .wave {
    background: url(<?php echo UTILS()->get_image_uri(); ?>/slice_about.svg) repeat-x center;
    height: 40px;
  }
</style>

<div class="col-xs-12 wave"></div>

<main class="about">
  <div class="about__content">
    <section class="about__text">
      <?php while ( have_posts() ) : the_post(); ?>
        <?= get_the_content(); ?>
      <?php endwhile; ?>
    </section>
    <?php if ( have_rows( 'main_contact' ) ) : ?>
      <section class="about__contact--main">
        <?php while ( have_rows( 'main_contact' ) ) : the_row(); ?>
          <div class="col-xs-12 col-sm-<?= 12 / $main_contacts ?> about-container">
            <h4><?= get_sub_field( 'name' ) ?></h4>
            <a href="mailto:<?= get_sub_field( 'email' ) ?>"><?= get_sub_field( 'email' ) ?></a>
            <a href="#"><?= get_sub_field( 'phone' ) ?></a>
          </div>
        <?php endwhile; ?>
      </section>
    <?php endif; ?>
    <?php if ( have_rows( 'images' ) ) : ?>
      <section class="about__images">
        <?php while ( have_rows( 'images' ) ) : the_row(); ?>
          <img src="<?= get_sub_field( 'image' ) ?>" class="about-container col-xs-12 col-sm-<?= 12 / $images ?>" />
        <?php endwhile; ?>
      </section>
    <?php endif; ?>
    <?php if ( get_field( 'other_contact_text' ) ) : ?>
      <section class="about__text text-center text-muted">
          <?= get_field( 'other_contact_text' ) ?>
      </section>
    <?php endif; ?>
    <?php if ( have_rows( 'other_contact_repeater' ) ) : ?>
      <section class="about__contact--other">
        <?php while ( have_rows( 'other_contact_repeater' ) ) : the_row(); ?>
          <div class="contact-item">
            <h5><?= get_sub_field( 'name' ) ?></h5>
            <span class="text-muted"><?= get_sub_field( 'title' ) ?></span>
          </div>
        <?php endwhile; ?>
      </section>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>