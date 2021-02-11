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
  <body <?php body_class() ?>>
    <style>
      .landing-content, .landing-content h2, .landing-content h3, .landing-content h4, .landing-content h5, .landing-content h6, .landing-content strong{
        color: #262626!important;
      }
    </style>
    <!-- Page content  -->
    <?php $filter_slide1 = get_theme_mod('emp_head_filter1'); ?>
    <div class="emp_img_slide1" style="position: fixed;top: 0;right: 0;left: 0;">
      <div class="<?php if ($filter_slide1 === 'color') { ?> bg-title-color <?php }else if($filter_slide1 === 'dark'){ ?> bg-title-dark <?php } ?>"></div>
    </div>
      <div class="mx-auto col-sm-9 col-md-7 col-lg-5 py-md-5 px-0">
        <div class="border-30px overflow-hidden">
          <div class="mx-auto">
            <?php the_post_thumbnail( 'full', array( 'class' => 'col-9 nopadding h-auto') );?>
            <br>
          </div>
          <div class="p-4 landing-content" style="background-color:#eee;">
            <?php if ( have_posts() ) {
              while ( have_posts() ) {
                the_post();?>
                <h2 class="text-center"><?php the_title(); ?></h2>
                <?php the_content();
              }
            } ?>
          </div>
        </div>
        <br><br><br><br><br><br>
        <button class="btn container-fluid p-1 text-center bg-light text-muted no-shadow" onclick="window.history.back()">Volver atrás</button>
      </div>
    <!-- WP JavaScript -->
    <?php wp_footer(); ?>
  </body>
</html>
