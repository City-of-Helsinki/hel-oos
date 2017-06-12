<?php

/**
 * Home page template
 *
 * @package POPS
 *
 * Template Name: Home-template
 * Description: Home-template
 */

get_header();

do_action( 'pops_before_page' );

$args = [
	'posts_per_page'      => 4,
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'post_type'        => 'post',
	'post_status'      => 'publish',
	'suppress_filters' => true
];

$recent_posts = new WP_Query( $args );

?>


  <section class="row main-container text-center">
    <div class="header-container">
      <h1 class="margin-bottom-container"><?= get_field( 'header' ); ?></h1>
      <p class="header__ingress"> <?= wp_strip_all_tags( get_field( 'subheader' ) ); ?> </p>
      <div class="header__links">
        <a href="#" target="_blank" class="button button--header-link" data-toggle="modal" data-target="#videoModal">
          <i class="fa fa-play" aria-hidden="true"></i>
          <span>Katso esittelyvideo</span>
        </a><!--
      --><a class="button button--header-link" href="about-page">
          <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
          <span>Lue lisää hankkeesta</span>
        </a>
      </div>
    </div>
  </section>
</header>

<style>
  .wave {
    background: url(<?php echo UTILS()->get_image_uri(); ?>/slice_home.svg) repeat-x center;
    height: 40px;
  }
</style>

<div class="col-xs-12 wave"></div>

<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <?php the_field('video') ?>
    </div>
  </div>
</div>

<main class="home">
  <section class="home__links">
    <h2 class="pull-left elem-container">Blogi</h2>
    <a class="button button--section-link pull-right" href="blog-page">
      <span>Kaikki artikkelit</span>
      <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
    </a>
  </section>
  <section class="home__videos">
    <?php if ( $recent_posts->have_posts() ) : while ( $recent_posts->have_posts() ) : $recent_posts->the_post();
      get_template_part( 'partials/content', 'excerpt' );
    endwhile;  wp_reset_postdata(); endif; ?>
  </section>
  <section class="home__bottom">
    <a class="button button--section-link center-block" href="blog-page">
      <span>Kaikki artikkelit</span>
      <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
    </a>
  </section>
</main>

<?php get_footer(); ?>