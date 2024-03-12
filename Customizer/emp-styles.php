<style type="text/css">
:root{
  /* Notice */
  --emp-notice-bg : <?php echo get_theme_mod('emp_components_notice_background'); ?>;
  --emp-notice-color: <?php echo get_theme_mod('emp_components_notice_color'); ?>;
  /* Nav */
  --emp-nav-bg: <?php echo get_theme_mod('emp_components_nav_background'); ?>;
  --emp-nav-bg-mobile: <?php echo get_theme_mod('emp_components_nav_background_mobile'); ?>;
  --emp-nav-color: <?php echo get_theme_mod('emp_components_nav_color'); ?>;
  --emp-nav-color-accent: <?php echo get_theme_mod('emp_components_nav_color_accent'); ?>;
  --emp-nav-icon-color: <?php echo get_theme_mod('emp_components_nav_icon_color'); ?>;
  /* Header */
  --emp-head-title-bg: <?php echo get_theme_mod('emp_components_head_title_background'); ?>;
  --emp-head-title-color: <?php echo get_theme_mod('emp_components_head_title_color'); ?>;
  --emp-head-title-size: <?php echo get_theme_mod('emp_components_head_title_size'); ?>;
  --emp-head-title-tipography: <?php echo get_theme_mod('emp_components_head_title_tipography'); ?>;
  --emp-head-text-size: <?php echo get_theme_mod('emp_components_head_text_size'); ?>;
  --emp-head-text-tipography: <?php echo get_theme_mod('emp_components_head_text_tipography'); ?>;
  --emp-head-opacity: <?php echo get_theme_mod('emp_components_head_opacity'); ?>;
  /* Content */
  --emp-content-bg: <?php echo get_theme_mod('emp_components_content_background');?>;
  --emp-content-color: <?php echo get_theme_mod('emp_components_content_color'); ?>;
  --emp-content-tipography: <?php echo get_theme_mod('emp_components_content_tipography'); ?>;
  --emp-content-size: <?php echo get_theme_mod('emp_components_content_size'); ?>;
  /* Buttons */
  --emp-btn-bg: <?php echo get_theme_mod('emp_components_btn_bg'); ?>;
  --emp-btn-color: <?php echo get_theme_mod('emp_components_btn_color'); ?>;
  /* Footer */
  --emp-footer-bg: <?php echo get_theme_mod('emp_components_footer_background'); ?>;
  --emp-footer-color: <?php echo get_theme_mod('emp_components_footer_color'); ?>;
  /* Contents shortcode */
  --emp-content-shortcode-bg: <?php echo get_theme_mod('emp_homepage_carousel_background'); ?>;
  --emp-content-shortcode-color: <?php echo get_theme_mod('emp_homepage_carousel_color'); ?>;
  /* H1 Title Aling */
  --emp-content-title-aling: <?php echo get_theme_mod('emp_components_head_title_align'); ?>;
  /* Woocommerce color */
  --emp-woocommerce-color: <?php echo get_theme_mod('emp_woocommerce_color'); ?>;
  --emp-woocommerce-bg: <?php echo get_theme_mod('emp_woocommerce_bg'); ?>;
}

/* backgrounds */
.emp-background-image1{
  background: url(<?php echo wp_get_attachment_url(get_theme_mod('emp_front_image1')); ?>)no-repeat 50% 50%;
}
.emp-background-image2{
  background: url(<?php echo wp_get_attachment_url(get_theme_mod('emp_front_image2')); ?>)no-repeat 50% 50%;
}
.emp-background-image3{
  background: url(<?php echo wp_get_attachment_url(get_theme_mod('emp_front_image3')); ?>)no-repeat 50% 50%;
}
.the_post_thumbnail{
  background: url(<?php echo get_the_post_thumbnail_url(); ?> ) no-repeat 50% 50%;
  background-size: cover;
}

