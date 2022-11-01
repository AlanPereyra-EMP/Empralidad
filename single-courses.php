<?php get_header();
$id = get_the_ID();
$product_id = get_post_meta($id, 'product_courses', true);
$product = get_post($product_id);
$video_id = get_post_meta($id, 'courses_video', true);
$video = get_post($video_id);
$dificulty_id = get_post_meta($id, 'course_dificulty', true);
$dificulty = get_post($dificulty_id);
$teacher_id = get_post_meta($id, 'emp_course_teachers', true);
$teacher = get_post($teacher_id);
$topics = get_post_meta($id, '_lessons_position', true);
$topics = explode(',', $topics);
$teacher_permalink = get_permalink($teacher_id);

?>
<div class="pt-5 min-h-100 content-color content-bg">
  <div class="row m-auto color-personalized">
    <div id="course-intro" class="mw-1200px mb-md-5">
      <div class="col-12 col-md-6 p-0 pt-md-5">
        <div class="m-auto">
          <iframe width="420" height="315" src="<?php echo $video->_course_video ?>"></iframe>
        </div>
        <div class="mx-auto p-3">
          <h2><?php the_title(); ?></h2>
          <p class="invisible h-0">--------------------------------------------------------------------------------</p>
            <?php the_excerpt(); ?>
          <div id="course-icons" class="py-3">
            <!-- <div>
              <i class="fas fa-chart-line mx-2"></i><p>Finanzas</p>
            </div> -->
            <div>
              <i class="fas fa-book mx-2"></i><p><?php echo $dificulty->_course_dificulty ?></p>
            </div>
            <?php
            if ($product->emp_product_courses) { ?>
              <div>
                <i class="fas fa-star mx-2"></i><p>Premium</p>
              </div>
            <?php } else { ?>
              <div>
                <i class="fas fa-check mx-2"></i><p>Gratuito</p>
              </div>
            <?php } ?>
          </div>
          <?php
          if (!wc_customer_bought_product( '', get_current_user_id(), $product->emp_product_courses)){ ?>
            <?php echo do_shortcode( '[add_to_cart id=' . $product->emp_product_courses . ']' ) ?>
          <?php } ?>

          <a href="#" class="btn btn-course-outline-light text-center d-block small color-personalized">
            <i class="d-inline-flex fas fa-share mx-2"></i>
            <p class="d-inline-flex m-0">Compartir</p>
          </a>
        </div>
      </div>
      <div id="course-topics" class="border-30px col-12 col-md-5">
        <div class="module border-30px">
          <div class="title">
            <h3>Temario</h3>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="content show">
            <ul>
              <?php
              foreach ($topics as $topic) {
                if (wc_customer_bought_product( '', get_current_user_id(), $product->emp_product_courses)) {
                  $link = get_permalink($topic);
                }else{
                  $link = '#course-icons';
                }

                $title = get_the_title($topic);
                ?>
                <a href="<?php echo $link ?>">
                  <li>
                    <?php echo $title ?>
                    <!-- <ul>0:00</ul> -->
                  </li>
                </a>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <section id="course-content" class="d-block w-100 content-color content-background">
      <?php the_content();?>
      <?php if ($teacher_id){ ?>
        <div class="autor">
          <h2 class="featured-title">¿Quién presenta el curso?</h2>
          <div class="content-template">
            <div class="w-25 m-auto">
              <img class="autor-img" src="<?php echo get_the_post_thumbnail_url($teacher_id) ?>" alt="">
              <h3 class="text-center d-block py-3"><?php echo $teacher->post_title ?></h3>
              <a href="<?php echo $teacher_permalink ?>">
                <button class="btn container-fluid">Ver sus cursos</button>
              </a>
            </div>
            <?php if ($teacher->post_content): ?>
              <div class="align-text p-3 p-md-0 w-75 m-auto">
                  <?php echo $teacher->post_content ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <?php } ?>
      <h2 class="featured-title">Cursos relacionados</h2>
      <div class="py-5">
        <?php echo do_shortcode('[emp_courses]') ?>
      </div>
      <?php if (have_comments()): ?>
        <div class="new-section">
          <h2>Comentarios</h2>
        </div>
        <!-- Comments -->
        <div class="mw-1200px py-5 px-3">
          <?php if ( comments_open() || get_comments_number() ) {
            comments_template();
          } ?>
        </div>
      <?php endif; ?>
    </section>
  </div>
</div>
<?php get_footer(); ?>
