<article class="card p-0">
    <div class="card-header"> <?php the_category(', '); ?> </div>
    <div class="card-block">
        <br>
        <a href="<?php the_permalink(); ?>"><h4 class="card-title text-center text-mobile"><strong><?php the_title(); ?></strong></h4></a>
        <div class="card-text">
        	<?php the_content(); ?>
        </div>
    </div>
    <a href="<?php the_permalink(); ?>"><button class="btn bg-personalized text-white container-fluid alingcenter mt-auto">Comentarios</button></a>
    <div class="card-footer text-muted">
        <small><?php the_date(); ?> / Autor: <?php the_author(); ?> / <?php the_tags(); ?></small>
    </div>
</article>