/* Sizes */
<?php if(get_theme_mod('emp_components_head_title_tipography') == 'bad script'){ ?>
  .text-mobile{
    line-height: 1.3;
  }
<?php }
if(get_theme_mod('emp_components_head_title_tipography') == 'the secret'){ ?>
  .text-mobile{
    line-height: 1.6;
  }
<?php } ?>
body{
	font-size: <?php echo get_theme_mod('emp_components_content_size'); ?>px;
}
.text-mobile {
  font-size: <?php echo get_theme_mod('emp_components_head_title_size_mobile'); ?>px!important;/*warning*/
}
#main-head p{
  font-size: <?php echo (get_theme_mod('emp_components_head_text_size') * 0.45); ?>px;
}
@media (max-width: 300px) {
  .text-mobile {
    font-size: <?php echo (get_theme_mod('emp_components_head_title_size_mobile')*.8); ?>px!important;/*warning*/
  }
}
@media (min-width: 400px) {
  .text-mobile {
    font-size: <?php echo (get_theme_mod('emp_components_head_title_size_mobile')*1.35); ?>px!important;/*warning*/
  }
}
@media (min-width: 577px) {
  .text-mobile {
    font-size: <?php echo get_theme_mod('emp_components_head_title_size_medium') ; ?>px!important;
  }
  #main-head p{
    font-size: <?php echo (get_theme_mod('emp_components_head_text_size') * 0.60); ?>px;
  }
  #main-head.page #title-page h1{
    font-size: <?php echo get_theme_mod('emp_components_head_title_size_medium'); ?>px!important;
  }
}
@media (min-width: 800px) {
  .text-mobile {
    font-size: <?php echo get_theme_mod('emp_components_head_title_size_large'); ?>px!important;
  }
}
@media (min-width: 992px) {
  #main-head.page #title-page h1{
    font-size: <?php echo get_theme_mod('emp_components_head_title_size_large'); ?>px!important;
  }
}
@media (min-width: 1200px) {
  #main-head.page #title-page h1{
    font-size: calc(<?php echo get_theme_mod('emp_components_head_title_size_large'); ?> * .8px)!important;
  }
  #main-head p{
    font-size: <?php echo get_theme_mod('emp_components_head_text_size'); ?>px;
  }
  .text-img-home{
    text-align: var(--emp-content-title-aling)!important;
  }
  #main-head p{
    <?php if(get_theme_mod('emp_components_head_title_align') == 'center'){ ?>
      margin: auto;
    <?php }else if(get_theme_mod('emp_components_head_title_align') == 'right'){ ?>
      margin-left: auto!important;
      margin-right: 0!important;
    <?php }else{ ?>
      margin-right: auto!important;
      margin-left: 0!important;
    <?php } ?>
  }
  <?php if(!(get_theme_mod('emp_components_head_title_align') == 'center')){ ?>
    div#carousel-item-1 h1, div#carousel-item-1 p {
      width: 65%!important;
    }
    <?php if(get_theme_mod('emp_components_head_title_align') == 'left'){ ?>
      .title-img{
        right: 0;
      }
      div#carousel-item-1 h1{
        margin-right: auto;
      }
    <?php }else{ ?>
      .title-img{
        left: 0;
      }
      div#carousel-item-1 h1{
        margin-left: auto;
      }
    <?php }?>
  <?php } ?>
}

@media (min-width: 1400px){
  .text-mobile {
    font-size: <?php echo get_theme_mod('emp_components_head_title_size_extralarge'); ?>px!important;
  }
  #main-head.page #title-page h1{
    font-size: <?php echo get_theme_mod('emp_components_head_title_size_large'); ?>px!important;
  }
  #main-head p{
    font-size: <?php echo get_theme_mod('emp_components_head_text_size'); ?>px;
  }
}
@media (min-width:992px) {
  .pb-personalized-1{
    padding-bottom: <?php echo get_theme_mod('emp_homepage_size1'); ?>%!important;
  }
  .pb-personalized-2{
    padding-bottom: <?php echo get_theme_mod('emp_homepage_size2'); ?>%!important;
  }
  .pb-personalized-3{
    padding-bottom: <?php echo get_theme_mod('emp_homepage_size3'); ?>%!important;
  }
}

