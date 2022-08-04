<?php get_header(); ?>
<div class="pt-5 min-h-100 content-color content-bg">
  <div class="m-auto color-personalized">
    <div id="teacher-intro" class="mb-5">
      <div class="p-0 pt-md-5">
        <div class="m-auto">
          <img class="autor-img" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
        </div>
        <div class="mx-auto p-3">
          <h2 class="text-center"><?php the_title(); ?></h2>
          <span class="text-center">
            <?php the_content(); ?>
          </span>
          <a href="#teacher-courses" class="text-center d-block small color-personalized">
            <button class="btn container-fluid mb-3 mt-5">Ver sus cursos</button>
          </a>
        </div>
      </div>
    </div>
    <div id="teacher-courses" class="d-block w-100 content-color content-background">
      <div class="mw-1200px p-3 p-md-5 py-5">
        <h2 class="mt-5">Cursos impartidos</h2>
        <?php echo do_shortcode('[emp_courses]') ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
