<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

$id = $product->id;
$icon_url = esc_url( get_template_directory_uri() ).'/includes/icons/';

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class( '', $product ); ?>>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );

    // Add custom field
    echo '<div class="woocommerce-custom-field-pc-gaming-loop">';
        if(get_post_meta($id, '_custom_product_component_field_cpu', true)){
            echo '<div class="wrap">
                    <img src="'.$icon_url.'cpu.svg" />';
            echo    get_post_meta($id, '_custom_product_component_field_cpu', true);
            echo '</div>';
        }
        if(get_post_meta($id, '_custom_product_component_field_mother', true)){
            echo '<div class="wrap">
                    <img src="'.$icon_url.'mother.svg" />';
            echo    get_post_meta($id, '_custom_product_component_field_mother', true);
            echo '</div>';
        }
        if(get_post_meta($id, '_custom_product_component_field_ram', true)){
            echo '<div class="wrap">
                    <img src="'.$icon_url.'ram.svg" />';
            echo    get_post_meta($id, '_custom_product_component_field_ram', true);
            echo '</div>';
        }
        if(get_post_meta($id, '_custom_product_component_field_ssd_hdd', true)){
            echo '<div class="wrap">
                    <img src="'.$icon_url.'ssd.svg" />';
            echo    get_post_meta($id, '_custom_product_component_field_ssd_hdd', true);
            echo '</div>';
        }
        if(get_post_meta($id, '_custom_product_component_field_power_supply', true)){
            echo '<div class="wrap">
                    <img src="'.$icon_url.'power_supply.svg" />';
            echo    get_post_meta($id, '_custom_product_component_field_power_supply', true);
            echo '</div>';
        }
        if(get_post_meta($id, '_custom_product_component_field_chassis', true)){
            echo '<div class="wrap">
                    <img src="'.$icon_url.'chassis.svg" />';
            echo    get_post_meta($id, '_custom_product_component_field_chassis', true);
            echo '</div>';
        }
        if(get_post_meta($id, '_custom_product_component_field_display', true)){
            echo '<div class="wrap">
                    <img src="'.$icon_url.'display.svg" />';
            echo    get_post_meta($id, '_custom_product_component_field_display', true);
            echo '</div>';
        }
    echo '</div>';

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
</li>