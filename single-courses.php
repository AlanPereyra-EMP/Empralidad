<?php get_header(); ?>
<div class="pt-5 p-md-3 min-h-100 content-color content-bg mw-1200px">
  <div class="row m-auto color-personalized">
    <div id="course-intro" class="col-12 col-md-6 p-0 pt-md-5">
      <div class="m-auto">
        <iframe width="420" height="315" src="https://www.youtube.com/embed/HJXXh4i3bKY"></iframe>
      </div>
      <div class="mx-auto p-3">
        <h2><?php the_title(); ?></h2>
        <p>
          Este curso es una demo y no representa la versión final,
          se muestra un diseño para entender mejor el funcionamiento del sitio web.
        </p>
        <div id="course-icons" class="py-3">
          <div>
            <i class="fas fa-chart-line mx-2"></i><p>Finanzas</p>
          </div>
          <div>
            <i class="fas fa-book mx-2"></i><p>Avanzado</p>
          </div>
          <div>
            <i class="fas fa-clock mx-2"></i><p>Poca duración</p>
          </div>
        </div>
        <button type="button" name="button" class="btn container-fluid mb-3">Comprar ahora</button>
      </div>
    </div>
    <div id="course-topics" class="border-30px col-12 col-md-5">
      <h2>Temario:</h2>
      <div class="module">
        1) Fundamentos
        <div class="">
          <ul>
            <li>
              Tema de ejemplo
              <ul>0:00</ul>
            </li>
            <li>
              Tema de ejemplo
              <ul>0:00</ul>
            </li><li>
              Tema de ejemplo
              <ul>0:00</ul>
            </li><li>
              Tema de ejemplo
              <ul>0:00</ul>
            </li><li>
              Tema de ejemplo
              <ul>0:00</ul>
            </li><li>
              Tema de ejemplo
              <ul>0:00</ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="module">
        2) Modulo 2
        <div class="">
          <ul>
            <li>
              Tema de ejemplo
              <ul>0:00</ul>
            </li><li>
              Tema de ejemplo
              <ul>0:00</ul>
            </li><li>
              Tema de ejemplo
              <ul>0:00</ul>
            </li><li>
              Tema de ejemplo
              <ul>0:00</ul>
            </li><li>
              Tema de ejemplo
              <ul>0:00</ul>
            </li><li>
              Tema de ejemplo
              <ul>0:00</ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="module">
        3) Final
        <div class="">
          <ul>
            <li>
              Tema de ejemplo
              <ul>0:00</ul>
            </li>
            <li>
              Tema de ejemplo
              <ul>0:00</ul>
            </li>
            <li>
              Tema de ejemplo
              <ul>0:00</ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div id="course-content" class="px-3 py-5 p-md-5 mb-200px d-block w-100 content-color content-background border-30px">
      <h2 class="text-featured">Acerca de este curso</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <br>
      <h2>Preguntas frecuentes:</h2>
      <br>
      <p><b>Para quién va dirigido el curso?</b></p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
         Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <h2 class="mt-5">Cursos relacionados</h2>
      <?php echo do_shortcode('[emp_courses]') ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
