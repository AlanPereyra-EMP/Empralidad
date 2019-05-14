<!doctype html>
<html prefix="og: http://ogp.me/ns#" <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

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
    <?php echo get_theme_mod('ip_face_text'); ?>
  </head>
  <body <?php body_class() ?>>

    <!-- Title -->
    	<div class=" py-5 px-2 text-center text-justify text-white bg-personalized">
            <h1 class="text-mobile"><?php the_title(); ?></h1>
        </div>
    <!-- end title -->
    <!-- Page content  -->
        <div class="mx-auto col-sm-9 col-md-7 col-lg-5 py-5">
            <div class="mt-4 mx-auto">
                <!-- img -->
                    <?php the_post_thumbnail( 'full', array( 'class' => 'col-9 nopadding h-auto') );?>
                    <br>
                <!-- end img -->
            </div>
            <div class="p-4 landing-content" style="background-color:#eee;">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                    <?php the_content();?>
                <?php endwhile; endif; ?>
            </div>
            <br><br><br><br><br><br>
            <button class="btn container-fluid p-1 text-center bg-light text-muted no-shadow" onclick="window.history.back()">Volver atrás</button>
        </div>
    <!-- end page content -->
    <div class="container-fluid text-white py-1 " style="background-color: <?php echo get_theme_mod('ip_footer_color'); ?>;">
        <div class="text-center mt-5">
            <!-- Owner -->
                <p><?php echo get_theme_mod('ip_footer_text'); ?><br><small>Desarrollado por <a href="https://informatica.pereyra.online">Informatica Pereyra</a></small></p>
            <!-- end owner -->
            <small><p><a href="<?php echo get_permalink(get_theme_mod('ip_headline_link_term')); ?>" class="text-secondary">Terminos y Condiciones</a> -  
            <a href="<?php echo get_permalink(get_theme_mod('ip_headline_link_poli')); ?>" class="text-secondary">Politicas de Privacidad</a></p></small>
            <br>
            <?php echo get_theme_mod('ip_qr_text') ?>
            <br>
        </div>
    </div>
    <!-- WP JavaScript -->
    <?php wp_footer(); ?>
    <!-- jQuery first, then Complements -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-3.3.1.min.js"></script>
    <script defer="true" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/complements.js"></script>
    <!-- end js -->
  </body>
</html>