/* Borders */
a.button.product_type_variable, a.button.product_type_simple.add_to_cart_button, a.button.product_type_simple{
  border: 1px <?php echo get_theme_mod('emp_components_head_title_color'); ?> solid;
}
<?php if(get_theme_mod('emp_components_content_radius')){ ?>
  .woocommerce span.onsale{
    border-radius:0 50%!important;
  }
  article,
  a.button.product_type_variable, a.button.product_type_simple.add_to_cart_button,.tutor-course,img.attachment-post-thumbnail.size-post-thumbnail,
  a.button.product_type_simple, a.checkout-button.button.alt.wc-forward,
  .woocommerce-product-gallery .flex-viewport, figure.woocommerce-product-gallery__wrapper div img,
  figure.woocommerce-product-gallery__wrapper, .woocommerce table.shop_attributes, ul.products.columns-3,
  #main-head.page .container-title-page, .gemp-galery figure,
  .gemp-filters-reset, .gemp-check-50-50, .gemp-galery-filters-btn .border, .buttons-mobile{
    border-radius: 30px!important;
  }
  li.product.type-product {
    border-radius: 30px 30px 0 0;
  }
  @media (max-width:991px){
    #bg-menu-mobile{
      border-radius: 0 0 50% 50%;
    }
    #bg-searchform-mobile, #bg-woocommerce-mobile{
      border-radius: 50% 50% 0 0;
    }
  }
  .border-bottom-raduis-15px{
    border-radius: 0 0 15px 15px;
  }
  .sfpo-table {
      border-radius: 30px;
      overflow: hidden;
  }
  .btn,.border-30px, .tutor-container .tutor-row, .tutor-single-course-sidebar, .tutor-col-8,.tutor-dashboard .tutor-container,
  .tutor-cart-box-login-form-inner, .woocommerce-notices-wrapper, .woocommerce-error, .woocommerce-info, .woocommerce-message, li.product.type-product,
  li.product.product-category, blockquote, iframe, .product-template-default .woo-page-margin{
    border-radius: 30px;
  }
  .border-top-30px{
    border-radius: 30px 30px 0 0;
  }
  .border-bottom-30px{
    border-radius: 0 0 30px 30px;
  }
  .tutor-single-lesson-wrap {
      border-radius: 0 0 30px 30px;
  }
<?php } ?>
<?php if(get_theme_mod('emp_components_content_tipography') === 'sans-serif'){ ?>
  .fa-user .fa-text {
      margin-left: -8px!important;
  }
<?php } ?>

/* Buttons */
.wpcf7-submit, #submit.submit, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, .reset_variations{
  background-color: <?php echo get_theme_mod('emp_components_head_title_background'); ?>!important;
  color: <?php echo get_theme_mod('emp_components_head_title_color'); ?>!important;
}

/* woocommerce */
#woo_featured_products .woocommerce ul::-webkit-scrollbar, .support-woo-shortcode .woocommerce ul::-webkit-scrollbar{
  background-color: <?php echo get_theme_mod('emp_components_content_color'); ?>22;
}
<?php if(get_theme_mod('emp_woocommerce_featured_size') < 25){ ?>
  .woocommerce-page ul.products li.product, .woocommerce ul.products li.product,
  a.button.product_type_variable, a.button.product_type_simple.add_to_cart_button, a.button.product_type_simple{
    font-size: 16px;
  }
<?php } else { ?>
  .woocommerce-page ul.products li.product, .woocommerce ul.products li.product,
  a.button.product_type_variable, a.button.product_type_simple.add_to_cart_button, a.button.product_type_simple{
    font-size: 25px;
  }
<?php } ?>
@media (min-width: 576px){
  .woocommerce ul.products li.product-category{
    width: <?php echo get_theme_mod('emp_woocommerce_category_size');?>%!important;
  }
}
<?php if(!get_theme_mod('emp_homepage_categories_label_show')){ ?>
  h2.woocommerce-loop-category__title {
    display: none;
  }
<?php } ?>

