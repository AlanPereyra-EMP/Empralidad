<?php get_header(); ?>
    <!-- Title -->
        <div class="container-fluid py-5 pt-105 pt-lg-90 text-center text-justify text-white bg-personalized">
            <h1 class="text-mobile"><?php the_title(); ?></h1>
        </div>
    <!-- end title -->
    <!-- Page content  -->
        <article class="col-md-10 col-lg-8 mx-md-auto">
            <div class="container-fluid px-0 py-3 p-md-5">
                <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'full', array( 'class' => 'aligncenter d-block img-fluid' ) );;
                } ?>
                
                <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();?><br>
                    <span class="btn container-fluid invisible"></span>
                <?php endwhile; endif; ?>
                <!-- Comments -->
                    <?php if ( comments_open() || get_comments_number() ) :
                        comments_template(); the_comments_pagination();
                    endif; ?>
                <!-- end comments -->
            </div>
        </article>
    <!-- end page content -->
<?php get_footer(); ?>