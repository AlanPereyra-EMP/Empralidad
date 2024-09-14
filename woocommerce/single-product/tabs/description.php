<?php
/**
 * Description tab
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.0.0
 */

defined( 'ABSPATH' ) || exit;

global $post, $product;

$id = $product->id;
$icon_url = esc_url( get_template_directory_uri() ).'/includes/icons/';

$heading = apply_filters( 'woocommerce_product_description_heading', __( 'Description', 'woocommerce' ) );

?>

<?php if ( $heading ) : ?>
	
<?php endif; ?>

<?php the_content(); ?>

<!-- Custom fields -->
<?php
if(get_post_meta($id, '_custom_product_component_field_gpu', true)){
    $class_gpu = get_post_meta($id, '_custom_product_component_field_gpu_brand', true);
    if(get_post_meta($id, '_custom_product_component_field_gpu_brand', true) == 1){
        $class_gpu = 'nvidia';
    }else if(get_post_meta($id, '_custom_product_component_field_gpu_brand', true) == 2){
        $class_gpu = 'amd';
    }
    echo '<p class="gpu '.$class_gpu.'">'.get_post_meta($id, '_custom_product_component_field_gpu', true).'</p>';
}
?>

<div id="woocommerce-custom-field-pc-gaming">
    <?php
        
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
    ?>
</div>