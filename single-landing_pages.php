<!doctype html>
<html prefix="og: http://ogp.me/ns#" <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap">
    <!-- Defer css -->
    <script>
        function downloadCSSAtOnload() {
        var element = document.createElement("link");
        element.href = "<?php echo esc_url( get_template_directory_uri() ); ?>/plugins/plugins-support.css";
        element.rel = 'stylesheet';
        document.body.appendChild(element);

        var element1 = document.createElement("link");
        element1.href = "<?php echo esc_url( includes_url() ); ?>/css/dist/block-library/style.min.css";
        element1.rel = 'stylesheet';
        document.body.appendChild(element1);

        var element2 = document.createElement("link");
        element2.href = "<?php echo esc_url( get_template_directory_uri() ); ?>/plugins/woocommerce-ip.css";
        element2.rel = 'stylesheet';
        document.body.appendChild(element2);

        var element3 = document.createElement("link");
        element3.href = "<?php echo esc_url( get_template_directory_uri() ); ?>/fonts/fa/css/all.min.css";
        element3.rel = 'stylesheet';
        document.body.appendChild(element3);

        }
        if (window.addEventListener){
        window.addEventListener("load", downloadCSSAtOnload, false);
        }else if (window.attachEvent){
        window.attachEvent("onload", downloadCSSAtOnload);
        }else{ window.onload = downloadCSSAtOnload;}
    </script>
    <style>
        .to-fade{
            opacity: 0;
            transition: all .5s;
        }
        strong, h1, h2, h3, h4, h5, h6 {
          filter: brightness(1.5)!important;
        }
        @media(min-width:576px){
          .wp-block-embed-youtube iframe{
              max-height: 16vw;
          }
        }
    </style>

    <?php wp_head(); ?>

    <?php echo get_theme_mod('ip_face_text');
          echo get_theme_mod('ip_google_text'); ?>
  </head>
  <body <?php body_class() ?>>

    <!-- Page content  -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <div class="pt-5 p-md-3 no-shadow text-white" style="background:<?php echo get_theme_mod('ip_footer_color'); ?>;">
          <div class="mt-5 col-md-6 mx-auto"><?php the_content();?></div>
        </div>
    <?php endwhile; endif; ?>
    <!-- end page content -->

    <!-- Js -->
    <script>
        function downloadJSAtOnload() {
        var element = document.createElement("script");
        element.src = "<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.bundle.min.js";
        document.body.appendChild(element);

        var element1 = document.createElement("script");
        element1.src = "<?php echo esc_url( get_template_directory_uri() ); ?>/js/complements.js";
        document.body.appendChild(element1);
        }
        if (window.addEventListener){
        window.addEventListener("load", downloadJSAtOnload, false);
        }else if (window.attachEvent){
        window.attachEvent("onload", downloadJSAtOnload);
        }else { window.onload = downloadJSAtOnload;}
    </script>
    <!-- jQuery -->
    <script defer src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-3.3.1.min.js"></script>
    <!-- WP js -->
    <?php wp_footer(); ?>
  </body>
</html>