/* Slider on/off */
<?php
$emp_slider1 = get_theme_mod('emp_slider_image1');
$emp_slider2 = get_theme_mod('emp_slider_image2');
$emp_slider3 = get_theme_mod('emp_slider_image3');
if ($emp_slider1||$emp_slider2||$emp_slider3){ ?>
  #main-head{
    height: 64vh;
  }
  div#carouselFade {
    margin-top: 40px;
    margin-bottom: -40px;
  }
<?php }else{ ?>
  #main-head{
    height: 84vh;
  }
<?php } ?>
/* Margin negative on main-head title */
<?php if(get_theme_mod('emp_components_head_title_margin_negative_bottom_show')){ ?>
  @media(min-width: 992px){
    #main-head h1{
      margin-bottom: -35px;
    }
  }
<?php } ?>
/* Fonts */
@font-face {
  font-family: "the secret";
  src: url("<?php echo get_template_directory_uri(). '/includes/fonts/the-secret/TheSecret-Regular'?>.eot");
  src: url('<?php echo get_template_directory_uri(). '/includes/fonts/the-secret/TheSecret-Regular'?>.eot?#iefix') format('embedded-opentype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/the-secret/TheSecret-Regular'?>.woff') format('woff'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/the-secret/TheSecret-Regular'?>.ttf') format('truetype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/the-secret/TheSecret-Regular'?>.svg#open-sans') format('svg');
}
@font-face {
  font-family: "flanella";
  src: url("<?php echo get_template_directory_uri(). '/includes/fonts/Flanella/Flanella'?>.eot");
  src: url('<?php echo get_template_directory_uri(). '/includes/fonts/Flanella/Flanella'?>.eot?#iefix') format('embedded-opentype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/Flanella/Flanella'?>.woff') format('woff'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/Flanella/Flanella'?>.ttf') format('truetype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/Flanella/Flanella'?>.svg#open-sans') format('svg');
}
@font-face {
  font-family: "open dyslexic";
  src: url("<?php echo get_template_directory_uri(). '/includes/fonts/open_dyslexic/OpenDyslexicAlta-Regular'?>.eot");
  src: url('<?php echo get_template_directory_uri(). '/includes/fonts/open_dyslexic/OpenDyslexicAlta-Regular'?>.eot?#iefix') format('embedded-opentype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/open_dyslexic/OpenDyslexicAlta-Regular'?>.woff') format('woff'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/open_dyslexic/OpenDyslexicAlta-Regular'?>.ttf') format('truetype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/open_dyslexic/OpenDyslexicAlta-Regular'?>.svg#open-sans') format('svg');
}
@font-face {
  font-family: "DancingScript";
  src: url("<?php echo get_template_directory_uri(). '/includes/fonts/DancingScript/DancingScript-Regular'?>.eot");
  src: url('<?php echo get_template_directory_uri(). '/includes/fonts/DancingScript/DancingScript-Regular'?>.eot?#iefix') format('embedded-opentype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/DancingScript/DancingScript-Regular'?>.woff') format('woff'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/DancingScript/DancingScript-Regular'?>.ttf') format('truetype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/DancingScript/DancingScript-Regular'?>.svg#open-sans') format('svg');
}
@font-face {
  font-family: "varela round";
  src: url("<?php echo get_template_directory_uri(). '/includes/fonts/VarelaRound-Regular/VarelaRound-Regular'?>.eot");
  src: url('<?php echo get_template_directory_uri(). '/includes/fonts/VarelaRound-Regular/VarelaRound-Regular'?>.eot?#iefix') format('embedded-opentype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/VarelaRound-Regular/VarelaRound-Regular'?>.woff') format('woff'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/VarelaRound-Regular/VarelaRound-Regular'?>.ttf') format('truetype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/VarelaRound-Regular/VarelaRound-Regular'?>.svg#open-sans') format('svg');
}
@font-face {
  font-family: "indie flower";
  src: url("<?php echo get_template_directory_uri(). '/includes/fonts/IndieFlower-Regular/IndieFlower-Regular'?>.eot");
  src: url('<?php echo get_template_directory_uri(). '/includes/fonts/IndieFlower-Regular/IndieFlower-Regular'?>.eot?#iefix') format('embedded-opentype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/IndieFlower-Regular/IndieFlower-Regular'?>.woff') format('woff'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/IndieFlower-Regular/IndieFlower-Regular'?>.ttf') format('truetype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/IndieFlower-Regular/IndieFlower-Regular'?>.svg#open-sans') format('svg');
}
@font-face {
  font-family: "roboto";
  src: url("<?php echo get_template_directory_uri(). '/includes/fonts/Roboto-Regular/Roboto-Regular'?>.eot");
  src: url('<?php echo get_template_directory_uri(). '/includes/fonts/Roboto-Regular/Roboto-Regular'?>.eot?#iefix') format('embedded-opentype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/Roboto-Regular/Roboto-Regular'?>.woff') format('woff'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/Roboto-Regular/Roboto-Regular'?>.ttf') format('truetype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/Roboto-Regular/Roboto-Regular'?>.svg#open-sans') format('svg');
}
@font-face {
  font-family: "Kumbh Sans";
  src: url("<?php echo get_template_directory_uri(). '/includes/fonts/KumbhSans-VariableFont_wght/KumbhSans-VariableFont_wght'?>.eot");
  src: url('<?php echo get_template_directory_uri(). '/includes/fonts/KumbhSans-VariableFont_wght/KumbhSans-VariableFont_wght'?>.eot?#iefix') format('embedded-opentype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/KumbhSans-VariableFont_wght/KumbhSans-VariableFont_wght'?>.woff') format('woff'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/KumbhSans-VariableFont_wght/KumbhSans-VariableFont_wght'?>.ttf') format('truetype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/KumbhSans-VariableFont_wght/KumbhSans-VariableFont_wght'?>.svg#open-sans') format('svg');
}
@font-face {
  font-family: "nunito";
  src: url("<?php echo get_template_directory_uri(). '/includes/fonts/Nunito-Variable_wght/Nunito-Variable_wght'?>.eot");
  src: url('<?php echo get_template_directory_uri(). '/includes/fonts/Nunito-Variable_wght/Nunito-Variable_wght'?>.eot?#iefix') format('embedded-opentype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/Nunito-Variable_wght/Nunito-Variable_wght'?>.woff') format('woff'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/Nunito-Variable_wght/Nunito-Variable_wght'?>.ttf') format('truetype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/Nunito-Variable_wght/Nunito-Variable_wght'?>.svg#open-sans') format('svg');
}
@font-face {
  font-family: "bad script";
  src: url("<?php echo get_template_directory_uri(). '/includes/fonts/BadScript-Regular/BadScript-Regular'?>.eot");
  src: url('<?php echo get_template_directory_uri(). '/includes/fonts/BadScript-Regular/BadScript-Regular'?>.eot?#iefix') format('embedded-opentype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/BadScript-Regular/BadScript-Regular'?>.woff') format('woff'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/BadScript-Regular/BadScript-Regular'?>.ttf') format('truetype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/BadScript-Regular/BadScript-Regular'?>.svg#open-sans') format('svg');
}
@font-face {
  font-family: "rozha one";
  src: url("<?php echo get_template_directory_uri(). '/includes/fonts/RozhaOne-Regular/RozhaOne-Regular'?>.eot");
  src: url('<?php echo get_template_directory_uri(). '/includes/fonts/RozhaOne-Regular/RozhaOne-Regular'?>.eot?#iefix') format('embedded-opentype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/RozhaOne-Regular/RozhaOne-Regular'?>.woff') format('woff'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/RozhaOne-Regular/RozhaOne-Regular'?>.ttf') format('truetype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/RozhaOne-Regular/RozhaOne-Regular'?>.svg#open-sans') format('svg');
}
@font-face {
  font-family: "roboto-cond";
  src: url("<?php echo get_template_directory_uri(). '/includes/fonts/roboto-condensed/RobotoCondensed-Bold'?>.eot");
  src: url('<?php echo get_template_directory_uri(). '/includes/fonts/roboto-condensed/RobotoCondensed-Bold'?>.eot?#iefix') format('embedded-opentype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/roboto-condensed/RobotoCondensed-Bold'?>.woff') format('woff'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/roboto-condensed/RobotoCondensed-Bold'?>.ttf') format('truetype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/roboto-condensed/RobotoCondensed-Bold'?>.svg#open-sans') format('svg');
}
@font-face {
  font-family: "barlow-cond";
  src: url("<?php echo get_template_directory_uri(). '/includes/fonts/barlowcondensed/BarlowCondensed-Bold'?>.eot");
  src: url('<?php echo get_template_directory_uri(). '/includes/fonts/barlowcondensed/BarlowCondensed-Bold'?>.eot?#iefix') format('embedded-opentype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/barlowcondensed/BarlowCondensed-Bold'?>.woff') format('woff'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/barlowcondensed/BarlowCondensed-Bold'?>.ttf') format('truetype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/barlowcondensed/BarlowCondensed-Bold'?>.svg#open-sans') format('svg');
}
@font-face {
  font-family: "futura";
  src: url("<?php echo get_template_directory_uri(). '/includes/fonts/futura/futura'?>.eot");
  src: url('<?php echo get_template_directory_uri(). '/includes/fonts/futura/futura'?>.eot?#iefix') format('embedded-opentype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/futura/futura'?>.woff') format('woff'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/futura/futura'?>.ttf') format('truetype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/futura/futura'?>.svg#open-sans') format('svg');
}
@font-face {
  font-family: "cmr10";
  src: url("<?php echo get_template_directory_uri(). '/includes/fonts/cmr10/cmr10'?>.eot");
  src: url('<?php echo get_template_directory_uri(). '/includes/fonts/cmr10/cmr10'?>.eot?#iefix') format('embedded-opentype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/cmr10/cmr10'?>.svg#open-sans') format('svg');
}
@font-face {
  font-family: "ablation";
  src: url("<?php echo get_template_directory_uri(). '/includes/fonts/ablation/Ablation'?>.eot");
  src: url('<?php echo get_template_directory_uri(). '/includes/fonts/ablation/Ablation'?>.eot?#iefix') format('embedded-opentype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/ablation/Ablation'?>.woff') format('woff'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/ablation/Ablation'?>.ttf') format('truetype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/ablation/Ablation'?>.svg#open-sans') format('svg');
}
@font-face {
  font-family: "theseasons";
  src: url("<?php echo get_template_directory_uri(). '/includes/fonts/TheSeasons/TheSeasons'?>.eot");
  src: url('<?php echo get_template_directory_uri(). '/includes/fonts/TheSeasons/TheSeasons'?>.eot?#iefix') format('embedded-opentype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/TheSeasons/TheSeasons'?>.woff') format('woff'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/TheSeasons/TheSeasons'?>.ttf') format('truetype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/TheSeasons/TheSeasons'?>.svg#open-sans') format('svg');
}
@font-face {
  font-family: "splinesans";
  src: url("<?php echo get_template_directory_uri(). '/includes/fonts/SplineSans/SplineSans-Regular'?>.eot");
  src: url('<?php echo get_template_directory_uri(). '/includes/fonts/SplineSans/SplineSans-Regular'?>.eot?#iefix') format('embedded-opentype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/SplineSans/SplineSans-Regular'?>.woff') format('woff'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/SplineSans/SplineSans-Regular'?>.ttf') format('truetype'),
       url('<?php echo get_template_directory_uri(). '/includes/fonts/SplineSans/SplineSans-Regular'?>.svg#open-sans') format('svg');
}

</style>
