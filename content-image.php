<section class="card p-0 to-fade to-fadein-animation border-30px">
    <div class="card-header"> <?php the_category(', '); ?> </div>
    <a href="<?php the_permalink(); ?>"><?php
        the_post_thumbnail( 'full', array( 'class' => 'aligncenter mt-0 d-block noppading img-fluid' ) );?>
    </a>
    <div class="card-block">
        <a href="<?php the_permalink(); ?>"><button class="card-button btn container-fluid alingcenter mt-auto">Comentarios</button></a>
    </div>
    <div class="card-footer">
        <small><?php the_date(); ?> / Autor: <?php the_author(); ?> / <?php the_tags(); ?></small>
    </div>
</section>
