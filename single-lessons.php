<?php get_header();

$id = get_the_ID();
$video_id = get_post_meta($id, 'lessons_video', true);
$video = get_post($video_id);
$course_id = get_post_meta($id, '_lesson_course', true);
$topics = get_post_meta($course_id, '_lessons_position', true);
$topics = explode(',', $topics);
?>
<section class="m-auto color-personalized">
  <div id="container-video" class="mb-5 row">
    <div class="col-12 col-md-9 mt-5 p-0">
      <div id="lesson-video" class="m-auto">
        <iframe id="courses-emp-lesson-video" class="video-16-9" src="<?php echo $video->_lesson_video; ?>"></iframe>
      </div>
    </div>
    <div id="course-topics" class="border-30px col-12 col-md-3">
      <div id="topic-height">
        <div class="module border-30px">
          <div class="title">
            <h3>Temario</h3>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="content show">
            <ul>
              <?php
              foreach ($topics as $topic) {
                $link = get_permalink($topic);
                $title = get_the_title($topic);
                ?>
                <a href="<?php echo $link ?>">
                  <li>
                    <?php echo $title ?>
                    <ul>0:00</ul>
                  </li>
                </a>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="lesson-content" class="d-block w-100 content-color content-background">
    <?php the_content();?>
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
