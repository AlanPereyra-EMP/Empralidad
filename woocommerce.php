<?php get_header(); ?>
    <!-- Title -->
        <div class="container-fluid pt-5 pb-3 text-center text-justify">
        </div>
        <h1 class="color-personalized text-center py-5 px-2 px-md-5 text-mobile">Tienda</h1>
    <!-- end title -->
    <!-- Page content -->
        <article class="container my-5 p-2 p-md-4 bg-personalized-secondary">
                <?php woocommerce_content();?>
        </article>
    <!-- end page content -->
<?php get_footer(); ?>
