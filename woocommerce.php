<?php get_header(); ?>
  <style>
    .product_title {display: none;}
  </style>
    <!-- Title -->
        <div class="container-fluid pt-5 pb-3 text-center text-justify">
        </div>
        <h1 class="text-white text-center py-5 px-2 px-md-5 text-mobile"><?php the_title(); ?></h1>
    <!-- end title -->
    <!-- Page content -->
        <article class="container my-5 p-2 p-md-4">
                <?php woocommerce_content();?>
        </article>
    <!-- end page content -->
<?php get_footer(); ?>
