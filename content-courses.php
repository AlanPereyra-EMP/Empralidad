<?php $args = array(
  'post_type' => 'emp_courses',
  'post_status' => 'publish',
  'posts_per_page' => 8,
  'orderby' => 'title',
  'order' => 'ASC',
);

$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post(); ?>
  <section class="card p-0 border-30px content-background content-color">
    <div class="card-header"> <?php the_category(', '); ?> </div>
    <div class="card-block">
      <?php
      if ( has_post_thumbnail() ) { ?>
        <a href="<?php the_permalink(); ?>">
          <div class="position-relative nopadding">
            <?php the_post_thumbnail( 'full', array( 'class' => 'col-12 mx-auto h-auto no-border-radius') );?>
          </div>
        </a>
      <?php } ?>
      <br>
      <h2 class="content-color"><?php the_title(); ?></h2>
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
<?php endwhile; ?>

<?php wp_reset_postdata();  ?>
