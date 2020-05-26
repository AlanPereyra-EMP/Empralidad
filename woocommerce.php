<?php get_header(); ?>
    <style media="screen">
      @media (max-width:768px){
        .margin-top-mobile{
          margin-top: 200px!important;
        }
        .woocommerce div.product{
          margin-top: -150px;
        }
        .woocommerce-error, .woocommerce-info, .woocommerce-message {
            margin-bottom: 180px;
            margin-top: -80px;
        }
      }
    </style>
    <!-- Title -->
        <div class="container-fluid pt-5 pb-3 text-center text-justify">
        </div>
        <h1 class="color-personalized text-center py-5 px-2 px-md-5 text-mobile">Tienda</h1>
    <!-- end title -->
    <!-- Page content -->
        <article class="container my-5 margin-top-mobile p-2 p-md-4 bg-personalized-secondary">
                <?php woocommerce_content();?>
        </article>
    <!-- end page content -->
<?php get_footer(); ?>
