<?php get_header(); ?>
    <!-- header-->
        <?php
        $carousel_slide1 = get_theme_mod('ip_head_slide1');
        $filter_slide1 = get_theme_mod('ip_head_filter1');
        $button_or_audio = get_theme_mod('ip_head_audio');
        $button_or_audio2 = get_theme_mod('ip_head_audio2');
        $button_or_audio3 = get_theme_mod('ip_head_audio3');
        $ip_show_2 = get_theme_mod('ip_head_show2');
        $ip_show_3 = get_theme_mod('ip_head_show3');
        if ($carousel_slide1) {
        ?>
            <header id="main-head">
                <div class="FullScreenLanding ip_img_slide1 col-12 mx-auto">
                    <div class="<?php if ($filter_slide1 === 'color') { ?> bg-title-color <?php }else if($filter_slide1 === 'dark'){ ?> bg-title-dark <?php } ?>"></div>
                </div>
                <div class="carousel-caption d-flex text-img-home">
                    <div class="container-fluid my-auto text-homepage-container">
                      <div id="carouselFade" class="carousel carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">

                          <div class="carousel-item active fadein mx-auto" style="max-width:85%;">
                            <h1 class="text-white text-mobile text-shadow-6 fadein"><?php echo get_theme_mod('ip_head_text'); ?></h1>
                            <p class="home-p mx-auto"><?php echo get_theme_mod('ip_head_textarea'); ?></p>
                            <?php if($button_or_audio == 'button'){ ?>
                                <br>
                                <button onclick="window.location.href = '<?php echo get_theme_mod('ip_head_link_btn1') ?>';" class="btn p-2 container-fluid mw-600-px bg-light text-dark">
                                    <?php echo get_theme_mod('ip_head_btn1'); ?>
                                </button>
                            <?php } else if ($button_or_audio == 'audio'){?>
                              <br>
                            <audio id="stop-audio1" controls="" src="<?php echo get_theme_mod('ip_head_link_audio') ?>" class="mw-600-px" style="width:inherit;"></audio>
                          <?php } else {} ?>
                          </div>

                          <?php if($ip_show_2 == 'true'){ ?>
                            <div class="carousel-item fadein mx-auto" style="max-width:85%;">
                              <h2 class="text-white text-mobile text-shadow-6 fadein"><?php echo get_theme_mod('ip_head_text2'); ?></h2>
                              <p class="home-p mx-auto"><?php echo get_theme_mod('ip_head_textarea2'); ?></p>
                              <?php if($button_or_audio2 == 'button'){ ?>
                                  <br>
                                  <button onclick="window.location.href = '<?php echo get_theme_mod('ip_head_link_button2') ?>';" class="btn p-2 container-fluid mw-600-px bg-light text-dark">
                                      <?php echo get_theme_mod('ip_head_btn2'); ?>
                                  </button>
                              <?php } else if ($button_or_audio2 == 'audio'){?>
                                <br>
                              <audio id="stop-audio2" controls="" src="<?php echo get_theme_mod('ip_head_link_audio2') ?>" class="mw-600-px stop-audio" style="width:inherit;"></audio>
                            <?php } else {} ?>
                            </div>
                          <?php } ?>

                          <?php if($ip_show_3 == 'true'){ ?>
                            <div class="carousel-item fadein mx-auto" style="max-width:85%;">
                              <h2 class="text-white text-mobile text-shadow-6 fadein"><?php echo get_theme_mod('ip_head_text3'); ?></h2>
                              <p class="home-p mx-auto"><?php echo get_theme_mod('ip_head_textarea3'); ?></p>
                              <?php if($button_or_audio3 == 'button'){ ?>
                                  <br>
                                  <button onclick="window.location.href = '<?php echo get_theme_mod('ip_head_link_button3') ?>';" class="btn p-2 container-fluid mw-600-px bg-light text-dark">
                                      <?php echo get_theme_mod('ip_head_button3'); ?>
                                  </button>
                              <?php } else if ($button_or_audio3 == 'audio'){?>
                                <br>
                              <audio id="stop-audio3" controls="" src="<?php echo get_theme_mod('ip_head_link_audio3') ?>" class="mw-600-px stop-audio" style="width:inherit;"></audio>
                            <?php } else {} ?>
                            </div>
                          <?php } ?>

                        </div>
                      </div>
                    </div>

                    <?php if($ip_show_2 == 'true' || $ip_show_3 == 'true'){ ?>

                      <a class="carousel-control-prev" href="#carouselFade" role="button" data-slide="prev" onclick="pauseAudio();">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                      </a>
                      <a class="carousel-control-next" href="#carouselFade" role="button" data-slide="next" onclick="pauseAudio();">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                      </a>

                    <?php } ?>

                </div>

                <i class="fas fa-caret-down button-down-home"></i>
            </header>
        <?php } else {?>
            <!-- Title no img -->
            <div class="container-fluid py-5 pt-105 pt-lg-90 text-center text-justify text-white bg-personalized">
                <h1 class="text-white text-mobile"><?php blog_info();?></h1>
            </div>
        <?php } ?>
    <!-- end header-->
    <!-- Content -->
    <div id="first-content-home" class="<?php if( is_admin_bar_showing() ){ ?> admin-bar-show <?php } ?> bg-personalized"></div>
        <!-- If texts exists -->
            <div class="row mx-auto bg-personalized shadow-grey-up-down text-shadow-6 to-fade to-fadein-animation show-until-md">
                <!-- Text 1 -->
                    <?php $ip_homepage_show = get_theme_mod('ip_homepage_show1');
                    $logo = get_theme_mod('ip_head_logo');

                    if ($ip_homepage_show == 'true'){
                        $img = get_theme_mod('ip_homepage_img1'); ?>
                        <div class="py-3 col-12 col-md-4 mx-auto my-auto bg-personalized" >
                            <h2 class="text-center">
                                <span class="text-white"><?php echo get_theme_mod('ip_homepage_title1') ?></span>
                            </h2>
                            <img class="aligncenter no-shadow wp-image-10 <?php if(!$logo){ ?> no-shadow <?php } ?> " src="<?php echo wp_get_attachment_url(get_theme_mod('ip_head_logo')); ?>" alt="" width="20" height="20" />
                            <p class="p-2 mw-100 text-white text-<?php echo get_theme_mod('ip_homepage_text_aling1'); ?> " >
                                <?php if($img){ ?> <img src="<?php echo wp_get_attachment_url(get_theme_mod('ip_homepage_img1')); ?>" class="img-fluid no-shadow"> <?php } ?> <br>
                                <?php echo get_theme_mod('ip_homepage_text1') ?>
                            </p>

                            <?php $header_btn = get_theme_mod('ip_homepage_btn1');

                            if ($header_btn){ ?>
                                <p class="text-center">
                                    <button onclick="window.location.href = '<?php echo get_theme_mod('ip_homepage_link_btn1') ?>';" class="container-fluid btn bg-light text-dark">
                                        <?php echo get_theme_mod('ip_homepage_btn1') ?>
                                    </button>
                                </p>
                            <?php } ?>
                        </div>
                    <?php } ?>
                <!-- end text 1 (featured) -->
                <!-- Text 2 -->
                    <?php $ip_homepage_show = get_theme_mod('ip_homepage_show2');

                    if ($ip_homepage_show == 'true'){
                        $img = get_theme_mod('ip_homepage_img2'); ?>
                        <div class="py-3 col-12 col-md-4 mx-auto my-auto bg-personalized text-shadow-6">
                            <h2 class="text-center">
                                <span class="text-white"><?php echo get_theme_mod('ip_homepage_title2') ?></span>
                            </h2>
                            <img class="aligncenter no-shadow wp-image-10 <?php if(!$logo){ ?> no-shadow <?php } ?>" src="<?php echo wp_get_attachment_url(get_theme_mod('ip_head_logo')); ?>" alt="" width="20" height="20" />
                            <p class="p-2 mw-100 text-white text-<?php echo get_theme_mod('ip_homepage_text_aling2'); ?> " >
                                <?php if($img){ ?> <img src="<?php echo wp_get_attachment_url(get_theme_mod('ip_homepage_img2')); ?>" class="img-fluid no-shadow"> <?php } ?> <br>
                                <?php echo get_theme_mod('ip_homepage_text2') ?>
                            </p>
                            <?php $header_btn = get_theme_mod('ip_homepage_btn2');

                            if ($header_btn){
                                ?>
                                <p class="text-center">
                                    <button onclick="window.location.href = '<?php echo get_theme_mod('ip_homepage_link_btn2') ?>';" class="container-fluid btn bg-light text-dark">
                                        <?php echo get_theme_mod('ip_homepage_btn2') ?>
                                    </button>
                                </p>
                            <?php } ?>
                        </div>
                    <?php } ?>
                <!-- end text 2 -->
                <!-- Text 3 -->
                    <?php $ip_homepage_show = get_theme_mod('ip_homepage_show3');

                    if ($ip_homepage_show == 'true'){
                        $img = get_theme_mod('ip_homepage_img3'); ?>
                        <div class="py-3 bg-personalized text-white col-12 col-md-4 mx-auto my-auto text-shadow-6" >
                            <h2 class="text-center" >
                                <span class="text-white"><?php echo get_theme_mod('ip_homepage_title3'); ?></span>
                            </h2>
                            <img class="aligncenter no-shadow wp-image-10 <?php if(!$logo){ ?> no-shadow <?php } ?>" src="<?php echo wp_get_attachment_url(get_theme_mod('ip_head_logo')); ?>" alt="" width="20" height="20" />
                            <p class="p-2 mw-100 text-white text-<?php echo get_theme_mod('ip_homepage_text_aling3'); ?> " >
                                <?php if($img){ ?> <img src="<?php echo wp_get_attachment_url(get_theme_mod('ip_homepage_img3')); ?>" class="img-fluid no-shadow"> <?php } ?> <br>
                                <?php echo get_theme_mod('ip_homepage_text3') ?>
                            </p>
                            <?php
                            $header_btn = get_theme_mod('ip_homepage_btn3');

                            if ($header_btn){ ?>
                                <p class="text-center">
                                    <button onclick="window.location.href = '<?php echo get_theme_mod('ip_homepage_link_btn3') ?>';" class="container-fluid btn bg-light text-dark">
                                        <?php echo get_theme_mod('ip_homepage_btn3') ?>
                                    </button>
                                </p>
                            <?php } ?>
                        </div>
                    <?php } ?>
                <!-- end text 3 -->
            </div>
        <!-- end if texts exists -->
        <!-- Featured products woocomerce -->

            <?php $featured_products = get_theme_mod('ip_woocommerce_featured_show'); ?>
            <?php if($featured_products === 'true' && class_exists('WooCommerce')) { ?>
              <div class="p-2">

                        <h2 class="pt-5 pb-4 widget-title-dark text-center"><?php echo get_theme_mod('ip_woocommerce_featured_title'); ?></h2>
                        <p class="py-2 text-center"><small><?php echo get_theme_mod('ip_woocommerce_featured_text'); ?></small></p>
                        <div id="woo_featured_products" class="p-3 col-12 col-md-10 col-lg-9 mx-auto text-center" style="overflow-x: auto;">
                            <?php echo do_shortcode('[featured_products columns="3" orderby="price" order="ASC"]'); ?>
                        </div>
              </div>
            <?php } ?>

        <!-- end woocommerce featured products -->
        <!-- Sidebar front page -->
            <?php if(is_active_sidebar( 'homepage' )){
                get_sidebar( 'homepage' ); ?>
            <?php } ?>
        <!-- end sidebar front page -->
        <!-- page or posts -->
            <div class="row mw-100 mx-auto">
                <?php $ip_show1 = get_theme_mod('ip_homepage_show1'); ?>
                <?php $ip_show2 = get_theme_mod('ip_homepage_show2'); ?>
                <?php $ip_show3 = get_theme_mod('ip_homepage_show3'); ?>
                <?php if($ip_show1 === 'true'||$ip_show2 === 'true'||$ip_show3 === 'true'){ ?>
                    <div class="col-12 col-md-3 mx-auto px-0 bg-personalized min-h-100 show-from-md left-featured-text <?php if( is_admin_bar_showing() ){ ?> left-featured-text-admin <?php } ?>">
                        <div style="max-height: 95vh;">
                            <!-- Text 1 -->
                                <?php $ip_homepage_show = get_theme_mod('ip_homepage_show1');
                                $logo = get_theme_mod('ip_head_logo');

                                if ($ip_homepage_show == 'true'){
                                    $img = get_theme_mod('ip_homepage_img1'); ?>
                                    <div class="py-3 text-white mx-auto my-auto text-shadow-6" >
                                        <h2 class="text-center">
                                            <span class="text-white"><?php echo get_theme_mod('ip_homepage_title1') ?></span>
                                        </h2>
                                        <p class="p-2 mw-100 text-<?php echo get_theme_mod('ip_homepage_text_aling1'); ?> " >
                                            <?php if($img){ ?> <img src="<?php echo wp_get_attachment_url(get_theme_mod('ip_homepage_img1')); ?>" class="img-fluid no-shadow"> <?php } ?> <br>
                                            <?php echo get_theme_mod('ip_homepage_text1') ?>
                                        </p>

                                        <?php $header_btn = get_theme_mod('ip_homepage_btn1');

                                        if ($header_btn){ ?>
                                            <p class="text-center">
                                                <button onclick="window.location.href = '<?php echo get_theme_mod('ip_homepage_link_btn1') ?>';" class="container-fluid btn bg-light text-dark">
                                                    <?php echo get_theme_mod('ip_homepage_btn1') ?>
                                                </button>
                                            </p>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                            <!-- end text 1 (featured) -->
                            <!-- Text 2 -->
                            <?php $ip_homepage_show = get_theme_mod('ip_homepage_show2');

                            if ($ip_homepage_show == 'true'){
                                $img = get_theme_mod('ip_homepage_img2'); ?>
                                <div class="py-3 text-white mx-auto my-auto text-shadow-6">
                                    <h2 class="text-center">
                                        <span class="text-white"><?php echo get_theme_mod('ip_homepage_title2') ?></span>
                                    </h2>
                                    <p class="p-2 mw-100 text-<?php echo get_theme_mod('ip_homepage_text_aling2'); ?> " >
                                        <?php if($img){ ?> <img src="<?php echo wp_get_attachment_url(get_theme_mod('ip_homepage_img2')); ?>" class="img-fluid no-shadow"> <?php } ?> <br>
                                        <?php echo get_theme_mod('ip_homepage_text2') ?>
                                    </p>
                                    <?php $header_btn = get_theme_mod('ip_homepage_btn2');

                                    if ($header_btn){
                                        ?>
                                        <p class="text-center">
                                            <button onclick="window.location.href = '<?php echo get_theme_mod('ip_homepage_link_btn2') ?>';" class="container-fluid btn bg-light text-dark">
                                                <?php echo get_theme_mod('ip_homepage_btn2') ?>
                                            </button>
                                        </p>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                            <!-- end text 2 -->
                            <!-- Text 3 -->
                                <?php $ip_homepage_show = get_theme_mod('ip_homepage_show3');

                                if ($ip_homepage_show == 'true'){
                                    $img = get_theme_mod('ip_homepage_img3'); ?>
                                    <div class="py-3 text-white mx-auto my-auto text-shadow-6" >
                                        <h2 class="text-center" >
                                            <span class="text-white"><?php echo get_theme_mod('ip_homepage_title3'); ?></span>
                                        </h2>
                                        <p class="p-2 mw-100 text-<?php echo get_theme_mod('ip_homepage_text_aling3'); ?> " >
                                            <?php if($img){ ?> <img src="<?php echo wp_get_attachment_url(get_theme_mod('ip_homepage_img3')); ?>" class="img-fluid no-shadow"> <?php } ?> <br>
                                            <?php echo get_theme_mod('ip_homepage_text3') ?>
                                        </p>
                                        <?php
                                        $header_btn = get_theme_mod('ip_homepage_btn3');

                                        if ($header_btn){ ?>
                                            <p class="text-center">
                                                <button onclick="window.location.href = '<?php echo get_theme_mod('ip_homepage_link_btn3') ?>';" class="container-fluid btn bg-light text-dark">
                                                    <?php echo get_theme_mod('ip_homepage_btn3') ?>
                                                </button>
                                            </p>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                            <!-- end text 3 -->
                        </div>
                    </div>
                <?php } ?>
                <?php if ( is_front_page() && !is_home() ) {?>
                    <?php get_template_part('content-home') ?>
                <?php } else { ?>
                    <div style="background: #f9f9f9" class="p-3 col-12 <?php if($ip_show1 === 'true'||$ip_show2 === 'true'||$ip_show3 === 'true'){ ?> col-md-9 <?php }else{ ?> col-md-10 col-lg-9 <?php } ?> mx-auto">
                        <h2 class="text-center">Lo más reciente</h2>
                        <div class="card-columns-2 p-2">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <?php get_template_part('content', get_post_format()) ?>
                            <?php endwhile; endif; ?>
                        </div>
                        <div class="py-5 px-3 text-center">
                            <h5>Estás buscando un articulo más antiguo?</h5>
                            <?php get_search_form(); ?>
                        </div>
                    </div>
                <?php }?>

            </div>
        <!-- end page or posts -->
    <!-- end content -->
<?php get_footer(); ?>
