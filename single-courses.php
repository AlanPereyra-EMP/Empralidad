<?php get_header(); ?>
<div class="pt-5 min-h-100 content-color content-bg">
  <div class="row m-auto color-personalized">
    <div id="course-intro" class="mw-1200px mb-md-5">
      <div class="col-12 col-md-6 p-0 pt-md-5">
        <div class="m-auto">
          <iframe width="420" height="315" src="https://www.youtube.com/embed/HJXXh4i3bKY"></iframe>
        </div>
        <div class="mx-auto p-3">
          <h2><?php the_title(); ?></h2>
          <p>
            <?php the_excerpt(); ?>
          </p>
          <div id="course-icons" class="py-3">
            <div>
              <i class="fas fa-chart-line mx-2"></i><p>Finanzas</p>
            </div>
            <div>
              <i class="fas fa-book mx-2"></i><p>Avanzado</p>
            </div>
            <div>
              <i class="fas fa-star mx-2"></i><p>Premium</p>
            </div>
          </div>
          <a href="https://empralidad.com.ar/demo-1/lessons/introduccion-a-los-mercados-financieros/">
            <button class="btn container-fluid mb-3 mt-5">Comprar ahora</button>
          </a>
          <a href="#" class="text-center d-block small color-personalized">
            <i class="d-inline-flex fas fa-share mx-2"></i>
            <p class="d-inline-flex">Compartir</p>
          </a>
        </div>
      </div>
      <div id="course-topics" class="border-30px col-12 col-md-5">
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
    <div id="course-content" class="d-block w-100 content-color content-background">
      <?php the_content();?>
      <div class="autor">
        <div class="content-template">
          <div class="">
            <img class="autor-img" src="https://cdn.pixabay.com/photo/2016/11/18/19/07/happy-1836445_960_720.jpg" alt="">
            <h2 class="text-center d-block py-3">Nombre de ejemplo</h2>
          </div>
          <div class="align-text p-3 p-md-0">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
      <div class="mw-1200px p-3 p-md-5 py-5">
        <h2 class="mt-5">Cursos relacionados</h2>
        <?php echo do_shortcode('[emp_courses]') ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
