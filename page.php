<?php get_header(); ?>
<header class="container-fluid py-5 pt-105 pt-lg-90 text-center text-justify">
  <h1 class="text-mobile"><?php the_title(); ?></h1>
</header>
  <article class="col-12 mx-md-auto p-0 py-3 content-background content-color mw-1200px" style="margin-bottom:200px!important;">
    <div class="container-fluid p-0 overflow-hidden">
      <?php
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post(); the_content(); ?>
          <span class="btn container-fluid invisible"></span>
        <?php }
      }
      if ( comments_open() || get_comments_number() ) {
          comments_template(); the_comments_pagination();
      }
      ?>
    </div>
  </article>
<?php get_footer(); ?>
