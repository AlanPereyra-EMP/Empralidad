<?php get_header();
$filter_slide1 = get_theme_mod('emp_img_filter1');
if ( has_post_thumbnail() ) { ?>
  <div id="main-head" class="carousel-item nopadding active">
    <div class="the_post_thumbnail FullScreenLanding">
    </div>
    <div class="py-5 pt-105 pt-lg-90 text-center text-justify color-personalized">
      <h1 class="text-mobile"><?php the_title(); ?></h1>
      <p>
        <?php the_author(); ?> / <?php  the_date(); ?>
        <div class="d-block">
          Categoría: <?php the_category('color-personalized'); ?>
        </div>
      </p>
    </div>
    <div class="d-flex text-img-home"></div>
  </div>
<?php } else { ?>
	<div class=" py-5 pt-105 pt-lg-90 text-center text-justify color-personalized">
    <h1 class="text-mobile"><?php the_title(); ?></h1>
    <p>
      <?php the_author(); ?> / <?php  the_date(); ?>
      <div class="d-block">
        Categoría: <?php the_category('color-personalized'); ?>
      </div>
    </p>
  </div>
<?php } ?>
<div id="first-content-single" class="<?php if( is_admin_bar_showing() ){ ?> admin-bar-show <?php } ?> bg-personalized"></div>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
  <div class="content-background content-color border-30px mx-md-auto to-fade to-fadein-animation container-fluid p-0 py-3 py-md-5">
    <!-- Content -->
    <?php if ( have_posts() ) {
      while ( have_posts() ) { the_post(); ?>
        <span class="btn container-fluid invisible"></span>
        <?php the_content();?>
      <?php }
    } ?>
    <!-- Tags -->
    <div class="container-fluid text-center py-3">
     <?php the_tags( 'Relacionados: ', ' / ', ' ' ); ?>
    </div>
    <h2 class="">Comentarios:</h2>
    <!-- Comments -->
    <?php if ( comments_open() || get_comments_number() ) {
      comments_template(); the_comments_pagination();
    } ?>
  </div>
</article>
<?php get_footer(); ?>
