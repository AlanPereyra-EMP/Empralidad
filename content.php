<div class="card p-0">
    <div class="card-header"> <?php the_category(', '); ?> </div>
    <!-- body -->
        <div class="card-block">
    <!-- Img -->
        <?php if ( has_post_thumbnail() ) { ?>
                <div class="position-relative nopadding">
                    <?php the_post_thumbnail( 'full', array( 'class' => 'col-12 mx-auto h-auto brightness-04') );?>
                    <div class="carousel-caption d-flex header-text1">
                        <h2 class="container-fluid my-auto d-block text-white text-mobile">
                            <?php the_title(); ?>  
                        </h2>
                    </div>
                </div>
        <?php } else { ?>
                <div class=" py-5 text-center text-justify text-white bg-personalized">
                    <a href="<?php the_permalink(); ?>"><h2 class="text-white"><?php the_title(); ?></h2></a>
                </div>
        <?php } ?>
    <!-- end img -->
            <br>
            <div class="card-text p-3">
                <?php the_excerpt(); ?>
            </div>
            <a href="<?php the_permalink(); ?>">
                <button class="btn bg-personalized text-white container-fluid alingcenter mt-auto">
                    Leer más
                </button>
            </a>
        </div>
        <div class="card-footer text-muted">
            <small><?php the_date(); ?> / Autor: <?php the_author(); ?> / <?php the_tags(); ?> </small> 
        </div>
    <!-- end body -->
</div>