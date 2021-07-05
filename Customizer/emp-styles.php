<style type="text/css">
:root{
  /* Notice */
  --emp-notice-bg : <?php echo get_theme_mod('emp_components_notice_background'); ?>;
  --emp-notice-color: <?php echo get_theme_mod('emp_components_notice_color'); ?>;
  /* Nav */
  --emp-nav-bg: <?php echo get_theme_mod('emp_components_nav_background'); ?>;
  --emp-nav-color: <?php echo get_theme_mod('emp_components_nav_color'); ?>;
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
  --emp-btn-bg: <?php echo get_theme_mod('emp_components_content_btn_bg'); ?>;
  --emp-btn-color: <?php echo get_theme_mod('emp_components_content_btn_color'); ?>;
  /* Footer */
  --emp-footer-bg: <?php echo get_theme_mod('emp_components_footer_background'); ?>;
  --emp-footer-color: <?php echo get_theme_mod('emp_components_footer_color'); ?>;
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
  background: url(<?php echo get_the_post_thumbnail_url(); ?> ) repeat 50% 50%;
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

.text-mobile {
  font-size: <?php echo (get_theme_mod('emp_components_head_title_size') * 0.30); ?>px!important;/*warning*/
}
#main-head p{
  font-size: <?php echo (get_theme_mod('emp_components_head_text_size') * 0.30); ?>px;
}
@media (min-width: 577px) {
  .text-mobile {
    font-size: <?php echo (get_theme_mod('emp_components_head_title_size') - 60); ?>px!important;
  }
  #main-head p{
    font-size: <?php echo (get_theme_mod('emp_components_head_text_size') - 80); ?>px;
  }
}
@media (min-width: 992px) {
  .text-mobile {
    font-size: <?php echo get_theme_mod('emp_components_head_title_size'); ?>px!important;
  }
  #main-head p{
    font-size: <?php echo get_theme_mod('emp_components_head_text_size'); ?>px;
  }
}

@media (min-width:992px) {
  .p-personalized-1{
    padding:<?php echo get_theme_mod('emp_homepage_size1'); ?>%!important;
  }
  .p-personalized-2{
    padding:<?php echo get_theme_mod('emp_homepage_size2'); ?>%!important;
  }
  .p-personalized-3{
    padding:<?php echo get_theme_mod('emp_homepage_size3'); ?>%!important;
  }
}

/* Borders */
.btn-outline-light, a.button.product_type_variable, a.button.product_type_simple.add_to_cart_button, a.button.product_type_simple{
  border: 1px <?php echo get_theme_mod('emp_components_head_title_color'); ?> solid;
}
<?php if(get_theme_mod('emp_components_content_radius')){ ?>
  .woocommerce span.onsale{
    border-radius:0 50%!important;
  }
  article, .woocommerce ul.products li.product a img,
  a.button.product_type_variable, a.button.product_type_simple.add_to_cart_button,.tutor-course,img.attachment-post-thumbnail.size-post-thumbnail,
  article img, section img,a.button.product_type_simple, a.checkout-button.button.alt.wc-forward,
  .woocommerce-product-gallery .flex-viewport, figure.woocommerce-product-gallery__wrapper div img{
    border-radius: 30px!important;
  }
  @media (max-width:991px){
    #bg-menu-mobile{
      border-radius: 0 0 50% 50%;
    }
    #bg-searchform-mobile, #bg-woocommerce-mobile{
      border-radius: 50% 50% 0 0;
    }
  }
  .sfpo-table {
      border-radius: 30px;
      overflow: hidden;
  }
  .btn,.border-30px, .tutor-container .tutor-row, .tutor-single-course-sidebar, .tutor-col-8,.tutor-dashboard .tutor-container,
  .tutor-cart-box-login-form-inner, .woocommerce-notices-wrapper, .woocommerce-error, .woocommerce-info, .woocommerce-message, li.product.type-product,
  li.product.product-category, blockquote, iframe{
    border-radius: 30px;
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
@media (min-width: 768px){
  .support-woo-shortcode .woocommerce ul.products li.product{
    width: <?php echo get_theme_mod('emp_woocommerce_category_size');?>%!important;
  }
}
<?php if(!get_theme_mod('emp_woocommerce_categories_label_show')){ ?>
  h2.woocommerce-loop-category__title {
    display: none;
  }
<?php } ?>
/* Fonts */
@font-face {
  font-family: "the secret";
  src: url("<?php echo get_template_directory_uri(). '/includes/fonts/the-secret/TheSecret-Regular.woff';?>") format("woff");
}
@font-face {
  font-family: "flanella";
  src: url("<?php echo get_template_directory_uri(). '/includes/fonts/Flanella/Flanella.woff'?>") format("woff");
}
</style>
