    <!-- Footer -->

        <footer class="container-fluid text-white py-3 pb-5 foote text-center" style="background-color: <?php echo get_theme_mod('ip_footer_color'); ?>;">
                <!-- Sidebar -->
                <?php if(is_active_sidebar( 'footer' )){
                    get_sidebar( 'footer' );
                } ?>

            	<!-- Social buttons -->
	            	<div class="container-fluid p-3">
		            	<!-- Facebook -->
			            	<?php $facebook_link = get_theme_mod('ip_social_face_text');
			                    if ($facebook_link){
			                    	?><a href="<?php echo get_theme_mod('ip_social_face_text'); ?>" class="fab fa-facebook-f"></a><?php
			                    }
			                ?>
			            <!-- Instagram -->
			            	<?php $instagram_link = get_theme_mod('ip_social_insta_text');
			                    if ($instagram_link){
			                    	?><a href="<?php echo get_theme_mod('ip_social_insta_text'); ?>" class="fab fa-instagram"></a><?php
			                    }
			                ?>
			            <!-- Twiter -->
			            	<?php $twitter_link = get_theme_mod('ip_social_tw_text');
			                    if ($twitter_link){
			                    	?><a href="<?php echo get_theme_mod('ip_social_tw_text'); ?>" class="fab fa-twitter"></a><?php
			                    }
			                ?>
			            <!-- Youtube -->
			            	<?php $youtube_link = get_theme_mod('ip_social_yt_text');
			                    if ($youtube_link){
			                    	?><a href="<?php echo get_theme_mod('ip_social_yt_text'); ?>" class="fab fa-youtube"></a><?php
			                    }
			                ?>
		            </div>
            	<!-- end social buttons -->
                <!-- Owner -->
                    <p><?php echo get_theme_mod('ip_footer_text'); ?><br><small>Desarrollado por <a href="https://informatica.pereyra.online">Informatica Pereyra</a></small></p>
                <!-- end owner -->
                <p><small><a href="<?php echo get_permalink(get_theme_mod('ip_headline_link_term')); ?>" class="text-secondary">Terminos y Condiciones</a> -
                <a href="<?php echo get_permalink(get_theme_mod('ip_headline_link_poli')); ?>" class="text-secondary">Politicas de Privacidad</a></small></p>
                <br>
                <?php echo get_theme_mod('ip_qr_text') ?>
                <br>
        </footer>
    <!-- end footer -->
    <!-- Button permanent desktop -->
        <div class="show-btn-fixed">
            <?php  $perma_button = get_theme_mod('ip_what_text'); ?>
            <?php if ($perma_button) { ?>
            	<div class="img-fixed show-desktop"><a href="https://api.whatsapp.com/send?phone=<?php echo get_theme_mod('ip_what_text'); ?>&text=Hola%20tengo%20una%20consulta%20desde%20<?php echo str_replace(' ', '%20', wp_title('', false));?>"><img class="img-btn-fixed-wsp" height="512" width="512" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/whatsapp-logo.png" alt="ip-whatsapp"></a></div>
            <?php } ?>
            	<div class="img-fixed" id="scrollToTopButton"><i class="fas fa-arrow-up img-btn-fixed <?php if ($perma_button) { ?> show-mobile <?php } ?>"></i></div>
        </div>

    <!-- end button permanent desktop -->
    <!-- Buttons mobile -->
        <div class="mx-auto container-fluid fixed-bottom bg-personalized" id="bg-searchform-mobile"></div>
        <div class="mx-auto container-fluid fixed-bottom bg-white" id="bg-woocommerce-mobile"></div>
        <div class="buttons-mobile show-sm text-center d-flex justify-content-between align-items-center fixed-bottom p-2">
            <!-- Home-->
                <a href="<?php echo home_url(); ?>" class="fa-dark fa fa-home mx-auto"><span class="fa-text">Inicio</span></a>
            <!-- User -->
                <?php $user_link = get_theme_mod('ip_mobile_user_text');
                    if ($user_link){ ?>
                        <a href="<?php echo get_theme_mod('ip_mobile_user_text'); ?>" class="fa-dark fa fa-user mx-auto">
                            <span class="fa-text">Ingresar</span>
                        </a>
                    <?php }
                ?>
            <!-- Cart -->
                <?php $cart_link = get_theme_mod('ip_mobile_cart_text');
                    if (class_exists('WooCommerce') && $cart_link == 'true'){ ?>
                        <a id="btn-woocommerce-cart" onclick="showWoocommerceCart();" class="fa-dark fa fa-shopping-cart mx-auto <?php if ((WC()->cart->get_cart_contents_count()) > 0) { ?> fadein <?php } ?>" >
                            <span id="span-woocommerce-cart" class="fa-text">Carrito</span>

                                    <small id="span-woocommerce-counter" class="woo-counter-cart-number added_to_cart wc-forward">
                                        <div id="mini-cart-count"></div>
                                    </small>
                        </a>

                    <?php } ?>
            <!-- Whatsapp -->
                <?php $wp_link_ip = get_theme_mod('ip_mobile_whatsapp_text');
                    if ($wp_link_ip == 'true' && $perma_button){ ?>
                        <a href="https://api.whatsapp.com/send?phone=<?php echo get_theme_mod('ip_what_text'); ?>&text=Hola%20tengo%20una%20consulta%20desde%20<?php echo str_replace(' ', '%20', wp_title('', false));?>" class="fa-dark fab fa-whatsapp fa-whatsapp-size mx-auto">
                            <span class="fa-text">Whatsapp</span>
                        </a>
                    <?php } ?>
            <!-- Search Form -->
                <?php $search_link = get_theme_mod('ip_mobile_search_text');
                    if ($search_link == 'true'){ ?>
                        <a id="btn-searchform" class="fa-dark fa fa-search mx-auto" onclick="showSearchBackground();">
                            <span id="span-searchform" class="fa-text">Buscar</span>
                        </a>

                    <?php } ?>
        </div>
        <div id="searchform-woocommerce" style="display: none;overflow:auto;max-height:83vh;text-align:center;padding:20px;z-index:1020;">
          <?php echo do_shortcode('[custom-techno-mini-cart]'); ?>
        </div>
        <div id="searchform-mobile" style="display: none;">
            <?php get_search_form(); ?>
        </div>


    <!-- end buttons mobile -->
    <!-- Js -->
    <script>
        function downloadJSAtOnload() {
        var element = document.createElement("script");
        element.src = "<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.bundle.min.js";
        document.body.appendChild(element);

        var element1 = document.createElement("script");
        element1.src = "<?php echo esc_url( get_template_directory_uri() ); ?>/js/complements.js";
        document.body.appendChild(element1);
        }
        if (window.addEventListener){
        window.addEventListener("load", downloadJSAtOnload, false);
        }else if (window.attachEvent){
        window.attachEvent("onload", downloadJSAtOnload);
        }else { window.onload = downloadJSAtOnload;}
    </script>
    <!-- jQuery -->
    <script defer src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-3.3.1.min.js"></script>
    <!-- WP js -->
    <?php wp_footer(); ?>
  </body>
</html>
