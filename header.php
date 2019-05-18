<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!-- Defer css -->
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

    function downloadJSAtOnload1() {
    var element1 = document.createElement("link");
    element1.href = "https://use.fontawesome.com/releases/v5.8.1/css/all.css";
    element1.rel = 'stylesheet';
    document.body.appendChild(element1);
    }
    if (window.addEventListener){
    window.addEventListener("load", downloadJSAtOnload1, false);
    }else if (window.attachEvent){
    window.attachEvent("onload", downloadJSAtOnload1);
    }else{ window.onload = downloadJSAtOnload1;}
    </script>
    <noscript>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    </noscript>
    <style type="text/css">
        @keyframes fadeIn {
          0% {
            opacity: 0;
            transform: translate(0%, -50%);
          } 

          20% {
            opacity: 0;
          }  

          100% {
            opacity: 1;
          }
        }
        .to-fade{
            opacity: 0;
            transition: all .5s;
        }
        .fadein{
            animation-name: fadeIn;
            animation-duration: 1s;
        }
    </style>

    <?php echo get_theme_mod('ip_face_text'); ?>
    <?php wp_head(); ?> 
  </head>
  <body <?php body_class() ?>>
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
            
            <div class="collapse show-lg" id="btn-search-desktop">
                <div class="text-white mr-3">
                    <?php $search_link = get_theme_mod('ip_mobile_search_text');
                    if ($search_link == 'true'){ ?>
                        <a id="searchform-close" class="fa fa-search mx-auto" onclick="showSearchBackground();">
                        </a> 
                    <?php }?>
                </div>
            </div>
        </nav>
        <i id="bg-menu-mobile"></i>
    <!-- end navbar -->