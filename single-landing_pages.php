<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, shrink-to-fit=no">
    <link rel="apple-touch-icon" href="<?php get_site_icon_url(); ?>">
    <!-- Fonts -->
    <?php
    if(get_theme_mod('emp_components_content_tipography') == 'varela round'){ ?>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap">
    <?php } else if(get_theme_mod('emp_components_content_tipography') == 'indie flower'){ ?>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap">
    <?php } else if(get_theme_mod('emp_components_content_tipography') == 'roboto'){ ?>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap">
    <?php } else if(get_theme_mod('emp_components_content_tipography') == 'Kumbh Sans'){ ?>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&family=Roboto&display=swap">
    <?php } else if(get_theme_mod('emp_components_content_tipography') == 'nunito'){ ?>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito&display=swap">
    <?php } ?>
    <!-- PWA -->
    <meta name="mobile-web-app-capable" content="yes">

    <style>
      .to-fade{
        opacity: 0;
        transition: all .5s;
      }
    </style>
    <?php
    wp_head();
    echo get_theme_mod('emp_analytics_facebook_script');
    echo get_theme_mod('emp_analytics_google_script');
    ?>
  </head>
  <body <?php body_class(); ?> >

    <!-- Page content  -->
    <?php if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();?>
        <div class="pt-5 p-md-3 no-shadow text-white" style="background:<?php echo get_theme_mod('emp_footer_color'); ?>;">
          <div class="mt-5 col-lg-6 mx-auto landing-content"><?php the_content();?></div>
        </div>
      <?php }
    } ?>
    <!-- WP js -->
    <?php wp_footer(); ?>
  </body>
</html>
