    <?php get_header(); ?>
    <!-- Title -->
        <div class="container-fluid py-5 text-center pt-105 pt-lg-90 text-justify text-white bg-personalized">
            <h1 class="text-white text-mobile"><?php single_tag_title(); ?></h1>
        </div>
    <!-- end title -->
    <!-- Content -->
        <div class="col-md-10 col-lg-12 p-0 mx-auto">
            <div class="container-fluid p-md-5">
                <?php if ( have_posts() ) { ?>
                    <div class="card-columns-2 p-2">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part('content', get_post_format()) ?> 
                <?php endwhile; endif; ?>
                    </div>
                <?php } else { ?>
                    <div class="p-5 mx-auto">
                        <h2><strong>No se encontraron articulos</strong></h2>
                    <p>Intentá buscando el contenido que querés ver</p>
                    <?php get_search_form(); ?>
                    </div>
                <?php } ?>
            </div>
        </div>          
    <!-- end content -->
<?php get_footer(); ?>