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
      <?php while ( have_posts() ) : the_post(); ?>
				<p class="header__ingress"> <?= get_the_content(); ?> </p>
			<?php endwhile; ?>
      <div class="header__links">
        <a class="button button--header-link" href="#">
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

<svg preserveAspectRatio="xMinYMax meet" fill="#F5F5F5" width="100%" height="96" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M-12.5,-59.471l0,68.509l0.609,0c5.992,0 5.992,7.675 11.985,7.675c5.992,0 5.992,-7.675 11.985,-7.675c5.992,0 5.992,7.675 11.985,7.675c5.991,0 5.991,-7.675 11.984,-7.675c5.992,0 5.992,7.675 11.985,7.675c5.992,0 5.992,-7.675 11.985,-7.675c5.992,0 5.992,7.675 11.983,7.675c5.993,0 5.993,-7.675 11.985,-7.675c5.993,0 5.993,7.675 11.985,7.675c5.993,0 5.993,-7.675 11.985,-7.675c5.993,0 5.993,7.675 11.986,7.675c5.992,0 5.992,-7.675 11.979,-7.675c5.987,0 5.987,7.675 11.98,7.675c5.992,0 5.992,-7.675 11.985,-7.675c5.991,0 5.991,7.675 11.984,7.675c5.992,0 5.992,-7.675 11.984,-7.675c5.992,0 5.992,7.675 11.985,7.675c5.991,0 5.991,-7.675 11.984,-7.675c5.992,0 5.992,7.675 11.984,7.675c5.993,0 5.993,-7.675 11.985,-7.675c5.993,0 5.993,7.675 11.984,7.675c5.994,0 5.994,-7.675 11.985,-7.675c5.993,0 5.993,7.675 11.985,7.675c5.993,0 5.993,-7.675 11.986,-7.675l-0.497,0l0.497,0l0.609,0c5.992,0 5.992,7.675 11.984,7.675c5.993,0 5.993,-7.675 11.985,-7.675c5.993,0 5.993,7.675 11.984,7.675c5.993,0 5.993,-7.675 11.985,-7.675c5.993,0 5.993,7.675 11.985,7.675c5.993,0 5.993,-7.675 11.985,-7.675c5.991,0 5.991,7.675 11.985,7.675c5.991,0 5.991,-7.675 11.984,-7.675c5.992,0 5.992,7.675 11.985,7.675c5.992,0 5.992,-7.675 11.985,-7.675c5.992,0 5.992,7.675 11.985,7.675c5.991,0 5.991,-7.675 11.979,-7.675c5.988,0 5.988,7.675 11.981,7.675c5.992,0 5.992,-7.675 11.983,-7.675c5.992,0 5.992,7.675 11.985,7.675c5.992,0 5.992,-7.675 11.985,-7.675c5.992,0 5.992,7.675 11.983,7.675c5.994,0 5.994,-7.675 11.985,-7.675c5.992,0 5.992,7.675 11.985,7.675c5.992,0 5.992,-7.675 11.984,-7.675c5.993,0 5.993,7.675 11.984,7.675c5.993,0 5.993,-7.675 11.985,-7.675c5.993,0 5.993,7.675 11.986,7.675c5.993,0 5.993,-7.675 11.985,-7.675l-0.496,0l0,-68.509l-575.967,0Z" stroke="#00D7A7" fill="#00D7A7" />
</svg>

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