<?php get_header(); ?>
    <!-- Title -->
        <div class="container-fluid py-5 pt-105 pt-lg-90 text-center text-justify text-white bg-personalized">
            <h1>Tienda</h1>
        </div>
    <!-- end title -->
    <!-- Page content -->
        <div class="container my-5">
                <?php woocommerce_content();?>
        </div>
    <!-- end page content -->
<?php get_footer(); ?>