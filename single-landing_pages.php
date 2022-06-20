<?php get_header();
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();?>
      <div class="pt-5 p-md-3 min-h-100" style="background:<?php echo get_theme_mod('emp_footer_color'); ?>;">
        <div class="mt-5 mx-auto landing-content"><?php the_content();?></div>
      </div>
    <?php }
  } ?>
<?php get_footer(); ?>
