<?php get_header(); ?>
<header class="container-fluid py-5 text-center  pt-105 pt-lg-90 text-justify">
  <h1 class="color-personalized text-mobile">Has buscado</h1>
</header>
<section>
  <?php if ( ! have_posts() ) {?>
    <div class="col-11 col-md-8 mx-auto py-10 px-5 color-personalized border-30px">
      <?php get_search_form(); ?><br>
      <h2 class="text-center text-homepage-container">Pero no se encontro dentro de esta web</h2>
    </div>
  <?php } else { ?>
    <div class="mb-5 mx-3">
      <?php get_search_form(); ?>
    </div>
    <div class="card-columns-2 p-2">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('content', get_post_format()) ?>
      <?php endwhile; endif; ?>
    </div>
  <?php }?>
</section>
<?php get_footer(); ?>
