<style type="text/css">
/* backgrounds */
#top-notice{
  background-color: <?php echo get_theme_mod('emp_components_notice_background'); ?>
}
.navbar-scroll, .buttons-mobile, #navbar-background:hover{
  background-color: <?php echo get_theme_mod('emp_components_nav_background'); ?>ee!important;
  transition: .3s all;
}
.bg-personalized, #bg-menu-mobile, .bg-title-color, .bg-title-content-color, body, .woocommerce span.onsale,
#bg-woocommerce-mobile{
  background-color: <?php echo get_theme_mod('emp_components_head_title_background'); ?> !important;
}
.emp-background-media-filter{
  opacity: <?php echo get_theme_mod('emp_components_head_filter'); ?>;
}
.emp-background-image{
  background: url(<?php echo wp_get_attachment_url(get_theme_mod('emp_components_head_image')); ?>) center;
  height: 100vh
}
.content-background, ::-webkit-scrollbar-track, li.product.type-product{
  background-color: <?php echo get_theme_mod('emp_components_content_background');?>;
}
::-webkit-scrollbar-thumb{
  background-color: <?php echo get_theme_mod('emp_components_content_color'); ?>cc;
}
footer{
  background-color: <?php echo get_theme_mod('emp_components_footer_background'); ?>ee;
}
.the_post_thumbnail{
  background: url(<?php echo get_the_post_thumbnail_url(); ?> ) repeat 50% 50%;
}

/* Tipography */
.color-personalized, h1.text-mobile,.color-personalized .fa , .color-personalized .fab,
.woocommerce span.onsale, .tutor-dashboard-header-ratings,.btn-outline-light, a.fa.fa-shopping-cart.mr-4.fadein.show-desktop, #btn-search-desktop{
  color: <?php echo get_theme_mod('emp_components_head_title_color'); ?> !important;
}
.content-color, h2.woocommerce-loop-product__title{
  color: <?php echo get_theme_mod('emp_components_content_color'); ?>;
}
.menu-item a, .fa-text, .mini_cart_item a, .mini_cart_item span, .woocommerce-mini-cart__total, .woocommerce-mini-cart__total strong,
#searchform-woocommerce{
  color: <?php echo get_theme_mod('emp_components_nav_color'); ?>;
}
.fa, .fab, .icon-color{
  color: <?php echo get_theme_mod('emp_components_nav_icon_color'); ?>!important;
}
footer, footer a{
  color: <?php echo get_theme_mod('emp_components_footer_color'); ?>!important;
}
section, article, .woocommerce-loop-product__title, .color-personalized-secondary, .card-header a, a.woocommerce-review-link,
.woocommerce-MyAccount-content a,.woocommerce div.product p.price, article a, section a{
  color: <?php echo get_theme_mod('emp_components_content_color'); ?> !important;
}
#top-notice{
  color: <?php echo get_theme_mod('emp_components_notice_color'); ?>
}
body, .fa-text{
  font-family: '<?php echo get_theme_mod('emp_components_content_tipography'); ?>', 'sans-serif';
}
body{
  font-size: <?php echo get_theme_mod('emp_components_content_size'); ?>px;
}
@media (min-width: 577px) {
  .text-mobile {
    font-size: <?php echo (get_theme_mod('emp_components_head_title_size') - 80) ?>px!important;
  }
}
@media (min-width: 992px) {
  .text-mobile {
    font-size: <?php echo get_theme_mod('emp_components_head_title_size'); ?>px!important;
  }
}
.text-mobile {
    word-wrap: break-word;
}

/* Special items */
.dashboard-section-overview .copy-to-clipboard-trigger, .checkout-button, #place_order, th {
    background-color: <?php echo get_theme_mod('emp_components_content_btn_bg'); ?>!important;
    color: <?php echo get_theme_mod('emp_components_content_btn_color'); ?> !important;
}

