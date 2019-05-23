<?php get_header(); ?>
    <!-- Title -->
        <div class="container-fluid py-5 pt-105 pt-lg-90 text-center text-justify bg-personalized">
            <h2 class="text-mobile text-white"><?php bloginfo(); ?></h2>
        </div>
    <!-- end title -->
    <!-- Page content -->
        <article class="container my-5">
                <?php woocommerce_content();?>
        </article>
    <!-- end page content -->
<?php get_footer(); ?>