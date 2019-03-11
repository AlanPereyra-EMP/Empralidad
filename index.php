    <?php get_header(); ?>
    <!-- Title -->
        <div class="container-fluid py-5 text-center pt-lg-90 text-justify text-white bg-personalized">
            <h1 class="text-white"><?php wp_title(); ?></h1>
        </div>
    <!-- end title -->
    <!-- Content -->
    <div class="card-columns-2 p-2">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part('content', get_post_format()) ?> 
        <?php endwhile; endif; ?>
    </div>
    <!-- end content -->
<?php get_footer(); ?>