<?php get_header(); ?>
<div class="content-color content-bg">
  <div class="m-auto color-personalized">
    <div id="container-video" class="mb-5 row">
      <div class="col-12 col-md-9 mt-5 p-0">
        <div id="lesson-video" class="m-auto">
          <iframe class="video-16-9" src="https://www.youtube.com/embed/HJXXh4i3bKY"></iframe>
        </div>
      </div>
      <div id="course-topics" class="border-30px col-12 col-md-3">
        <h2>Temario:</h2>
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
    <div id="lesson-content" class="d-block w-100 content-color content-background">
      <?php the_content();?>
      <div class="comments">
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
</div>
<?php get_footer(); ?>
