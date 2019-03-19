<!doctype html>
<html <?php language_attributes(); ?>>
<html prefix="og: http://ogp.me/ns#">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" media="none" onload="if(media!='all')media='all'">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="none" onload="if(media!='all')media='all'">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/plugins/contact-form-7.css" media="none" onload="if(media!='all')media='all'">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/plugins/woocommerce.css" media="none" onload="if(media!='all')media='all'">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="none" onload="if(media!='all')media='all'">

    <?php echo get_theme_mod('ip_face_text'); ?>
  </head>
  <body <?php body_class() ?>>
    <!-- Preload -->
        <div id="charge">
            <div id="spinner-div">
                <div id="spinner" class="color-personalized"></div>
            </div>
        </div>
        <!-- Preoload css -->
        <style type="text/css">
            #spinner-div{height:100vh!important;z-index:1}
            #spinner{margin-top:-50px;margin-left:-51px;width:6.5em;height:6.5em;border:.25em solid currentColor;border-right-color:transparent;border-radius:50%;-webkit-animation:spinner-border .75s linear infinite;animation:spinner-border .75s linear infinite}
            #spinner,#spinner-img{position:fixed;top:50%;left:50%}
            @-webkit-keyframes spinner-border{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}
            @keyframes spinner-border{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}
            #spinner-img{height:60px;margin-top:-30px;margin-left:-30px}
            .d-none{display: none !important;}
        </style>
    <!-- end preload -->
    <!-- All content -->
    <div id="all_content" class="d-none">
    <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent-personalized fixed-top <?php if( is_admin_bar_showing() ){ ?> admin-fixed-top <?php } ?> py-0">
            <!-- if logo -->
	            <?php $img_navbar = get_theme_mod('ip_img_logo');
	            if ($img_navbar) { ?>
		            <a class="navbar-brand mx-auto" href="<?php echo home_url(); ?>">
		            	<img src="<?php echo wp_get_attachment_url(get_theme_mod('ip_img_logo')); ?>" class="navbar-img navbar-img-hover">
		            </a>
	            <?php } else { ?>
                    <a class=" mx-auto" href="<?php echo home_url(); ?>">
    	                <h4 class="p-3"><?php bloginfo(); ?></h4>
                    </a>                
	            <?php } ?>
	        <!-- end if logo -->
            <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php wp_nav_menu(array(
                'theme_location' => 'superior',
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'navbarSupportedContent',
                'items_wrap' => '<ul class="navbar-nav nav ml-auto text-center">%3$s</ul>',
                'menu_class' => 'nav-item',
                'walker' => new Walker_Nav_Primary()
            ) ); ?>
            <div class="m-auto collapse py-2 show-md" id="navbarSupportedContent">
                <span><?php get_search_form(); ?></span>
            </div>
        </nav>
	    <div class="navbar-altura show-mobile"></div>
    <!-- end navbar -->