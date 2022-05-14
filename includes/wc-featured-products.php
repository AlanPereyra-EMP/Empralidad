<?php $featured_products = get_theme_mod('emp_woocommerce_featured_show'); ?>
<?php $featured_products_margin_negative = get_theme_mod('emp_woocommerce_featured_margin_negative'); ?>
<?php $featured_products_h2 = get_theme_mod('emp_woocommerce_featured_title'); ?>
<?php if($featured_products && class_exists('WooCommerce')) { ?>
  <div class="p-2 <?php if($featured_products_margin_negative){ ?> mt-250-n <?php } ?>">
    <?php if($featured_products_h2){ ?>
      <h2 class="pt-5 pb-4 px-0 h1 text-center"><?php echo get_theme_mod('emp_woocommerce_featured_title'); ?></h2>
    <?php } ?>
    <p class="py-2 text-center"><small><?php echo get_theme_mod('emp_woocommerce_featured_text'); ?></small></p>
    <div id="woo_featured_products" class="px-1 py-4 col-12 mx-auto text-center overflow-hidden">
      <?php echo do_shortcode('[featured_products columns="3" orderby="price" order="ASC"]'); ?>
    </div>
  </div>
<?php } ?>
