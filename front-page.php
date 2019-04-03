<?php get_header(); ?>
    <!-- Homepage img -->
        <?php 
        $carousel_slide1 = get_theme_mod('ip_img_slide1');
        $text_slide1 = get_theme_mod('ip_slide1_text');
        $button_slide1 = get_theme_mod('ip_img_btn1');       
        if ($carousel_slide1) { 
        ?>
            <header id="carouselExampleFade" class="carousel slide carousel-fade">
                <div class="FullScreenLanding ip_img_slide1 col-12 mx-auto <?php if ($text_slide1) { ?> brightness-04 <?php } ?>"></div>
                <div class="carousel-caption d-flex text-img-home">
                    <h2 class="container-fluid my-auto text-white text-mobile text-shadow-6"><?php echo get_theme_mod('ip_slide1_text'); ?><br> <?php if($button_slide1){ ?>
                        <a href="<?php echo get_theme_mod('ip_img_link_btn1') ?>"><button class="btn bg-personalized text-white py-0"><?php echo get_theme_mod('ip_img_btn1'); ?></button></h2></a>
                    <?php } ?>
                </div>
                <div class="d-flex text-img-home">
                    <i class="fa fa-angle-double-down button-down-home"></i>
                </div>
            </header>
        <?php } else {?>
            <!-- Title no img -->
                <div class="container-fluid py-5 pt-105 pt-lg-90 text-center text-justify text-white bg-personalized">
                    <h1 class="text-white text-mobile"><?php wp_title();?></h1>
                </div> 
            <!-- end title no img -->
        <?php } ?>
    <!-- end homepage img -->
    <!-- Content -->
    <div id="first-content-home" class="<?php if( is_admin_bar_showing() ){ ?> admin-bar-show <?php } ?>" class="bg-personalized"></div>
    	<!-- If texts exists -->  
            <div class="row mx-auto bg-personalized shadow-grey-up-down text-shadow-6">            
                <!-- Text 1 (desktop) -->
                    <?php $ip_homepage_show = get_theme_mod('ip_homepage_show1');
                    $logo = get_theme_mod('ip_img_logo');

                    if ($ip_homepage_show == 'true'){ 
                        $img = get_theme_mod('ip_homepage_img1'); ?>
                        <div class="py-3 col-12 col-md-6 col-lg-4 mx-auto bg-personalized show-desktop" >
                            <h2 class="text-center">
                                <span class="text-white"><?php echo get_theme_mod('ip_homepage_title1') ?></span>
                            </h2>
                            <img class="aligncenter wp-image-10 <?php if(!$logo){ ?> no-shadow <?php } ?> " src="<?php echo wp_get_attachment_url(get_theme_mod('ip_img_logo')); ?>" alt="" width="20" height="20" />
                            <p class="p-2 mw-100 text-white text-<?php echo get_theme_mod('ip_homepage_text_aling1'); ?> " >
                                <?php if($img){ ?> <img src="<?php echo wp_get_attachment_url(get_theme_mod('ip_homepage_img1')); ?>" class="img-fluid"> <?php } ?> <br>
                                <?php echo get_theme_mod('ip_homepage_text1') ?>
                            </p>
                            
                            <?php $header_btn = get_theme_mod('ip_homepage_btn1');

                            if ($header_btn){
                                ?>
                                <p class="text-center">
                                    <a href="<?php echo get_theme_mod('ip_homepage_link_btn1') ?>">
                                        <button class="container-fluid btn bg-light">
                                            <?php echo get_theme_mod('ip_homepage_btn1') ?>
                                        </button>
                                    </a>
                                </p>
                            <?php } ?>
                        </div>
                    <?php } ?>
                <!-- end text 1 (desktop) -->
                <!-- Text 2 -->
                    <?php $ip_homepage_show = get_theme_mod('ip_homepage_show2');

                    if ($ip_homepage_show == 'true'){ 
                        $img = get_theme_mod('ip_homepage_img1'); ?>
                        <div class="py-3 col-12 col-md-6 col-lg-4 mx-auto bg-personalized text-shadow-6">
                            <h2 class="text-center">
                                <span class="text-white"><?php echo get_theme_mod('ip_homepage_title2') ?></span>
                            </h2>
                            <img class="aligncenter wp-image-10 <?php if(!$logo){ ?> no-shadow <?php } ?>" src="<?php echo wp_get_attachment_url(get_theme_mod('ip_img_logo')); ?>" alt="" width="20" height="20" />
                            <p class="p-2 mw-100 text-white text-<?php echo get_theme_mod('ip_homepage_text_aling2'); ?> " >
                                <?php if($img){ ?> <img src="<?php echo wp_get_attachment_url(get_theme_mod('ip_homepage_img2')); ?>" class="img-fluid"> <?php } ?> <br>
                                <?php echo get_theme_mod('ip_homepage_text2') ?>
                            </p>
                            <?php $header_btn = get_theme_mod('ip_homepage_btn2');

                            if ($header_btn){
                                ?>
                                <p class="text-center">
                                    <a href="<?php echo get_theme_mod('ip_homepage_link_btn2') ?>">
                                        <button class="container-fluid btn bg-light">
                                            <?php echo get_theme_mod('ip_homepage_btn2') ?>
                                        </button>
                                    </a>
                                </p>
                            <?php } ?>
                        </div>
                    <?php } ?>
                <!-- end text 2 -->
                <!-- Text 3 -->
                    <?php $ip_homepage_show = get_theme_mod('ip_homepage_show3');

                    if ($ip_homepage_show == 'true'){ 
                        $img = get_theme_mod('ip_homepage_img1'); ?>
                        <div class="py-3 bg-personalized text-white col-12 col-md-6 col-lg-4 mx-auto text-shadow-6" >
                            <h2 class="text-center" >
                                <span class="text-white"><?php echo get_theme_mod('ip_homepage_title3'); ?></span>
                            </h2>
                            <img class="aligncenter wp-image-10 <?php if(!$logo){ ?> no-shadow <?php } ?>" src="<?php echo wp_get_attachment_url(get_theme_mod('ip_img_logo')); ?>" alt="" width="20" height="20" />
                            <p class="p-2 mw-100 text-white text-<?php echo get_theme_mod('ip_homepage_text_aling3'); ?> " >
                                <?php if($img){ ?> <img src="<?php echo wp_get_attachment_url(get_theme_mod('ip_homepage_img3')); ?>" class="img-fluid"> <?php } ?> <br>
                                <?php echo get_theme_mod('ip_homepage_text3') ?>
                            </p>
                            <?php 
                            $header_btn = get_theme_mod('ip_homepage_btn3');

                            if ($header_btn){
                                ?>
                                <p class="text-center">
                                    <a href="<?php echo get_theme_mod('ip_homepage_link_btn3') ?>">
                                        <button class="container-fluid btn bg-light">
                                            <?php echo get_theme_mod('ip_homepage_btn3') ?>
                                        </button>
                                    </a>
                                </p>
                            <?php } ?>
                        </div>
                    <?php } ?>
                <!-- end text 3 -->
            </div>
            <br>
        <!-- end if texts exists --> 
        <!-- Sidebar front page -->
            <?php if(is_active_sidebar( 'homepage' )){
                get_sidebar( 'homepage' ); ?>
            <?php } ?>
        <!-- end sidebar front page -->
        <!-- The content -->
            <?php if ( is_front_page() && !is_home() ) {?>
                <?php get_template_part('content-home') ?>
            <?php } else { ?> 
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
            <?php }?>
        <!-- end the content -->
        <!-- Text 1 (mobile) -->
            <?php $ip_homepage_show = get_theme_mod('ip_homepage_show1');

            if ($ip_homepage_show == 'true'){ 
                $img = get_theme_mod('ip_homepage_img1'); ?>
                <div class="py-3 mx-auto bg-personalized show-mobile shadow-grey-up text-shadow-6" >
                    <h2 class="text-center">
                        <span class="text-white"><?php echo get_theme_mod('ip_homepage_title1') ?></span>
                    </h2>
                    <img class="aligncenter wp-image-10 <?php if(!$logo){ ?> no-shadow <?php } ?>" src="<?php echo wp_get_attachment_url(get_theme_mod('ip_img_logo')); ?>" alt="" width="20" height="20" />
                    <p class="p-2 mw-100 text-white text-<?php echo get_theme_mod('ip_homepage_text_aling1'); ?> " >
                        <?php if($img){ ?> <img src="<?php echo wp_get_attachment_url(get_theme_mod('ip_homepage_img1')); ?>" class="img-fluid"> <?php } ?> <br>
                        <?php echo get_theme_mod('ip_homepage_text1') ?>
                    </p>
                    
                    <?php $header_btn = get_theme_mod('ip_homepage_btn1');

                    if ($header_btn){
                        ?>
                        <p class="text-center">
                            <a href="<?php echo get_theme_mod('ip_homepage_link_btn1') ?>">
                                <button class="container-fluid col-10 btn bg-light">
                                    <?php echo get_theme_mod('ip_homepage_btn1') ?>
                                </button>
                            </a>
                        </p>
                    <?php } ?>
                </div>
            <?php } ?>
        <!-- end text 1 (mobile) -->
    <!-- end content -->
<?php get_footer(); ?>