<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, shrink-to-fit=no">
    <link rel="apple-touch-icon" href="<?php get_site_icon_url(); ?>">
    <!-- Fonts -->
    <?php
    $emp_title_font = get_theme_mod('emp_components_head_title_tipography');
    $emp_content_font = get_theme_mod('emp_components_content_tipography');
    if($emp_title_font == 'varela round'||$emp_content_font == 'varela round'){ ?>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap">
    <?php }
    if($emp_title_font == 'indie flower'||$emp_content_font == 'indie flowe'){ ?>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap">
    <?php }
    if($emp_title_font == 'roboto'||$emp_content_font == 'roboto'){ ?>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap">
    <?php }
    if($emp_title_font == 'Kumbh Sans'||$emp_content_font == 'Kumbh Sans'){ ?>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&display=swap">
    <?php }
    if($emp_title_font == 'nunito'||$emp_content_font == 'nunito'){ ?>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito&display=swap">
    <?php }
    if($emp_title_font == 'bad script'||$emp_content_font == 'bad script'){ ?>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap">
    <?php }
    if($emp_title_font == 'rozha one'||$emp_content_font == 'rozha one'){ ?>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rozha+One&display=swap">
    <?php }
    if($emp_title_font == 'the secret'||$emp_content_font == 'the secret'){ ?>
      <link rel="stylesheet" href="<?php get_template_directory_uri(). '/includes/fonts/the-secret/TheSecret-Regular.ttf'?>">
    <?php }
    if($emp_title_font == 'flanella'||$emp_content_font == 'flanella'){ ?>
      <link rel="stylesheet" href="<?php get_template_directory_uri(). '/includes/fonts/Flanella/Flanella.ttf'?>">
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
          if ($logo_navbar) {
            $home_url =  get_theme_mod('emp_components_nav_home');
            if ($home_url == ''){
              $home_url = home_url();
            }
            ?>
            <a class="navbar-brand mx-auto" href="<?php echo $home_url ?>">
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
             $search_icon = '<div class="collapse d-inline ml-auto show-from-md" id="btn-search-desktop">
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
            'items_wrap'     => '<div id="navbarContentMenuDiv" class="ml-auto">'.$search_icon .'<ul class="navbar-nav nav text-center mobile-menu-items '.$ul_class.'">%3$s</ul></div>',
            'menu_class'     => 'nav-item',
            'walker'         => new Walker_Nav_Primary()
          ) ); ?>

          <!-- if cart on -->
          <?php $cart_link = get_theme_mod('emp_components_nav_cart');
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
      <div id="emp-background-image" class="emp-background-image1 emp-background-media-filter">
        <video autoplay muted loop src="<?php echo wp_get_attachment_url(get_theme_mod('emp_components_head_video')); ?>" poster="" class="emp-video-background">
        </video>
      </div>
    </div>
