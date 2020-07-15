<section class="card p-0 to-fade to-fadein-animation border-30px bg-personalized-secondary">
    <div class="card-header"> <?php the_category(', '); ?> </div>
    <div class="card-block">
        <div class="card-text">
        	<?php the_content(); ?>
        </div>
    </div>
    <a href="<?php the_permalink(); ?>"><button class="card-button btn container-fluid alingcenter mt-auto">Comentarios</button></a>
    <div class="card-footer">
        <small><?php the_date(); ?> / Autor: <?php the_author(); ?> / <?php the_tags(); ?></small>
    </div>
</section>
