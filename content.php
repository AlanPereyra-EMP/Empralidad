<section class="card p-0 to-fadein-animation border-30px content-background content-color">
  <div class="card-header"> <?php the_category(', '); ?> </div>
  <div class="card-block">
    <?php
    if ( has_post_thumbnail() ) { ?>
      <div class="position-relative nopadding">
        <?php the_post_thumbnail( 'full', array( 'class' => 'col-12 mx-auto h-auto') );?>
        <div class="carousel-caption d-flex header-text1 h-100 bg-title-content-dark"></div>
        <div class="carousel-caption d-flex header-text1">
          <div class="container-fluid my-auto d-block mh-100-auto">
            <a href="<?php the_permalink(); ?>"><h2 class="text-white"><?php the_title(); ?></h2></a>
          </div>
        </div>
      </div>
    <?php } else { ?>
      <div class=" py-5 text-center text-justify content-background">
        <a href="<?php the_permalink(); ?>"><h2 class="content-color"><?php the_title(); ?></h2></a>
      </div>
    <?php } ?>
    <br>
    <div class="card-text p-3">
      <?php the_excerpt(); ?>
    </div>
    <a href="<?php the_permalink(); ?>">
      <button class="card-button btn container-fluid alingcenter mt-auto my-5">
        Ver más
      </button>
    </a>
</div>
</section>
