<!doctype html>
<html prefix="og: http://ogp.me/ns#" <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Preoload CSS -->
    <style type="text/css">
        #spinner,#spinner-img{position:fixed;top:50%;left:50%}@-webkit-keyframes spinner-border{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes spinner-border{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.spinner-border{display:inline-block;width:2rem;height:2rem;vertical-align:text-bottom;border:.25em solid currentColor;border-right-color:transparent;border-radius:50%;-webkit-animation:spinner-border .75s linear infinite;animation:spinner-border .75s linear infinite}.spinner-border-sm{width:1rem;height:1rem;border-width:.2em}#spinner{margin-top:-50px;margin-left:-51px}#spinner-div{height:100vh!important;z-index:1}#spinner-img{height:60px;margin-top:-30px;margin-left:-30px}.hidden{visibility:hidden;opacity:0;transition:visibility 0s .5s,opacity .5s linear;height:10px!important}.visible{visibility:visible;opacity:1;transition:opacity .5s linear}
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/plugins/contact-form-7.css">


    <?php wp_head(); ?>
    <?php echo get_theme_mod('ip_face_text'); ?>
  </head>
  <body <?php body_class() ?>>
    <div id="charge">
        <div id="spinner" class="d-flex justify-content-center align-items-center">
            <div class="spinner-border color-personalized p-5"></div>
        </div>
    </div>
    <!-- All content -->
    <div id="all_content" class="hidden">
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
            </div>
        <!-- end page content -->
        <div class="container-fluid text-white py-1 " style="background-color: <?php echo get_theme_mod('ip_footer_color'); ?>;">
            <div class="text-center mt-5">
                <!-- Owner -->
                    <p><?php echo get_theme_mod('ip_footer_text'); ?><br><small>Desarrollado por <a href="https://infromatica.pereyra.online">Informatica Pereyra</a></small></p>
                <!-- end owner -->
                <small><p><a href="<?php echo get_permalink(get_theme_mod('ip_headline_link_term')); ?>" class="text-secondary">Terminos y Condiciones</a> -  
                <a href="<?php echo get_permalink(get_theme_mod('ip_headline_link_poli')); ?>" class="text-secondary">Politicas de Privacidad</a></p></small>
                <br>
                <?php echo get_theme_mod('ip_qr_text') ?>
                <br>
            </div>
        </div>
    <!-- end all content -->
    </div>
    <!-- WP JavaScript -->
    <!-- jQuery first, then Bootstrap Bundle JS, then Complements -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-3.3.1.min.js"></script>
    <script defer="true" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/complements.js"></script>
    <!-- end js -->
  </body>
</html>
