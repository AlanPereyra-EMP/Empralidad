
<?php get_header(); ?>
    <!-- Title -->
        <?php if ( has_post_thumbnail() ) { ?>
            <div class="carousel-item nopadding active">
                <?php the_post_thumbnail( 'full', array( 'class' => 'col-12 mx-auto h-auto ', 'style' => 'filter: brightness(0.3);') );?>
                <div class="carousel-caption d-flex header-text">
                    <h1 class="container-fluid my-auto text-white text-mobile"><?php the_title(); ?></h1>
                </div>
            </div>
        <?php } else { ?>
        	<div class=" py-5 pt-lg-90 text-center text-justify text-white bg-personalized">
	            <h1 class="text-mobile"><?php the_title(); ?></h1>
	        </div>
        <?php } ?>
    <!-- end title -->
    <!-- Page content  -->
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="col-md-10 col-lg-8 mx-md-auto">
                <div class="container-fluid p-3 p-md-5">
                    <!-- Ad 1 -->
                        <?php 
                        $ip_homepage_show = get_theme_mod('ip_ads_show1');
                        if ($ip_homepage_show == 'true'){
                            ?>
                            <div class="container-fluid d-block col-12 my-3 my-md-5 my-lg-4 p-3" style="background-color: #eee;">
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
                            <div class="container-fluid d-block col-12 my-3 my-md-5 my-lg-4 p-3" style="background-color: #eee;">
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
        </div>
    <!-- end page content -->
<?php get_footer(); ?>