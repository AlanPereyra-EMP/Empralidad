<?php get_header(); ?>
    <!-- header-->
        <?php
        $carousel_slide1 = get_theme_mod('emp_head_slide1');
        $button_or_audio = get_theme_mod('emp_head_audio');
        $button_or_audio2 = get_theme_mod('emp_head_audio2');
        $button_or_audio3 = get_theme_mod('emp_head_audio3');
        $emp_show_2 = get_theme_mod('emp_head_show2');
        $emp_show_3 = get_theme_mod('emp_head_show3');
        if (true) {
        ?>
            <header id="main-head">
              <!-- Video was here -->
                <div class="carousel-caption d-flex text-img-home h-100">
                    <div class="container-fluid my-auto text-homepage-container">
                      <div id="carouselFade" class="carousel carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">

                          <div class="carousel-item active empFadeIn mx-auto color-personalized mw-1200px">
                            <h1 class="text-mobile color-personalized text-shadow-6 empFadeIn"><?php echo get_theme_mod('emp_head_text_title'); ?></h1>
                            <p class="mx-auto"><?php echo get_theme_mod('emp_head_textarea'); ?></p>
                            <?php if($button_or_audio == 'button'){ ?>
                                <br>
                                <button onclick="window.location.href = '<?php echo get_theme_mod('emp_head_link_btn1') ?>';" class="btn p-2 container-fluid mw-600-px border-30px btn-outline-light">
                                    <?php echo get_theme_mod('emp_head_btn1'); ?>
                                </button>
                            <?php } else if ($button_or_audio == 'audio'){?>
                              <br>
                            <audio id="stop-audio1" controls="" src="<?php echo get_theme_mod('emp_head_link_audio') ?>" class="mw-600-px" style="width:inherit;"></audio>
                          <?php } else {} ?>
                          </div>

                          <?php if($emp_show_2 == 'true'){ ?>
                            <div class="carousel-item empFadeIn mx-auto color-personalized mw-1200px">
                              <h2 class="text-mobile text-shadow-6 empFadeIn"><?php echo get_theme_mod('emp_head_text2'); ?></h2>
                              <p class="mx-auto"><?php echo get_theme_mod('emp_head_textarea2'); ?></p>
                              <?php if($button_or_audio2 == 'button'){ ?>
                                  <br>
                                  <button onclick="window.location.href = '<?php echo get_theme_mod('emp_head_link_button2') ?>';" class="btn p-2 container-fluid mw-600-px border-30px btn-outline-light">
                                      <?php echo get_theme_mod('emp_head_btn2'); ?>
                                  </button>
                              <?php } else if ($button_or_audio2 == 'audio'){?>
                                <br>
                              <audio id="stop-audio2" controls="" src="<?php echo get_theme_mod('emp_head_link_audio2') ?>" class="mw-600-px stop-audio" style="width:inherit;"></audio>
                            <?php } else {} ?>
                            </div>
                          <?php } ?>

                          <?php if($emp_show_3 == 'true'){ ?>
                            <div class="carousel-item empFadeIn mx-auto color-personalized mw-1200px">
                              <h2 class=" text-mobile text-shadow-6 empFadeIn"><?php echo get_theme_mod('emp_head_text3'); ?></h2>
                              <p class="mx-auto"><?php echo get_theme_mod('emp_head_textarea3'); ?></p>
                              <?php if($button_or_audio3 == 'button'){ ?>
                                  <br>
                                  <button onclick="window.location.href = '<?php echo get_theme_mod('emp_head_link_button3') ?>';" class="btn p-2 container-fluid mw-600-px border-30px btn-outline-light">
                                      <?php echo get_theme_mod('emp_head_button3'); ?>
                                  </button>
                              <?php } else if ($button_or_audio3 == 'audio'){?>
                                <br>
                              <audio id="stop-audio3" controls="" src="<?php echo get_theme_mod('emp_head_link_audio3') ?>" class="mw-600-px stop-audio" style="width:inherit;"></audio>
                            <?php } else {} ?>
                            </div>
                          <?php } ?>

                        </div>
                      </div>
                    </div>

                    <?php if($emp_show_2 == 'true' || $emp_show_3 == 'true'){ ?>

                      <a class="carousel-control-prev" href="#carouselFade" role="button" data-slide="prev">
                        <i class="fas fa-2x fa-caret-left color-personalized" aria-hidden="true"></i>
                        <span class="sr-only"></span>
                      </a>
                      <a class="carousel-control-next" href="#carouselFade" role="button" data-slide="next">
                        <i class="fas fa-2x fa-caret-right color-personalized" aria-hidden="true"></i>
                        <span class="sr-only"></span>
                      </a>

                    <?php } ?>

                </div>
            </header>
        <?php } else {?>
            <!-- Title no img -->
            <div class="container-fluid py-5 pt-105 pt-lg-90 text-center text-justify bg-personalized">
                <h1 class="color-personalized text-mobile"><?php echo get_theme_mod('emp_head_text_title'); ?></h1>
            </div>
        <?php } ?>
    <!-- end header-->
    <!-- Content -->
    <div id="first-content-home" class="<?php if( is_admin_bar_showing() ){ ?> admin-bar-show <?php } ?> bg-personalized"></div>
        <!-- Sidebar front page -->
            <?php if(is_active_sidebar( 'homepage' )){
                get_sidebar( 'homepage' );
            } ?>
        <!-- page or posts -->
            <div class="row mw-100 mx-auto">
                <?php $emp_show1 = get_theme_mod('emp_homepage_show1'); ?>
                <?php $emp_show2 = get_theme_mod('emp_homepage_show2'); ?>
                <?php $emp_show3 = get_theme_mod('emp_homepage_show3'); ?>
                <?php if($emp_show1 === 'true'||$emp_show2 === 'true'||$emp_show3 === 'true'){ ?>
                    <div class="col-12 mx-auto px-0 color-personalized shadow-grey-up-down-1 bg-personalized border-30px left-featured-text <?php if( is_admin_bar_showing() ){ ?> left-featured-text-admin <?php } ?>">
                        <div style="max-height: 95vh;" class="mw-1200px">
                            <!-- Text 1 -->
                                <?php $emp_homepage_show = get_theme_mod('emp_homepage_show1');
                                $logo = get_theme_mod('emp_head_logo');

                                if ($emp_homepage_show == 'true'){
                                    $img = get_theme_mod('emp_homepage_img1'); ?>
                                    <div class="py-3 mx-auto my-auto text-shadow-6" >
                                        <h2 class="text-center h1">
                                            <span class=""><?php echo get_theme_mod('emp_homepage_title1') ?></span>
                                        </h2>
                                        <div class="p-2 mw-100 overflow-auto support-woo-shortcode text-<?php echo get_theme_mod('emp_homepage_text_aling1'); ?> " >
                                            <?php if($img){ ?> <img src="<?php echo wp_get_attachment_url(get_theme_mod('emp_homepage_img1')); ?>" class="img-fluid no-shadow"> <?php } ?> <br>
                                            <?php echo do_shortcode(get_theme_mod('emp_homepage_text1')); ?>
                                        </div>

                                        <?php $header_btn = get_theme_mod('emp_homepage_btn1');

                                        if ($header_btn){ ?>
                                            <p class="text-center">
                                                <button onclick="window.location.href = '<?php echo get_theme_mod('emp_homepage_link_btn1') ?>';" class="container-fluid btn bg-light text-dark">
                                                    <?php echo get_theme_mod('emp_homepage_btn1') ?>
                                                </button>
                                            </p>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                            <!-- end text 1 (featured) -->
                            <!-- Text 2 -->
                            <?php $emp_homepage_show = get_theme_mod('emp_homepage_show2');

                            if ($emp_homepage_show == 'true'){
                                $img = get_theme_mod('emp_homepage_img2'); ?>
                                <div class="py-3  mx-auto my-auto text-shadow-6">
                                    <h2 class="text-center h1">
                                        <span class=""><?php echo get_theme_mod('emp_homepage_title2') ?></span>
                                    </h2>
                                    <div class="p-2 mw-100 overflow-auto support-woo-shortcode text-<?php echo get_theme_mod('emp_homepage_text_aling2'); ?> " >
                                        <?php if($img){ ?> <img src="<?php echo wp_get_attachment_url(get_theme_mod('emp_homepage_img2')); ?>" class="img-fluid no-shadow"> <?php } ?> <br>
                                        <?php echo do_shortcode(get_theme_mod('emp_homepage_text2')); ?>
                                    </div>
                                    <?php $header_btn = get_theme_mod('emp_homepage_btn2');

                                    if ($header_btn){
                                        ?>
                                        <p class="text-center">
                                            <button onclick="window.location.href = '<?php echo get_theme_mod('emp_homepage_link_btn2') ?>';" class="container-fluid btn bg-light text-dark">
                                                <?php echo get_theme_mod('emp_homepage_btn2') ?>
                                            </button>
                                        </p>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                            <!-- end text 2 -->
                            <!-- Text 3 -->
                                <?php $emp_homepage_show = get_theme_mod('emp_homepage_show3');

                                if ($emp_homepage_show == 'true'){
                                    $img = get_theme_mod('emp_homepage_img3'); ?>
                                    <div class="py-3 mx-auto my-auto text-shadow-6" >
                                        <h2 class="text-center h1" >
                                            <span class=""><?php echo get_theme_mod('emp_homepage_title3'); ?></span>
                                        </h2>
                                        <div class="p-2 mw-100 overflow-auto support-woo-shortcode text-<?php echo get_theme_mod('emp_homepage_text_aling3'); ?> " >
                                            <?php if($img){ ?> <img src="<?php echo wp_get_attachment_url(get_theme_mod('emp_homepage_img3')); ?>" class="img-fluid no-shadow"> <?php } ?> <br>
                                            <?php echo do_shortcode(get_theme_mod('emp_homepage_text3')); ?>
                                        </div>
                                        <?php
                                        $header_btn = get_theme_mod('emp_homepage_btn3');

                                        if ($header_btn){ ?>
                                            <p class="text-center">
                                                <button onclick="window.location.href = '<?php echo get_theme_mod('emp_homepage_link_btn3') ?>';" class="container-fluid btn bg-light text-dark">
                                                    <?php echo get_theme_mod('emp_homepage_btn3') ?>
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
                    <section class="px-0 border-30px col-12 content-background pb-5">
                      <div class="mw-1200px mx-auto">
                        <?php get_template_part('includes/wc-featured-products') ?>
                        <?php get_template_part('content-home') ?>
                      </div>
                    </section>
                <?php } else { ?>
                    <section class="border-30px col-12  content-background">
                      <div class="mx-auto mw-1200px">
                      <?php get_template_part('includes/wc-featured-products') ?>
                          <br>
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
                        <!-- Sidebar front page -->
                            <?php if(is_active_sidebar( 'homepage1' )){
                                get_sidebar( 'homepage1' );
                            } ?>
                        <!-- end sidebar front page -->
                      </div>
                    </section>
                <?php }?>

            </div>
        <!-- end page or posts -->
    <!-- end content -->
<?php get_footer(); ?>
