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
            margin-bottom: 180px!important;
            margin-top: -80px!important;
        }
      }
      @media (max-width: 575px){
        .woocommerce span.onsale{
          top: -2px;
          right: -2px;
          left: auto;
          border-radius: 0 50%;
          margin: -.5em -.5em 0 0;
        }
      }
      @media(min-width: 769px){
        .woocomerce span .onsale{
          top:-.5em;
          left:-.5em;
          border-radius: 0!important;
        }
      }
    </style>
    <!-- Title -->
        <div class="container-fluid pt-5 pb-3 text-center text-justify">
        </div>
        <h1 class="color-personalized text-center py-5 px-2 px-md-5 text-mobile">Tienda</h1>
    <!-- end title -->
    <!-- Page content -->
        <article class="container my-5 margin-top-mobile p-2 p-md-4 content-background content-color" style="margin-bottom:200px!important;">
                <?php get_product_search_form(); ?>
                <?php woocommerce_content();?>

        </article>
    <!-- end page content -->
<?php get_footer(); ?>