/* Borders */
.btn-outline-light, a.button.product_type_variable, a.button.product_type_simple.add_to_cart_button, a.button.product_type_simple{
  border: 1px <?php echo get_theme_mod('emp_components_head_title_color'); ?> solid;
}
.tutor-single-lesson-wrap{
  border-top: 60px solid <?php echo get_theme_mod('emp_background_primary'); ?> !important;
}
<?php if(get_theme_mod('emp_styles_border') === 'true'){ ?>
  article, .woocommerce ul.products li.product a img,
  a.button.product_type_variable, a.button.product_type_simple.add_to_cart_button,.tutor-course,img.attachment-post-thumbnail.size-post-thumbnail,
  article img, section img,a.button.product_type_simple, a.checkout-button.button.alt.wc-forward,
  .woocommerce-product-gallery .flex-viewport{
    border-radius: 30px!important;
  }
  section.col-12{
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
.btn, .wpcf7-submit, #submit.submit, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, .reset_variations{
  background-color: <?php echo get_theme_mod('emp_components_head_title_background'); ?>!important;
  color: <?php echo get_theme_mod('emp_components_head_title_color'); ?>!important;
}
.btn:hover, .btn:focus, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus{
  color: <?php echo get_theme_mod('emp_btn_color'); ?>!important;
  background-color: <?php echo get_theme_mod('emp_btn_bg'); ?>;
}
a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart, button.single_add_to_cart_button.button.alt, a.button.product_type_variable,
a.button.product_type_simple{
  background-color: <?php echo get_theme_mod('emp_components_content_btn_bg'); ?>!important;
  color: <?php echo get_theme_mod('emp_components_content_btn_color'); ?>!important;
}

/* Shadows */
<?php if (get_theme_mod('emp_shadow') === 'true') { ?>
  img, iframe {
    box-shadow: 0 13px 13px rgba(0, 0, 0, 0.6)!important;
    transition: all .5s;
  }
  .FullScreenLanding, .shadow-grey-down, a.button, img, select.orderby{
    box-shadow: 0px 13px 13px rgba(0, 0, 0, .2)!important;
    transition: all .5s;
  }
  .shadow-grey-down-1{
    box-shadow: 0px 13px 38px rgba(0, 0, 0, .6)!important;
  }
  .img-btn-fixed, .dropdown-toggle::after {
    box-shadow: 0 5px 13px rgba(0, 0, 0, 0.6);
    border-radius: 26px;
  }
  @media(min-width: 991px){
    nav.navbar.navbar-scroll{
      box-shadow: 0 5px 13px rgba(0, 0, 0, 0.2)!important;
    }
  }
  .buttons-mobile, .shadow-grey-up, .footer, .tutor-course.tutor-course-loop{
    box-shadow: 0px -5px 13px rgba(0, 0, 0, .2)!important;
  }
  .shadow-grey-up-down, .btn, .card{
    box-shadow: 0px -5px 13px rgba(0, 0, 0, .2), 0px 13px 13px rgba(0, 0, 0, .2);
  }
  @media(max-width: 991px){
    #s, #searchsubmit, .select-form{
      box-shadow: 0px 13px 13px rgba(0, 0, 0, .2)!important;
    }
    .menu-item a{
      text-shadow: 0 5px 13px rgba(0, 0, 0, 0.6);
    }
  }
  .sfpo-table tbody th{
    box-shadow:0 14px 13px rgba(0,0,0,.2)
  }
  .sfpo-table tbody th,.sfpo-table thead,.sfpo-table td a {
    box-shadow: 0 14px 13px rgba(0,0,0,0.2);
    transition: all .5s;
  }
<?php } ?>
/* woocommerce */
@media(min-width:992px){
  .woocommerce-page.columns-3 ul.products li.product, .woocommerce.columns-3 ul.products li.product{
    width: <?php echo get_theme_mod('emp_woocommerce_featured_size'); ?>%!important;
  }
  .support-woo-shortcode .woocommerce.columns-3 ul.products li.product{
    width: <?php echo get_theme_mod('emp_woocommerce_category_size'); ?>%!important;
  }
}
.woocommerce.columns-3 ul::-webkit-scrollbar-track{
  background-color: <?php echo get_theme_mod('emp_components_content_color'); ?>22;
}
<?php if(get_theme_mod('emp_woocommerce_featured_size') < 25){ ?>
  .woocommerce-page.columns-3 ul.products li.product, .woocommerce.columns-3 ul.products li.product,
  a.button.product_type_variable, a.button.product_type_simple.add_to_cart_button, a.button.product_type_simple{
    font-size: 16px;
  }
<?php } else { ?>
  .woocommerce-page.columns-3 ul.products li.product, .woocommerce.columns-3 ul.products li.product,
  a.button.product_type_variable, a.button.product_type_simple.add_to_cart_button, a.button.product_type_simple{
    font-size: 25px;
  }
<?php } ?>
</style>
