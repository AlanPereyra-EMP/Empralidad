<?php $featured_products = get_theme_mod('ip_woocommerce_featured_show'); ?>
<?php if($featured_products === 'true' && class_exists('WooCommerce')) { ?>
  <div class="p-2">

            <h2 class="pt-5 pb-4 widget-title-dark text-center"><?php echo get_theme_mod('ip_woocommerce_featured_title'); ?></h2>
            <p class="py-2 text-center"><small><?php echo get_theme_mod('ip_woocommerce_featured_text'); ?></small></p>
            <div id="woo_featured_products" class="p-2 col-12 mx-auto text-center" style="overflow-x: auto;">
                <?php echo do_shortcode('[featured_products columns="3" orderby="price" order="ASC"]'); ?>
            </div>
  </div>
<?php } ?>