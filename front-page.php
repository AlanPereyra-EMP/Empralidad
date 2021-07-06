<?php get_header();

$emp_slider1 = get_theme_mod('emp_slider_image1');
$emp_slider2 = get_theme_mod('emp_slider_image2');
$emp_slider3 = get_theme_mod('emp_slider_image3');
$emp_sliders = 0;

if($emp_slider1){
  $emp_sliders++;
}
if($emp_slider2){
  $emp_sliders++;
}
if($emp_slider3){
  $emp_sliders++;
}

if($emp_slider1||$emp_slider2||$emp_slider3){ ?>
  <div id="emp-sliders" class="<?php if($emp_sliders == 1){?>mw-1200px<?php } ?>">
    <ul>
      <li> <img src="<?php echo wp_get_attachment_url(get_theme_mod('emp_slider_image1')); ?>" alt=""> </li>
      <li> <img src="<?php echo wp_get_attachment_url(get_theme_mod('emp_slider_image2')); ?>" alt=""> </li>
      <li> <img src="<?php echo wp_get_attachment_url(get_theme_mod('emp_slider_image3')); ?>" alt=""> </li>
    </ul>
  </div>
<?php }

$emp_carousel_slide1 = get_theme_mod('emp_head_slide1');
$emp_title_show = get_theme_mod('emp_front_title_show');
$emp_title_show_2 = get_theme_mod('emp_front_title_show2');
$emp_title_show_3 = get_theme_mod('emp_front_title_show3');
$emp_button_show1 = get_theme_mod('emp_front_button_show1');
$emp_button_secondary_show1 = get_theme_mod('emp_front_button_secondary_show1');
$emp_button_show2 = get_theme_mod('emp_front_button_show2');
$emp_button_secondary_show2 = get_theme_mod('emp_front_button_secondary_show2');
$emp_button_show3 = get_theme_mod('emp_front_button_show3');
$emp_button_secondary_show3 = get_theme_mod('emp_front_button_secondary_show3');

