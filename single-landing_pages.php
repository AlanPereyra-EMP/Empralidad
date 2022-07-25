<?php get_header();
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();?>
      <div class="min-h-100 color-personalized">
        <div class="mx-auto landing-content p-3 p-md-0"><?php the_content();?></div>
      </div>
    <?php }
  } ?>
<?php get_footer(); ?>
