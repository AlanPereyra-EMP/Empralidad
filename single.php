
<?php get_header(); ?>
    <style>
      .disable-scroll{
        height: 100%;
        overflow: hidden;
      }
    </style>
    <!-- Title -->
        <?php
        $filter_slide1 = get_theme_mod('ip_img_filter1');
        if ( has_post_thumbnail() ) { ?>
            <div class="carousel-item nopadding active">
                <div class="the_post_thumbnail FullScreenLanding"><div class="<?php if ($filter_slide1 === 'color') { ?> bg-title-color <?php }else{ ?> bg-title-dark <?php } ?>"></div></div>

                <div class="carousel-caption d-flex header-text">
                    <h1 class="container-fluid my-auto text-white text-mobile"><?php the_title(); ?></h1>
                </div>
                <div class="d-flex text-img-home"></div>
                <i class="fas fa-caret-down button-down-single"></i>
            </div>
        <?php } else { ?>
        	<div class=" py-5 pt-105 pt-lg-90 text-center text-justify text-white bg-personalized">
	            <h1 class="text-mobile"><?php the_title(); ?></h1>
	        </div>
        <?php } ?>
    <!-- end title -->
    <!-- Page content  -->
    <div id="first-content-single" class="<?php if( is_admin_bar_showing() ){ ?> admin-bar-show <?php } ?> bg-personalized"></div>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php $ip_show1 = get_theme_mod('ip_ads_show1'); ?>
            <?php $ip_show2 = get_theme_mod('ip_ads_show2'); ?>
            <?php if($ip_show1 === 'true'||$ip_show2 === 'true'){ ?>
                <div class="row mw-100 p-3 p-md-0 mx-auto">
                    <div class="col-md-3 min-h-100 text-white show-from-md left-featured-text shadow-gray-up-down <?php if( is_admin_bar_showing() ){ ?> left-featured-text-admin <?php } ?>" style="background: #eee;">
                        <div style="margin-top: 60vh;transform: translate(0,-50vh);max-height: 95vh;">
                            <!-- Ad 1 -->
                                <?php
                                $ip_homepage_show = get_theme_mod('ip_ads_show1');
                                if ($ip_homepage_show == 'true'){
                                    ?>
                                    <div class="container-fluid d-block col-12 my-3 my-md-5 my-lg-4 p-0">
                                    <h2 class="text-center">
                                        <strong><?php echo get_theme_mod('ip_ads_title1') ?></strong>
                                    </h2>
                                    <img class="aligncenter wp-image-10 <?php if(!$logo){ ?> no-shadow <?php } ?> " src="<?php echo wp_get_attachment_url(get_theme_mod('ip_img_logo')); ?>" alt="" width="20" height="20" /><br>
                                    <div class="mw-100"><p class="text-center"><img src="<?php echo wp_get_attachment_url(get_theme_mod('ip_ads_img1')); ?>" class="img-fluid aling-center"><br><?php echo get_theme_mod('ip_ads_text1') ?></p></div>
                                    <?php
                                    $header_btn = get_theme_mod('ip_ads_btn1');
                                    if ($header_btn){
                                        ?>
                                        <p class="text-center"><a href="<?php echo get_theme_mod('ip_ads_link_btn1') ?>"><button class="container-fluid btn bg-personalized text-white"><?php echo get_theme_mod('ip_ads_btn1') ?></button></a></p>
                                    <?php } ?>
                                    </div>
                                <?php } ?>
                            <!-- end ad 1 -->
                            <!-- Ad 2 -->
                                <?php
                                $ip_homepage_show = get_theme_mod('ip_ads_show2');

                                if ($ip_homepage_show == 'true'){
                                    ?>
                                    <div class="container-fluid d-block col-12 my-3 my-md-5 my-lg-4 p-0">
                                    <h2 style="text-align: center;">
                                        <strong><?php echo get_theme_mod('ip_ads_title2') ?></strong>
                                    </h2>
                                    <img class="aligncenter wp-image-10 <?php if(!$logo){ ?> no-shadow <?php } ?> " src="<?php echo wp_get_attachment_url(get_theme_mod('ip_img_logo')); ?>" alt="" width="20" height="20" /><br>
                                    <div style="max-width: 100%;">
                                        <p style="text-align: center;">
                                            <img src="<?php echo wp_get_attachment_url(get_theme_mod('ip_ads_img2')); ?>" class="img-fluid aling-center"><br><?php echo get_theme_mod('ip_ads_text2') ?>
                                        </p>
                                    </div>
                                    <?php
                                    $footer_btn = get_theme_mod('ip_ads_btn2');

                                    if ($footer_btn){
                                        ?>
                                        <p style="text-align: center;">
                                            <a href="<?php echo get_theme_mod('ip_ads_link_btn2') ?>">
                                                <button class="container-fluid btn bg-personalized text-white"><?php echo get_theme_mod('ip_ads_btn2') ?></button>
                                            </a>
                                        </p>
                                    <?php } ?>
                                    </div>
                                <?php } ?>
                            <!-- end ad 2 -->
                        </div>
                    </div>
                <?php } ?>
                <div class="col-md-8 mx-md-auto to-fade to-fadein-animation container-fluid p-3 p-md-5">
                        <!-- Ad 1 -->
                            <?php
                            $ip_homepage_show = get_theme_mod('ip_ads_show1');
                            if ($ip_homepage_show == 'true'){
                                ?>
                                <div class="container-fluid d-block col-12 my-3 my-md-5 my-lg-4 p-3 show-until-md" style="background-color: #eee;">
                                <h2 class="text-center">
                                    <strong><?php echo get_theme_mod('ip_ads_title1') ?></strong>
                                </h2>
                                <img class="aligncenter wp-image-10" src="<?php echo get_site_icon_url() ?>" alt="" width="20" height="20" /> <br>
                                <div class="mw-100"><p class="text-center"><img src="<?php echo wp_get_attachment_url(get_theme_mod('ip_ads_img1')); ?>" class="img-fluid aling-center"><br><?php echo get_theme_mod('ip_ads_text1') ?></p></div>
                                <?php
                                $header_btn = get_theme_mod('ip_ads_btn1');
                                if ($header_btn){
                                    ?>
                                    <p class="text-center"><a href="<?php echo get_theme_mod('ip_ads_link_btn1') ?>"><button class="container-fluid btn bg-personalized text-white"><?php echo get_theme_mod('ip_ads_btn1') ?></button></a></p>
                                <?php } ?>
                                </div>
                            <?php } ?>
                        <!-- end ad 1 -->

                        <?php
                        if ( have_posts() ) : while ( have_posts() ) : the_post();
                            ?>
                            <div class="py-5 p-2 text-center container-fliud" style=" text-transform: uppercase; display: inline-flex;"><?php the_category(); ?> / <?php  the_date(); ?></div>
                            <span class="btn container-fluid invisible"></span>
                            <?php
                            the_content();?>
                            <br>
        	                <!-- Botton share -->
        	                	<a href="http://facebook.com/sharer.php?u=<?php the_permalink() ?>"><button class="btn container-fluid p-3 text-center bg-personalized text-white">Compartir en Facebook</button></a>
        	                <!-- end botton share -->
                        <?php endwhile; endif; ?>
                        <!-- Tags -->
                            <div class="container-fluid text-center py-5">
                                <?php the_tags( 'Relacionados: ', ' / ', ' ' ); ?>
                            </div>
                        <!-- end tags -->
                        <!-- Ad 2 -->
                            <?php
                            $ip_homepage_show = get_theme_mod('ip_ads_show2');

                            if ($ip_homepage_show == 'true'){
                                ?>
                                <div class="container-fluid d-block col-12 my-3 my-md-5 my-lg-4 p-3 show-until-md" style="background-color: #eee;">
                                <h2 style="text-align: center;">
                                    <strong><?php echo get_theme_mod('ip_ads_title2') ?></strong>
                                </h2>
                                <img class="aligncenter wp-image-10" src="<?php echo get_site_icon_url() ?>" alt="" width="20" height="20" /> <br>
                                <div style="max-width: 100%;">
                                    <p style="text-align: center;">
                                        <img src="<?php echo wp_get_attachment_url(get_theme_mod('ip_ads_img2')); ?>" class="img-fluid aling-center"><br><?php echo get_theme_mod('ip_ads_text2') ?>
                                    </p>
                                </div>
                                <?php
                                $footer_btn = get_theme_mod('ip_ads_btn2');

                                if ($footer_btn){
                                    ?>
                                    <p style="text-align: center;">
                                        <a href="<?php echo get_theme_mod('ip_ads_link_btn2') ?>">
                                            <button class="container-fluid btn bg-personalized text-white"><?php echo get_theme_mod('ip_ads_btn2') ?></button>
                                        </a>
                                    </p>
                                <?php } ?>
                                </div>
                            <?php } ?>
                        <!-- end ad 2 -->
                        <p><hr></p>
                        <!-- Comments -->
        	                <?php if ( comments_open() || get_comments_number() ) :
        	                    comments_template(); the_comments_pagination();
        	                endif; ?>
                        <!-- end comments -->
                </div>
            </div>
        </article>
    <!-- end page content -->
<?php get_footer(); ?>
