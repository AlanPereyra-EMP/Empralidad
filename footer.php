    <footer class="container-fluid py-3 pb-5 footer no-shadow">
      <div class="mw-1200px text-center">
        <!-- Sidebar -->
        <?php if(is_active_sidebar( 'footer' )){
          get_sidebar( 'footer' );
        } ?>

      	<!-- Social buttons -->
      	<div class="container-fluid p-3 fa-2x">
        	<!-- Facebook -->
        	<?php $facebook_link = get_theme_mod('emp_components_footer_face');
          if ($facebook_link){ ?>
            <a href="<?php echo get_theme_mod('emp_components_footer_face'); ?>" class="fab fa-facebook-f"></a>
          <?php } ?>
          <!-- Instagram -->
        	<?php $instagram_link = get_theme_mod('emp_components_footer_insta');
          if ($instagram_link){ ?>
            <a href="<?php echo get_theme_mod('emp_components_footer_insta'); ?>" class="fab fa-instagram"></a>
          <?php } ?>
          <!-- Twiter -->
        	<?php $twitter_link = get_theme_mod('emp_components_footer_tw');
          if ($twitter_link){ ?>
            <a href="<?php echo get_theme_mod('emp_components_footer_tw'); ?>" class="fab fa-twitter"></a>
          <?php } ?>
          <!-- Youtube -->
        	<?php $youtube_link = get_theme_mod('emp_components_footer_yt');
          if ($youtube_link){ ?>
            <a href="<?php echo get_theme_mod('emp_components_footer_yt'); ?>" class="fab fa-youtube"></a>
          <?php } ?>
        </div>
        <p><?php echo get_theme_mod('emp_components_footer_text'); ?></p>
        <p><small><a href="<?php echo get_permalink(get_theme_mod('emp_components_footer_term')); ?>" >Terminos y Condiciones</a> -
        <a href="<?php echo get_permalink(get_theme_mod('emp_components_footer_poli')); ?>">Politicas de Privacidad</a></small></p>
        <!-- Owner -->
        <p><small>Desarrollado por</small> <a href="https://empralidad.com.ar"><b>Empralidad</b></a></p>
        <br>
        <p style="width:50px;" class="mx-auto"><?php echo get_theme_mod('emp_components_footer_qr') ?></p>
        <br>
      </div>
    </footer>
    <!-- Button permanent desktop -->
    <div class="show-btn-fixed">
      <?php
      $perma_button = get_theme_mod('emp_components_nav_wsp');
      $link_chat_emp = get_theme_mod('emp_components_nav_chat_emp');
      if($link_chat_emp != ''){ ?>
        <div id="chat-emp-btn-fixed" class="img-fixed show-desktop"><a href="<?php echo get_theme_mod('emp_components_nav_chat_emp'); ?>" class="fas fa-comment-dots"></a></div>
      <?php }else if($perma_button){ ?>
      	<div class="img-fixed show-desktop"><a href="https://api.whatsapp.com/send?phone=<?php echo get_theme_mod('emp_components_nav_wsp_numb'); ?>&text=Hola%20tengo%20una%20consulta%20desde:%0A%0A*<?php echo str_replace(' ', '%20', wp_get_document_title() );?>*%0A%0A<?php echo get_permalink(); ?>"><img class="img-btn-fixed-wsp" height="512" width="512" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/whatsapp-logo.png" alt="emp-whatsapp"></a></div>
      <?php } ?>
    	<div class="img-fixed" id="scrollToTopButton"><i class="fas fa-arrow-up img-btn-fixed <?php if ($perma_button) { ?> show-mobile <?php } ?>"></i></div>
    </div>
    <!-- Buttons mobile -->
    <div class="mx-auto container-fluid fixed-bottom bg-personalized" id="bg-searchform-mobile"></div>
    <div class="buttons-mobile show-sm text-center d-flex justify-content-between align-items-center fixed-bottom p-2">
      <!-- Home-->
      <?php $home_url =  get_theme_mod('emp_components_nav_home');
      if ($home_url == ''){
        $home_url = home_url();
      }
      ?>
      <a href="<?php echo $home_url ?>" class="fa-dark fa fa-home mx-auto"><span class="fa-text">Inicio</span></a>
      <!-- User -->
      <?php $user_link = get_theme_mod('emp_components_nav_user');
      if ($user_link){ ?>
        <a href="<?php echo get_theme_mod('emp_components_nav_user'); ?>" class="fa-dark fa fa-user mx-auto">
            <span class="fa-text">Ingresar</span>
        </a>
      <?php } ?>
      <!-- Cart -->
      <?php $cart_link = get_theme_mod('emp_components_nav_cart');
      if (class_exists('WooCommerce') && $cart_link){ ?>
        <a id="btn-woocommerce-cart" onclick="showWoocommerceCart();" class="fa-dark fa fa-shopping-cart mx-auto <?php if ((WC()->cart->get_cart_contents_count()) > 0) { ?> fadein <?php } ?>" >
          <span id="span-woocommerce-cart" class="fa-text">Carrito</span>
          <small id="span-woocommerce-counter" class="woo-counter-cart-number added_to_cart wc-forward">
            <div id="mini-cart-count" class="icon-color"></div>
          </small>
        </a>
      <?php } ?>
      <!-- Whatsapp -->
      <?php $wp_link_ip = get_theme_mod('emp_components_nav_wsp');
      if ($wp_link_ip && $perma_button){ ?>
        <a href="https://api.whatsapp.com/send?phone=<?php echo get_theme_mod('emp_components_nav_wsp_numb'); ?>&text=Hola%20tengo%20una%20consulta%20*<?php echo str_replace(' ', '%20', bloginfo('name'));?>*%20%20%20%20<?php echo get_permalink(); ?>" class="fa-dark fab fa-whatsapp fa-whatsapp-size mx-auto">
          <span class="fa-text">Whatsapp</span>
        </a>
      <?php } ?>
      <!-- Chat-EMP -->
      <?php
      if ($link_chat_emp){ ?>
        <a href="<?php echo get_theme_mod('emp_components_nav_chat_emp'); ?>" class="fas fa-comment-dots mx-auto">
          <span class="fa-text">Chat</span>
        </a>
      <?php } ?>
      <!-- Search Form -->
      <?php $search_link = get_theme_mod('emp_components_nav_search');
      if ($search_link){ ?>
        <a id="btn-searchform" class="fa-dark fa fa-search mx-auto" onclick="showSearchBackground();">
          <span id="span-searchform" class="fa-text">Buscar</span>
        </a>
      <?php } ?>
    </div>
    <div id="searchform-woocommerce" style="display:none;">
      <?php echo do_shortcode('[emp-mini-cart]'); ?>
    </div>
    <div id="searchform-mobile" style="display: none;">
      <?php get_search_form(); ?>
    </div>
    <!-- WP js -->
    <?php wp_footer(); ?>
  </body>
</html>
