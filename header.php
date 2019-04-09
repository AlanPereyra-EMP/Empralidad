<!doctype html>
<html <?php language_attributes(); ?>>
<html prefix="og: http://ogp.me/ns#">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/plugins/woocommerce.css">
    <!-- Defer css -->
    <script async>
    function downloadJSAtOnload() {
    var element = document.createElement("link");
    element.href = "<?php echo esc_url( get_template_directory_uri() ); ?>/plugins/contact-form-7.css";
    element.rel = 'stylesheet';
    document.body.appendChild(element);
    }
    if (window.addEventListener){
    window.addEventListener("load", downloadJSAtOnload, false);
    }else if (window.attachEvent){
    window.attachEvent("onload", downloadJSAtOnload);
    }else{ window.onload = downloadJSAtOnload;}

    function downloadJSAtOnload1() {
    var element1 = document.createElement("link");
    element1.href = "<?php echo esc_url( get_template_directory_uri() ); ?>/plugins/woocommerce.css";
    element1.rel = 'stylesheet';
    document.body.appendChild(element1);
    }
    if (window.addEventListener){
    window.addEventListener("load", downloadJSAtOnload1, false);
    }else if (window.attachEvent){
    window.attachEvent("onload", downloadJSAtOnload1);
    }else{ window.onload = downloadJSAtOnload1;}

    function downloadJSAtOnload2() {
    var element2 = document.createElement("link");
    element2.href = "https://use.fontawesome.com/releases/v5.8.1/css/all.css";
    element2.rel = 'stylesheet';
    document.body.appendChild(element2);
    }
    if (window.addEventListener){
    window.addEventListener("load", downloadJSAtOnload2, false);
    }else if (window.attachEvent){
    window.attachEvent("onload", downloadJSAtOnload2);
    }else{ window.onload = downloadJSAtOnload2;}
    </script>
    <noscript>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    </noscript>

    <?php echo get_theme_mod('ip_face_text'); ?>
    <?php wp_head(); ?> 
  </head>
  <body <?php body_class() ?>>
    <!-- Preload -->
        <!-- Preoload css -->
        <style type="text/css">
            @-webkit-keyframes spinner-border{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}
            @keyframes spinner-border{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}
            .invisible {visibility: hidden !important;}
        </style>
        <div id="charge" style="height:100vh!important;z-index:1; background: rgba(250, 250, 250, 1); z-index: 1000;">
            <div id="spinner" style="margin-top:-50px;margin-left:-51px;width:6.5em;height:6.5em;border:.25em solid currentColor;border-right-color:transparent;border-radius:50%;-webkit-animation:spinner-border .75s linear infinite;animation:spinner-border .75s linear infinite; position:fixed;top:50%;left:50%" class="color-personalized"></div>
        </div>
    <!-- end preload -->
    <!-- All content -->
    <div id="top_content"></div>
    <!-- navbar -->
        <nav class="navbar navbar-expand-lg fixed-top <?php if( is_admin_bar_showing() ){ ?> admin-fixed-top <?php } ?> py-0">
            <!-- if logo -->
	            <?php $img_navbar = get_theme_mod('ip_img_logo');
	            if ($img_navbar) { ?>
		            <a class="navbar-brand mx-auto" href="<?php echo home_url(); ?>">
		            	<img src="<?php echo wp_get_attachment_url(get_theme_mod('ip_img_logo')); ?>" class="navbar-img" alt="NavbarBrand">
		            </a>
	            <?php } else { ?>
                    <a class=" mx-auto" href="<?php echo home_url(); ?>">
    	                <h4 class="p-3"><?php bloginfo(); ?></h4>
                    </a>                
	            <?php } ?>
	        <!-- end if logo -->           
            <div class="bg-navbar-top <?php if( is_admin_bar_showing() ){ ?> admin-bar-show <?php } ?>">
                <i id="btn-menu-nav" class="fa fa-bars <?php if( is_admin_bar_showing() ){ ?> admin-bar-show <?php } ?>" onclick="openMobileMenu()"></i>
            </div>
            <?php wp_nav_menu(array(
                'theme_location' => 'superior',
                'container' => 'div',
                'container_class' => 'navbar-collapse',
                'container_id' => 'navbarContentMenu',
                'items_wrap' => '<ul class="navbar-nav nav ml-auto text-center mobile-menu-items">%3$s</ul>',
                'menu_class' => 'nav-item',
                'walker' => new Walker_Nav_Primary()
            ) ); ?>
            <div class="m-auto collapse py-2 show-lg">
                <div><?php get_search_form(); ?></div>
            </div>
        </nav>
        <i id="bg-menu-mobile"></i>
    <!-- end navbar -->
    <div id="ip_content">