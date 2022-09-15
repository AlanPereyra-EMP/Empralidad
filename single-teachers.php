<?php get_header(); ?>
<div class="pt-5 min-h-100 content-color content-bg">
  <div class="m-auto color-personalized">
    <div id="teacher-intro" class="mb-5">
      <div class="p-0 pt-md-5">
        <div class="m-auto">
          <img class="autor-img" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
        </div>
        <div class="p-3">
          <h2 class="text-center"><?php the_title(); ?></h2>
          <span class="text-center">
            <?php the_content(); ?>
          </span>
        </div>
      </div>
    </div>
    <section id="teacher-courses" class="d-block w-100 content-color content-background">
      <div class="mw-1200px p-3 p-md-5 py-5">
        <h2>Cursos en los que participa</h2>
        <?php echo do_shortcode('[emp_courses]') ?>
      </div>
    </section>
  </div>
</div>
<?php get_footer(); ?>
