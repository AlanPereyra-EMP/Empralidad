<?php get_header();
$filter_slide1 = get_theme_mod('emp_img_filter1');
if ( has_post_thumbnail() ) { ?>
  <div id="main-head" class="carousel-item nopadding active">
    <div class="the_post_thumbnail FullScreenLanding">
      <div class="<?php if ($filter_slide1 === 'color') { ?> bg-title-color <?php }else{ ?> bg-title-dark <?php } ?>"></div>
    </div>
    <div class="carousel-caption d-flex header-text overflow-auto">
      <h1 class="container-fluid my-auto color-personalized text-mobile"><?php the_title(); ?></h1>
    </div>
    <div class="d-flex text-img-home"></div>
    <i class="fas fa-caret-down button-down-single"></i>
  </div>
<?php } else { ?>
	<div class=" py-5 pt-105 pt-lg-90 text-center text-justify color-personalized">
    <h1 class="text-mobile"><?php the_title(); ?></h1>
  </div>
<?php } ?>
<div id="first-content-single" class="<?php if( is_admin_bar_showing() ){ ?> admin-bar-show <?php } ?> bg-personalized"></div>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
  <div class="content-background content-color border-30px mw-1200px mx-md-auto to-fade to-fadein-animation container-fluid p-0 py-3 py-md-5" style="margin-bottom:200px!important;">
    <!-- Content -->
    <?php if ( have_posts() ) {
      while ( have_posts() ) { the_post(); ?>
        <div id="emp-single-info" style=" text-transform: uppercase;">
          <?php the_author(); ?> / <?php  the_date(); ?>
          <br>
          <br>
          <div class="d-inline">
            Categoría: <?php the_category('d-inline-block'); ?>
          </div>
        </div>
        <span class="btn container-fluid invisible"></span>
        <?php the_content();?>
      <?php }
    } ?>
    <!-- Tags -->
    <p class="pt-5"></p><hr>
    <div class="container-fluid text-center py-3">
     <?php the_tags( 'Relacionados: ', ' / ', ' ' ); ?>
    </div>
    <h2>Comentarios:</h2>
    <!-- Comments -->
    <?php if ( comments_open() || get_comments_number() ) {
      comments_template(); the_comments_pagination();
    } ?>
  </div>
</article>
<?php get_footer(); ?>
