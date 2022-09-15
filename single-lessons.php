<?php get_header();

$id = get_the_ID();
$video_id = get_post_meta($id, 'emp_lessons_video', true);
$video = get_post($video_id);
?>
<section class="m-auto color-personalized">
  <div id="container-video" class="mb-5 row">
    <div class="col-12 col-md-9 mt-5 p-0">
      <div id="lesson-video" class="m-auto">
        <iframe id="courses-emp-lesson-video" class="video-16-9" src="<?php echo $video->_lesson_video; ?>"></iframe>
      </div>
    </div>
    <div id="course-topics" class="border-30px col-12 col-md-3">
      <h2>Temario:</h2>
      <div id="topic-height">
        <div class="module border-30px">
          <div class="title">
            <h3>1) Titulo ejemplo</h3>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="content show">
            <ul>
              <a href="https://empralidad.com.ar/demo-1/lessons/introduccion-a-los-mercados-financieros/">
                <li>
                  Tema de ejemplo
                  <ul>0:00</ul>
                </li>
              </a>
              <a href="https://empralidad.com.ar/demo-1/lessons/introduccion-a-los-mercados-financieros/">
                <li>
                  Tema de ejemplo
                  <ul>0:00</ul>
                </li>
              </a>
              <a href="https://empralidad.com.ar/demo-1/lessons/introduccion-a-los-mercados-financieros/">
                <li>
                  Tema de ejemplo
                  <ul>0:00</ul>
                </li>
              </a>
            </ul>
          </div>
        </div>
        <div class="module border-30px">
          <div class="title">
            <h3>2) Titulo ejemplo</h3>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="content">
            <ul>
              <a href="https://empralidad.com.ar/demo-1/lessons/introduccion-a-los-mercados-financieros/">
                <li>
                  Tema de ejemplo
                  <ul>0:00</ul>
                </li>
              </a>
              <a href="https://empralidad.com.ar/demo-1/lessons/introduccion-a-los-mercados-financieros/">
                <li>
                  Tema de ejemplo
                  <ul>0:00</ul>
                </li>
              </a>
              <a href="https://empralidad.com.ar/demo-1/lessons/introduccion-a-los-mercados-financieros/">
                <li>
                  Tema de ejemplo
                  <ul>0:00</ul>
                </li>
              </a><a href="https://empralidad.com.ar/demo-1/lessons/introduccion-a-los-mercados-financieros/">
                <li>
                  Tema de ejemplo
                  <ul>0:00</ul>
                </li>
              </a>
              <a href="https://empralidad.com.ar/demo-1/lessons/introduccion-a-los-mercados-financieros/">
                <li>
                  Tema de ejemplo
                  <ul>0:00</ul>
                </li>
              </a>
              <a href="https://empralidad.com.ar/demo-1/lessons/introduccion-a-los-mercados-financieros/">
                <li>
                  Tema de ejemplo
                  <ul>0:00</ul>
                </li>
              </a>
              <a href="https://empralidad.com.ar/demo-1/lessons/introduccion-a-los-mercados-financieros/">
                <li>
                  Tema de ejemplo
                  <ul>0:00</ul>
                </li>
              </a>
            </ul>
          </div>
        </div>
        <div class="module border-30px">
          <div class="title">
            <h3>3) Titulo ejemplo</h3>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="content">
            <ul>
              <a href="https://empralidad.com.ar/demo-1/lessons/introduccion-a-los-mercados-financieros/">
                <li>
                  Tema de ejemplo
                  <ul>0:00</ul>
                </li>
              </a>
              <a href="https://empralidad.com.ar/demo-1/lessons/introduccion-a-los-mercados-financieros/">
                <li>
                  Tema de ejemplo
                  <ul>0:00</ul>
                </li>
              </a>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="lesson-content" class="d-block w-100 content-color content-background">
    <?php the_content();?>
    <div class="new-section">
      <h2>¿Quién presenta esta lección?</h2>
    </div>
    <div id="teacher-intro" class="p-3 my-5">
      <?php
      $teacher_id = get_post_meta($id, 'emp_lessons_teachers', true);
      $teacher = get_post($teacher_id);
      $permalink = get_permalink($teacher_id);

      echo "<img class='autor-img' src='".get_the_post_thumbnail_url($teacher->ID)."'>";
      echo "<h2 class='text-center'>" . $teacher->post_title . "</h2>";
      echo "<span class='text-center'>".$teacher->post_content."</span>";
      echo "<a class='mx-auto' href='" . $permalink . "'><button class='btn container-fluid d-block'>Ver su perfil</button></a>";
      ?>
    </div>
      <div class="new-section">
        <h2>Comentarios</h2>
      </div>
      <!-- Comments -->
      <div class="mw-1200px py-5 px-3">
        <?php if ( comments_open() || get_comments_number() ) {
          comments_template();
        } ?>
      </div>
  </div>
</div>
<?php get_footer(); ?>
