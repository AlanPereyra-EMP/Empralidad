<?php get_header(); ?>
<header class="container-fluid py-5 text-center pt-105 pt-lg-90 text-justify text-white">
  <h1 class="h1 color-personalized"><?php wp_title(); ?></h1>
</header>
<div class="card-columns-2 p-2">
  <?php if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      get_template_part('content', get_post_format());
    }
  } ?>
</div>
<?php get_footer(); ?>
