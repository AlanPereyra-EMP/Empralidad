<?php get_header(); ?>
<?php
$emp_carousel_slide1 = get_theme_mod('emp_head_slide1');
$emp_title_show_2 = get_theme_mod('emp_head_show2');
$emp_title_show_3 = get_theme_mod('emp_head_show3');
$emp_button_show1 = get_theme_mod('emp_head_button_show1');
$emp_button_show2 = get_theme_mod('emp_head_button_show2');
$emp_button_show3 = get_theme_mod('emp_head_button_show3');
?>
<header id="main-head">
  <div class="text-img-home container-fluid my-auto">
    <div id="carouselFade" class="carousel carousel-fade carousel-inner text-homepage-container" data-ride="carousel">
      <div class="carousel-item active empFadeIn mx-auto color-personalized mw-1200px">
        <h1 class="text-mobile color-personalized empFadeIn"><?php echo get_theme_mod('emp_head_text_title'); ?></h1>
        <p class="mx-auto"><?php echo get_theme_mod('emp_head_textarea'); ?></p>
        <?php if($emp_button_show1){ ?>
          <button onclick="window.location.href = '<?php echo get_theme_mod('emp_head_link_btn1') ?>';" class="p-2 container-fluid mw-600-px border-30px btn-outline-light">
            <?php echo get_theme_mod('emp_head_btn1'); ?>
          </button>
        <?php } ?>
      </div>

      <?php if($emp_title_show_2){ ?>
        <div class="carousel-item empFadeIn mx-auto color-personalized mw-1200px">
          <h2 class="text-mobile empFadeIn"><?php echo get_theme_mod('emp_head_text2'); ?></h2>
          <p class="mx-auto"><?php echo get_theme_mod('emp_head_textarea2'); ?></p>
          <?php if($emp_button_show2){ ?>
            <button onclick="window.location.href = '<?php echo get_theme_mod('emp_head_link_button2') ?>';" class="p-2 container-fluid mw-600-px border-30px btn-outline-light">
              <?php echo get_theme_mod('emp_head_btn2'); ?>
            </button>
          <?php } ?>
        </div>
      <?php } ?>

      <?php if($emp_title_show_3){ ?>
        <div class="carousel-item empFadeIn mx-auto color-personalized mw-1200px">
          <h2 class=" text-mobile empFadeIn"><?php echo get_theme_mod('emp_head_text3'); ?></h2>
          <p class="mx-auto"><?php echo get_theme_mod('emp_head_textarea3'); ?></p>
          <?php if($emp_button_show1){ ?>
            <button onclick="window.location.href = '<?php echo get_theme_mod('emp_head_link_button3') ?>';" class="p-2 container-fluid mw-600-px border-30px btn-outline-light">
              <?php echo get_theme_mod('emp_head_button3'); ?>
            </button>
          <?php } ?>
        </div>
      <?php } ?>
    </div>

  <?php if($emp_title_show_2 || $emp_title_show_3){ ?>

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
<div id="first-content-home" class="<?php if( is_admin_bar_showing() ){ ?> admin-bar-show <?php } ?> bg-personalized"></div>
<?php if(is_active_sidebar( 'homepage' )){
    get_sidebar( 'homepage' );
} ?>
<div class="row mw-100 mx-auto">
    <?php $emp_home_show_1 = get_theme_mod('emp_homepage_show_1'); ?>
    <?php $emp_home_show_2 = get_theme_mod('emp_homepage_show_2'); ?>
    <?php $emp_home_show_3 = get_theme_mod('emp_homepage_show_3'); ?>
    <?php if($emp_home_show_1||$emp_home_show_2||$emp_home_show_3){ ?>
      <div class="col-12 mx-auto px-0 shadow-grey-up-down-1 content-color content-background border-30px home-featured-text <?php if( is_admin_bar_showing() ){ ?> home-featured-text-admin <?php } ?>">
        <div class="mw-1200px">
          <!-- Text 1 -->
          <?php $logo = get_theme_mod('emp_head_logo');

          if ($emp_home_show_1){
            $img = get_theme_mod('emp_homepage_img1'); ?>
            <div class="py-3 mx-auto my-auto" >
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
          <!-- Text 2 -->
          <?php
          if ($emp_home_show_2){
            $img = get_theme_mod('emp_homepage_img2'); ?>
            <div class="py-3  mx-auto my-auto">
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
          <!-- Text 3 -->
          <?php
          if ($emp_home_show_3){
            $img = get_theme_mod('emp_homepage_img3'); ?>
            <div class="py-3 mx-auto my-auto" >
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
    <?php } else { ?>
      <section class="border-30px col-12 content-background">
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
          <?php if(is_active_sidebar( 'homepage1' )){
              get_sidebar( 'homepage1' );
          } ?>
        </div>
    <?php }?>
    </section>
</div>
<?php get_footer(); ?>