if($emp_title_show){ ?>
  <header id="main-head" <?php if(get_theme_mod('emp_components_head_title_categories_on')){ ?>class="categories-on"<?php } ?> >
    <div class="text-img-home container-fluid my-auto">
      <div id="carouselFade" class="carousel carousel-fade carousel-inner text-homepage-container" data-ride="carousel">
        <div id="carousel-item-1" class="carousel-item active empFadeIn mx-auto color-personalized mw-1200px">
          <h1 class="text-mobile color-personalized empFadeIn">
            <?php
            if(is_front_page() && !is_home()){
              the_title();
            }else{
              bloginfo('name');
            }
            ?>
          </h1>
          <?php
          $emp_title_hr_show = get_theme_mod('emp_front_title_hr_show');
          if($emp_title_hr_show){ ?> <hr> <?php } ?>
          <p class="mx-auto"><?php echo get_theme_mod('emp_front_textarea'); ?></p>
          <?php if($emp_button_show1){ ?>
            <button onclick="window.location.href = '<?php echo get_theme_mod('emp_front_link_btn1') ?>';" class="p-2 container-fluid <?php if($emp_button_secondary_show1){ ?> btn-secondary-actived <?php }else{ ?> mw-70 <?php } ?> border-30px btn-outline-light">
              <?php echo get_theme_mod('emp_front_btn1'); ?>
            </button>
          <?php } ?>
          <?php if($emp_button_secondary_show1){ ?>
            <button onclick="window.location.href = '<?php echo get_theme_mod('emp_front_link_btn_secondary1') ?>';" class="p-2 container-fluid btn-secondary-actived btn-emp border-30px">
              <?php echo get_theme_mod('emp_front_btn_secondary1'); ?>
            </button>
          <?php } ?>
        </div>

        <?php
        $emp_title_hr_show2 = get_theme_mod('emp_front_title_hr_show2');
        if($emp_title_show_2){ ?>
          <div id="carousel-item-2" class="carousel-item empFadeIn mx-auto color-personalized mw-1200px">
            <h2 class="text-mobile empFadeIn"><?php echo get_theme_mod('emp_front_text2'); ?></h2>
            <?php if($emp_title_hr_show2){ ?> <hr> <?php } ?>
            <p class="mx-auto"><?php echo get_theme_mod('emp_front_textarea2'); ?></p>
            <?php if($emp_button_show2){ ?>
              <button onclick="window.location.href = '<?php echo get_theme_mod('emp_front_link_btn2') ?>';" class="p-2 container-fluid <?php if($emp_button_secondary_show2){ ?> btn-secondary-actived <?php }else{ ?> mw-70 <?php } ?> border-30px btn-outline-light">
                <?php echo get_theme_mod('emp_front_btn2'); ?>
              </button>
            <?php } ?>
            <?php if($emp_button_secondary_show2){ ?>
              <button onclick="window.location.href = '<?php echo get_theme_mod('emp_front_link_btn_secondary2') ?>';" class="p-2 container-fluid btn-secondary-actived btn-emp border-30px">
                <?php echo get_theme_mod('emp_front_btn_secondary2'); ?>
              </button>
            <?php } ?>
          </div>
        <?php } ?>

        <?php
        $emp_title_hr_show3 = get_theme_mod('emp_front_title_hr_show3');
        if($emp_title_show_3){ ?>
          <div id="carousel-item-3" class="carousel-item empFadeIn mx-auto color-personalized mw-1200px">
            <h2 class=" text-mobile empFadeIn"><?php echo get_theme_mod('emp_front_text3'); ?></h2>
            <?php if($emp_title_hr_show3){ ?> <hr> <?php } ?>
            <p class="mx-auto"><?php echo get_theme_mod('emp_front_textarea3'); ?></p>
            <?php if($emp_button_show3){ ?>
              <button onclick="window.location.href = '<?php echo get_theme_mod('emp_front_link_btn3') ?>';" class="p-2 container-fluid <?php if($emp_button_secondary_show3){ ?> btn-secondary-actived <?php }else{ ?> mw-70 <?php } ?> border-30px btn-outline-light">
                <?php echo get_theme_mod('emp_front_button3'); ?>
              </button>
            <?php } ?>
            <?php if($emp_button_secondary_show3){ ?>
              <button onclick="window.location.href = '<?php echo get_theme_mod('emp_front_link_btn_secondary3') ?>';" class="p-2 container-fluid btn-secondary-actived btn-emp border-30px">
                <?php echo get_theme_mod('emp_front_btn_secondary3'); ?>
              </button>
            <?php } ?>
          </div>
        <?php } ?>
      </div>

    <?php if($emp_title_show_2 || $emp_title_show_3){ ?>

      <div class="carousel-control-prev" onclick="carouselItemPrev()">
        <i class="fas fa-2x fa-caret-left color-personalized" aria-hidden="true"></i>
        <span class="sr-only"></span>
      </div>
      <div class="carousel-control-next" onclick="carouselItemNext()">
        <i class="fas fa-2x fa-caret-right color-personalized" aria-hidden="true"></i>
        <span class="sr-only"></span>
      </div>

    <?php } ?>
    </div>
  </header>
<?php } ?>
<div id="first-content-home" class="<?php if( is_admin_bar_showing() ){ ?> admin-bar-show <?php } ?> bg-personalized"></div>
<div class="row mw-1300px mx-auto">
  <?php $emp_home_categories = get_theme_mod('emp_woocommerce_categories_show'); ?>
  <?php $emp_home_show_1 = get_theme_mod('emp_homepage_show_1'); ?>
  <?php $emp_home_show_2 = get_theme_mod('emp_homepage_show_2'); ?>
  <?php $emp_home_show_3 = get_theme_mod('emp_homepage_show_3'); ?>
  <?php if($emp_home_categories||$emp_home_show_1||$emp_home_show_2||$emp_home_show_3){ ?>
    <div class="col-12 mx-auto px-0 shadow-grey-up-down-1 content-color content-background border-30px home-featured-text <?php if ($emp_home_show_1||$emp_home_categories){?> mt-190-mobile <?php } ?>">
      <!-- Woocommerce categories -->
      <?php if ($emp_home_categories){?>
        <div class="py-3 mx-auto my-auto" >
          <div class="mw-100 support-woo-shortcode mw-1200px p-personalized-1 text-<?php echo get_theme_mod('emp_homepage_text_aling1'); ?> " style="padding:<?php echo get_theme_mod('emp_homepage_size1'); ?>%!important;"y>
            <?php echo do_shortcode('[product_categories number="0" parent="0"]'); ?>
          </div>
        </div>
      <?php } ?>
      <!-- Text 1 -->
      <?php if ($emp_home_show_1){?>
        <div class="py-3 mx-auto my-auto" >
          <div class="mw-100 support-woo-shortcode mw-1200px p-personalized-1 text-<?php echo get_theme_mod('emp_homepage_text_aling1'); ?> " style="padding:<?php echo get_theme_mod('emp_homepage_size1'); ?>%!important;">
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
      <?php if ($emp_home_show_2){?>
        <div class="py-3  mx-auto my-auto">
          <div class="p-2 mw-100 overflow-auto mw-1200px p-personalized-2 text-<?php echo get_theme_mod('emp_homepage_text_aling2'); ?> " >
            <h2 class="text-center h1">
              <span class=""><?php echo get_theme_mod('emp_homepage_title2') ?></span>
            </h2>
            <?php echo do_shortcode(get_theme_mod('emp_homepage_text2')); ?>
          </div>
          <?php $header_btn = get_theme_mod('emp_homepage_btn2');
          if ($header_btn){ ?>
            <p class="text-center">
              <button onclick="window.location.href = '<?php echo get_theme_mod('emp_homepage_link_btn2') ?>';" class="container-fluid btn bg-light text-dark">
                <?php echo get_theme_mod('emp_homepage_btn2') ?>
              </button>
            </p>
          <?php } ?>
        </div>
      <?php } ?>
      <!-- Text 3 -->
      <?php if ($emp_home_show_3){ ?>
        <div class="py-3 mx-auto my-auto" >
          <div class="p-2 mw-100 overflow-auto mw-1200px p-personalized-3 text-<?php echo get_theme_mod('emp_homepage_text_aling3'); ?> ">
            <h2 class="text-center h1" >
              <span class=""><?php echo get_theme_mod('emp_homepage_title3'); ?></span>
            </h2>
            <?php echo do_shortcode(get_theme_mod('emp_homepage_text3')); ?>
          </div>
          <?php $header_btn = get_theme_mod('emp_homepage_btn3');
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
  <?php } ?>

  <?php if ( is_front_page() && !is_home() ) {?>
    <section class="px-0 border-30px col-12 content-background mb-200px">
      <div class="color-personalized bg-personalized">
        <?php get_template_part('includes/wc-featured-products') ?>
      </div>
      <div class="mw-1200px py-5 my-5">
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
