<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, shrink-to-fit=no">
    <!-- PWA -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="<?php echo get_theme_mod('emp_components_head_title_background'); ?>">
    <link rel="apple-touch-icon" href="<?php get_site_icon_url(); ?>">

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

        	$facebook_link = get_theme_mod('emp_components_footer_face');
          $twitter_link = get_theme_mod('emp_components_footer_tw');
          $instagram_link = get_theme_mod('emp_components_footer_insta');
          $youtube_link = get_theme_mod('emp_components_footer_yt');

          $social_icon = '';

          if ($facebook_link){
            $social_icon .= '<a href="'.get_theme_mod('emp_components_footer_face').'" class="fab fa-facebook-f m-auto"></a>';
          }
          if ($instagram_link){
            $social_icon .= '<a href="'.get_theme_mod('emp_components_footer_insta').'" class="fab fa-instagram m-auto"></a>';
          }
          if ($twitter_link){
            $social_icon .= '<a href="'.get_theme_mod('emp_components_footer_tw').'" class="fab fa-twitter m-auto"></a>';
          }
          if ($youtube_link){
            $social_icon .= '<a href="'.get_theme_mod('emp_components_footer_yt').'" class="fab fa-youtube m-auto"></a>';
          }

          $social_icon_div = '<div class="d-flex mt-5 mt-md-0">'.$social_icon.'</div>';

          wp_nav_menu(array(
            'theme_location' => 'superior',
            'container'      => 'div',
            'container_class'=> 'navbar-collapse',
            'container_id'   => 'navbarContentMenu',
            'items_wrap'     => '<div id="navbarContentMenuDiv" class="ml-auto">'.$search_icon .'<ul class="navbar-nav nav text-center mobile-menu-items d-flex '.$ul_class.'" onclick="openMobileMenu()">%3$s'.$social_icon_div.'</ul></div>',
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
      <div id="emp-background-image" class="emp-background-image1 emp-background-media-opacity">
        <video autoplay muted loop src="<?php echo wp_get_attachment_url(get_theme_mod('emp_components_head_video')); ?>" poster="" class="emp-video-background">
        </video>
      </div>
    </div>
