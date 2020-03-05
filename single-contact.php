<!doctype html>
<html prefix="og: http://ogp.me/ns#" <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no , shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap">

    <script>
        function downloadJSAtOnload() {
        var element = document.createElement("link");
        element.href = "<?php echo esc_url( get_template_directory_uri() ); ?>/plugins/plugins-support.css";
        element.rel = 'stylesheet';
        document.body.appendChild(element);
        }
        if (window.addEventListener){
        window.addEventListener("load", downloadJSAtOnload, false);
        }else if (window.attachEvent){
        window.attachEvent("onload", downloadJSAtOnload);
        }else{ window.onload = downloadJSAtOnload;}
    </script>

    <?php wp_head(); ?>
    <?php echo get_theme_mod('ip_face_text');
          echo get_theme_mod('ip_google_text'); ?>
  </head>
  <body <?php body_class() ?>>
    <style>
      .landing-content, .landing-content h2, .landing-content h3, .landing-content h4, .landing-content h5, .landing-content h6, .landing-content strong{
        color: #262626!important;
      }
    </style>
    <!-- Page content  -->
    <?php $filter_slide1 = get_theme_mod('ip_head_filter1'); ?>
    <div class="ip_img_slide1" style="position: fixed;top: 0;right: 0;left: 0;">
      <div class="<?php if ($filter_slide1 === 'color') { ?> bg-title-color <?php }else if($filter_slide1 === 'dark'){ ?> bg-title-dark <?php } ?>"></div>
    </div>
        <div class="mx-auto col-sm-9 col-md-7 col-lg-5 py-md-5 px-0">
            <div class="mx-auto">
                <!-- img -->
                    <?php the_post_thumbnail( 'full', array( 'class' => 'col-9 nopadding h-auto') );?>
                    <br>
                <!-- end img -->
            </div>
            <div class="p-4 landing-content" style="background-color:#eee;">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                    <h2 class="text-center"><?php the_title(); ?></h2>
                    <?php the_content();?>
                <?php endwhile; endif; ?>
            </div>
            <br><br><br><br><br><br>
            <button class="btn container-fluid p-1 text-center bg-light text-muted no-shadow" onclick="window.history.back()">Volver atrás</button>
        </div>
    <!-- end page content -->

    <!-- WP JavaScript -->
    <?php wp_footer(); ?>
    <!-- jQuery first, then Complements -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-3.3.1.min.js"></script>
    <script defer="true" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/complements.js"></script>
    <!-- end js -->
  </body>
</html>
