<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!-- Defer css -->
    <script>
      function downloadCSSAtOnload() {
        var element = document.createElement("link");
        element.href = "<?php echo esc_url( get_template_directory_uri() ); ?>/css/plugins-support.css";
        element.rel = 'stylesheet';
        document.body.appendChild(element);

        var element1 = document.createElement("link");
        element1.href = "<?php echo esc_url( includes_url() ); ?>/css/dist/block-library/style.min.css";
        element1.rel = 'stylesheet';
        document.body.appendChild(element1);

        var element2 = document.createElement("link");
        element2.href = "<?php echo esc_url( get_template_directory_uri() ); ?>/fonts/fa/css/all.min.css";
        element2.rel = 'stylesheet';
        document.body.appendChild(element2);

        var element3 = document.createElement("link");
        element3.href = "https://fonts.googleapis.com/css?family=Varela+Round&display=swap";
        element3.rel = 'stylesheet';
        document.body.appendChild(element3);

        var element4 = document.createElement("link");
        element4.href = "https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap";
        element4.rel = 'stylesheet';
        document.body.appendChild(element4);

        var element5 = document.createElement("link");
        element5.href = "https://fonts.googleapis.com/css2?family=Roboto&display=swap";
        element5.rel = 'stylesheet';
        document.body.appendChild(element5);

        var element6 = document.createElement("link");
        element6.href = "https://fonts.googleapis.com/css2?family=Kumbh+Sans&family=Roboto&display=swap";
        element6.rel = 'stylesheet';
        document.body.appendChild(element6);

        var element7 = document.createElement("link");
        element7.href = "https://fonts.googleapis.com/css2?family=Nunito&display=swap";
        element7.rel = 'stylesheet';
        document.body.appendChild(element7);

        var element8 = document.createElement("link");
        element8.href = "<?php echo esc_url( get_template_directory_uri() ); ?>/css/sfpo.css";
        element8.rel = 'stylesheet';
        document.body.appendChild(element8);
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
    <?php
    wp_head();
    echo get_theme_mod('emp_face_text');
    echo get_theme_mod('emp_google_text');
    ?>
  </head>
  <body <?php body_class(); ?> >
    <div id="top_content"></div>
    <?php $global_notice = get_theme_mod('emp_components_notice_show');
    if ($global_notice){ ?>
      <div id="top-notice" class="show-from-md">
        <?php echo get_theme_mod('emp_components_notice_text'); ?>
      </div>
    <?php }?>

    <!-- navbar -->
      <div id="navbar-background" class="sticky-top <?php if( is_admin_bar_showing() ){ ?> admin-fixed-top <?php } ?>" style="z-index:1032;">
        <nav class="navbar navbar-expand-lg py-0 mw-1200px">
          <div class="bg-navbar-top <?php if( is_admin_bar_showing() ){ ?> admin-bar-show <?php } ?>">
              <i id="btn-menu-nav" class="fa fa-bars text-dark <?php if( is_admin_bar_showing() ){ ?> admin-bar-show <?php } ?>" onclick="openMobileMenu()"></i>
          </div>
          <!-- if logo -->
          <?php $logo_navbar = get_theme_mod('emp_components_nav_logo');
          if ($logo_navbar) { ?>
            <a class="navbar-brand mx-auto" href="<?php echo home_url(); ?>">
            	<img src="<?php echo wp_get_attachment_url(get_theme_mod('emp_components_nav_logo')); ?>" class="navbar-img" alt="NavbarBrand">
            </a>
          <?php } else { ?>
            <a class=" mx-auto" href="<?php echo home_url(); ?>">
              <h2 class="p-3 color-personalized"><?php bloginfo(); ?></h2>
            </a>
          <?php } ?>
	        <!-- end if logo -->
          <?php $search_link = get_theme_mod('emp_components_nav_search');
          if ($search_link){
             $search_icon = '<div class="collapse d-inline ml-auto" id="btn-search-desktop">
                               <a id="searchform-close" class="fa ml-auto fa-search mx-auto" onclick="showSearchBackground();"></a>
                             </div>';
             $ul_class = '';
          } else {
            $ul_class = 'ml-auto';
          }
          wp_nav_menu(array(
            'theme_location' => 'superior',
            'container'      => 'div',
            'container_class'=> 'navbar-collapse',
            'container_id'   => 'navbarContentMenu',
            'items_wrap'     => '<div class="ml-auto">'.$search_icon .'<ul class="navbar-nav nav text-center mobile-menu-items '.$ul_class.'">%3$s</ul></div>',
            'menu_class'     => 'nav-item',
            'walker'         => new Walker_Nav_Primary()
          ) ); ?>

          <!-- if cart on -->
          <?php $cart_link = get_theme_mod('emp_mobile_cart_text');
          if(class_exists('WooCommerce') && $cart_link){ ?>
            <a onclick="showWoocommerceCart();" class="fa fa-shopping-cart mr-4 fadein show-desktop position-relative">
              <small class="woo-counter-cart-number-desktop added_to_cart wc-forward icon-color">
                <div id="mini-cart-count" ></div>
              </small>
            </a>
          <?php } ?>
        </nav>
      </div>
      <i id="bg-menu-mobile"></i>
    <!-- end navbar -->
    <div class="FullScreenLanding emp_img_slide1 col-12 mx-auto bg-personalized">
      <div class="emp-background-image emp-background-media-filter">
        <video autoplay muted loop src="<?php echo wp_get_attachment_url(get_theme_mod('emp_components_head_video')); ?>" poster="" class="emp-video-background">
        </video>
      </div>
    </div>
