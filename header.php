<!doctype html>
<html <?php language_attributes(); ?>>
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
    </style>

    <?php wp_head(); ?>

    <?php echo get_theme_mod('ip_face_text');
          echo get_theme_mod('ip_google_text'); ?>

  </head>

  <body <?php body_class(); ?> >

    <div id="top_content"></div>
    <!-- navbar -->
        <nav class="navbar navbar-expand-lg fixed-top <?php if( is_admin_bar_showing() ){ ?> admin-fixed-top <?php } ?> py-0">
            <!-- if logo -->
	            <?php $img_navbar = get_theme_mod('ip_head_logo');
	            if ($img_navbar) { ?>
		            <a class="navbar-brand mx-auto" href="<?php echo home_url(); ?>">
		            	<img src="<?php echo wp_get_attachment_url(get_theme_mod('ip_head_logo')); ?>" class="navbar-img" alt="NavbarBrand">
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
            <?php $search_link = get_theme_mod('ip_mobile_search_text');
                if ($search_link == 'true'){
                   $search_icon = '<div class="collapse show-lg text-white mr-3 ml-auto" id="btn-search-desktop">
                                       <a id="searchform-close" class="fa ml-auto fa-search mx-auto" onclick="showSearchBackground();"></a>
                                   </div>';
                   $ul_class = '';
                } else {
                  $ul_class = 'ml-auto';
                }
            wp_nav_menu(array(
                'theme_location' => 'superior',
                'container' => 'div',
                'container_class' => 'navbar-collapse',
                'container_id' => 'navbarContentMenu',
                'items_wrap' => $search_icon .'<ul class="navbar-nav nav text-center mobile-menu-items '.$ul_class.'">%3$s</ul>',
                'menu_class' => 'nav-item',
                'walker' => new Walker_Nav_Primary()
            ) ); ?>

            <!-- if cart on -->
            <?php $cart_link = get_theme_mod('ip_mobile_cart_text');
            if(class_exists('WooCommerce') && $cart_link == 'true'){ ?>
                <a onclick="showWoocommerceCart();" class="fa fa-shopping-cart mr-4 fadein show-desktop text-white">
                        <small class="woo-counter-cart-number-desktop added_to_cart wc-forward">
                            <div id="mini-cart-count"></div>
                        </small>
                </a>
            <?php } ?>
        </nav>
        <i id="bg-menu-mobile"></i>
    <!-- end navbar -->
    <?php $filter_slide1 = get_theme_mod('ip_head_filter1'); ?>
    <div class="FullScreenLanding ip_img_slide1 col-12 mx-auto bg-personalized">
      <div class="<?php if ($filter_slide1 === 'color') { ?> bg-title-color <?php }else if($filter_slide1 === 'dark'){ ?> bg-title-dark <?php } ?>">
        <video autoplay muted loop src="<?php echo wp_get_attachment_url(get_theme_mod('ip_head_slide1')); ?>" poster="" class="ip-video-background">

        </video>
      </div>
    </div>
