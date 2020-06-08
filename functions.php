<?php
// 0) CSS and JS on footer
// 1) Main menu
// 2) Widgets
// 3) Includes
// 4) Css dinamicos
// 5) Content width
// 6) Add theme support
// 7) Coment reply
// 8) Walker class
// 9) Wp link pages
// 10) Custom post type
// 11) WooCommerce custom
// 12) GitHub updates
// 13) Fix admin bar on frontend


// 0) JS on footer
	function scripts_footer() {
	    remove_action('wp_head', 'wp_print_scripts');
	    remove_action('wp_head', 'wp_print_head_scripts', 9);
	    remove_action('wp_head', 'wp_enqueue_scripts', 1);

	    add_action('wp_footer', 'wp_print_scripts', 5);
	    add_action('wp_footer', 'wp_enqueue_scripts', 5);
	    add_action('wp_footer', 'wp_print_head_scripts', 5);
	}
	add_action( 'wp_enqueue_scripts', 'scripts_footer' );

	function my_deregister_styles() {
	  wp_deregister_style('wp-block-library');
	  wp_deregister_style('wc-block-style');
		wp_deregister_style('woocommerce');
		wp_deregister_style('woocommerce-smallcreen');
	  wp_deregister_style('contact-form-7');
		wp_deregister_style('bootstrap-personalized');
	  wp_deregister_style('dnd-upload-cf7');
	}

	add_action('wp_print_styles', 'my_deregister_styles', 100);

// 1) Main menu
	if (function_exists('register_nav_menus')) {
		register_nav_menus (array('superior' => 'Menu Principal'));
	}

	// Class <a> main menu
		add_filter('nav_menu_link_attributes','clase_menu', 10,3);
		function clase_menu ($atts, $item, $args){
			$class = 'nav-link font-weight-bold mx-2';
			$atts ['class'] = $class;
			return $atts;
		}

// 2) Widgets
	add_action( 'widgets_init', 'emp_sidebar' );
	function emp_sidebar() {
		register_sidebar(
	        array(
	            'id'            => 'homepage',
	            'name'          => __( 'Sidebar homepage (superior)', 'empralidad' ),
	            'description'   => __( 'Se ubica debajo de la imagen principal', 'empralidad' ),
	            'before_widget' => '<div id="%1$s" class="widget %2$s my-3">',
	            'after_widget'  => '</div>',
	            'before_title'  => '<h3 class="widget-title-dark">',
	            'after_title'   => '</h3>'
	        )
	    );
			register_sidebar(
		        array(
		            'id'            => 'homepage1',
		            'name'          => __( 'Sidebar homepage (inferior)', 'empralidad' ),
		            'description'   => __( 'Se ubica antes del footer', 'empralidad' ),
		            'before_widget' => '<div id="%1$s" class="widget %2$s my-3">',
		            'after_widget'  => '</div>',
		            'before_title'  => '<h3 class="widget-title-dark">',
		            'after_title'   => '</h3>'
		        )
		    );
	    register_sidebar(
	        array(
	            'id'            => 'footer',
	            'name'          => __( 'Sidebar del footer', 'empralidad' ),
	            'description'   => __( 'Se ubica debajo de las paginas y entradas.', 'empralidad' ),
	            'before_widget' => '<div id="%1$s" class="widget %2$s my-3">',
	            'after_widget'  => '</div>',
	            'before_title'  => '<h3 class="widget-title">',
	            'after_title'   => '</h3>'
	        )
	    );
	}

// 3) Includes
	get_template_part( 'Customizer/emp-customizer' );
	get_template_part( 'plugins/emp-shortcodes' );

// 4) Dinamics Css
	function emp_theme_customize_css(){

		$bg_perzonalized_secondary = get_theme_mod('emp_background_secondary') . get_theme_mod('emp_background_secondary_transparency');
		?>

	    <style type="text/css">
					/* backgrounds */
	        .bg-personalized, #bg-menu-mobile, .bg-title-color, .bg-title-content-color, body, ::-webkit-scrollbar-track, li.product.type-product, .woocommerce span.onsale{
	        	background-color: <?php echo get_theme_mod('emp_background_primary'); ?> !important;
	        }
					.bg-personalized-secondary, ::-webkit-scrollbar-thumb{
						background-color: <?php echo $bg_perzonalized_secondary ?>!important;
					}
					.tutor-single-lesson-wrap{
						border-top: 70px solid <?php echo get_theme_mod('emp_background_primary'); ?> !important;
					}
					.the_post_thumbnail{
	        	background: url(<?php echo get_the_post_thumbnail_url(); ?> ) repeat 50% 50%;
	        }
					.emp-background-image{
						background: url(<?php echo wp_get_attachment_url(get_theme_mod('emp_background_media_image')); ?>) center;
						height: 100vh
					}
					.emp-background-media-filter{
						opacity: <?php echo get_theme_mod('emp_background_media_filter'); ?>
					}

					/* Tipography */
					.color-personalized, h1.text-mobile,.color-personalized .fa , .color-personalized .fab, h2.woocommerce-loop-product__title, .woocommerce span.onsale{
	        	color: <?php echo get_theme_mod('emp_tipography_primarycolor'); ?> !important;
	        }
					.tutor-dashboard-header-ratings,.btn-outline-light, .menu-item a, a.fa.fa-shopping-cart.mr-4.fadein.show-desktop.text-white{
						color: <?php echo get_theme_mod('emp_tipography_primarycolor'); ?> !important;
					}
					section, article, .woocommerce-loop-product__title, .color-personalized-secondary, .card-header a, a.woocommerce-review-link, .woocommerce-MyAccount-content a,.woocommerce div.product p.price{
						color: <?php echo get_theme_mod('emp_tipography_color'); ?> !important;
					}
					body, .fa-text{
						font-family: '<?php echo get_theme_mod('emp_styles_tipography'); ?>';
					}
					body{
						font-size: <?php echo get_theme_mod('emp_styles_tipography_size'); ?>px;
					}
					@media (min-width: 577px) {
					  .text-mobile {
					    font-size: <?php echo (get_theme_mod('emp_head_text_title_size') - 80) ?>px!important;
					  }
					}
					@media (min-width: 992px) {
					  .text-mobile {
					    font-size: <?php echo get_theme_mod('emp_head_text_title_size'); ?>px!important;
					  }
					}
					.text-mobile {
					    font-size: <?php echo (get_theme_mod('emp_head_text_title_size') - 130) ?>px;
							word-wrap: break-word;
					}

					/* Special items */
					.dashboard-section-overview .copy-to-clipboard-trigger, .checkout-button, #place_order, th {
	            background-color: <?php echo get_theme_mod('emp_btn_bg'); ?>!important;
	            color: <?php echo get_theme_mod('emp_btn_color'); ?> !important;
	        }

					/* Borders */
					.btn-outline-light, a.button.product_type_variable, a.button.product_type_simple.add_to_cart_button{
						border: 1px <?php echo get_theme_mod('emp_tipography_primarycolor'); ?> solid;
					}
					<?php if(get_theme_mod('emp_styles_border') === 'true'){ ?>
						article, .woocommerce div.product div.images img, .woocommerce ul.products li.product a img,
						a.button.product_type_variable, a.button.product_type_simple.add_to_cart_button{
							border-radius: 30px!important;
						}
						.sfpo-table thead th {
						    border-radius: 10px 10px 0 0;
						}
						.btn,.border-30px, .tutor-container .tutor-row, .tutor-single-course-sidebar, .tutor-col-8,.tutor-dashboard .tutor-container,
						.tutor-cart-box-login-form-inner, .woocommerce-notices-wrapper, .woocommerce-error, .woocommerce-info, .woocommerce-message, li.product.type-product{
							border-radius: 30px;
						}
						.tutor-single-lesson-wrap {
						    border-radius: 0 0 30px 30px;
						}
					<?php } ?>
					<?php if(get_theme_mod('emp_styles_tipography') === 'sans-serif'){ ?>
						.fa-user .fa-text {
						    margin-left: -8px!important;
						}
					<?php } ?>

					/* Buttons */
	        .btn, .wpcf7-submit, #submit.submit, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, .reset_variations{
	        	background-color: <?php echo get_theme_mod('emp_btn_bg'); ?>;
	        	color: <?php echo get_theme_mod('emp_btn_color'); ?>;
	        }
	        .btn:hover, .btn:focus, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus{
	        	color: <?php echo get_theme_mod('emp_btn_color'); ?>!important;
	        	background-color: <?php echo get_theme_mod('emp_btn_bg'); ?>;
	        }
	        a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart, button.single_add_to_cart_button.button.alt, a.button.product_type_variable{
	        	background-color: <?php echo get_theme_mod('emp_btn_bg'); ?>!important;
	        	color: <?php echo get_theme_mod('emp_btn_color'); ?>!important;
	        }

					/* Shadows */
					<?php if (get_theme_mod('emp_styles_text_shadow') === 'true'){ ?>
						.text-shadow-6{
							text-shadow: 0 5px 13px rgba(0, 0, 0, 0.6);
						}
						.woocommerce ul.products li.product .button, .bg-navbar-top, blockquote, table, div .pt-lg-90, body{
							text-shadow: 0 5px 13px rgba(0, 0, 0, 0.2)!important;
						}
					<?php } ?>
					<?php if (get_theme_mod('emp_styles_text_shadow') === 'true') { ?>
						img, iframe {
							box-shadow: 0 13px 13px rgba(0, 0, 0, 0.6)!important;
						    transition: all .5s;
						}
						.FullScreenLanding, .shadow-grey-down, a.button, img, select.orderby{
						    box-shadow: 0px 13px 13px rgba(0, 0, 0, .2)!important;
						    transition: all .5s;
						}
						.shadow-grey-down-1{
							box-shadow: 0px 13px 38px rgba(0, 0, 0, .6)!important;
						}
						.img-btn-fixed, .dropdown-toggle::after {
						    box-shadow: 0 5px 13px rgba(0, 0, 0, 0.6);
						    border-radius: 26px;
						}
						@media(min-width: 991px){
							nav.navbar.navbar-scroll{
								box-shadow: 0 5px 13px rgba(0, 0, 0, 0.2)!important;
							}
						}
						.buttons-mobile, .shadow-grey-up, .footer{
							box-shadow: 0px -5px 13px rgba(0, 0, 0, .2)!important;
						}
						.shadow-grey-up-down, .btn, .card{
							box-shadow: 0px -5px 13px rgba(0, 0, 0, .2), 0px 13px 13px rgba(0, 0, 0, .2);
						}
						@media(max-width: 991px){
							#s, #searchsubmit, .select-form{
								box-shadow: 0px 13px 13px rgba(0, 0, 0, .2)!important;
							}
							.menu-item a{
								text-shadow: 0 5px 13px rgba(0, 0, 0, 0.6);
							}
						}
					<?php } ?>

	    </style>
	<?php
	}
	add_action( 'wp_head', 'emp_theme_customize_css');

// 5) content width
	if ( ! isset( $content_width ) ) {
		$content_width = 660;
	}

// 6) add theme support
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );
	add_theme_support('category-thumbnails');
  add_theme_support('post-formats', array('video', 'image', 'aside', 'audio'));


// 7) comment reply
	function wpse218049_enqueue_comments_reply() {

	    if( is_singular() && comments_open() && ( get_option( 'thread_comments' ) == 1) ) {
	        // Load comment-reply.js (into footer)
	        wp_enqueue_script( 'comment-reply', 'wp-includes/js/comment-reply', array(), false, true );
	    }
	}
	add_action(  'wp_enqueue_scripts', 'wpse218049_enqueue_comments_reply' );

// 8) Walker class
	class Walker_Nav_Primary extends Walker_Nav_menu {

		function start_lvl( &$output, $depth = 0, $args = array()){ //ul
			$indent = str_repeat("\t",$depth);
			$submenu = ($depth > 0) ? ' sub-menu' : '';
			$output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
		}

		function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){ //li a span

			$indent = ( $depth ) ? str_repeat("\t",$depth) : '';

			$li_attributes = '';
			$class_names = $value = '';

			$classes = empty( $item->classes ) ? array() : (array) $item->classes;

			$classes[] = ($args->walker->has_children) ? 'dropdown' : '';
			$classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
			$classes[] = 'menu-item-' . $item->ID;
			if( $depth && $args->walker->has_children ){
				$classes[] = 'dropdown-submenu';
			}

			$class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
			$class_names = ' class="' . esc_attr($class_names) . '"';

			$id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
			$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

			$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

			$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
			$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
			$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
			$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';

			$attributes .= ( $args->walker->has_children ) ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';

			$item_output = $args->before;
			$item_output .= '<a' . $attributes . '>';
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= ( $depth == 0 && $args->walker->has_children ) ? ' <b class="caret"></b></a>' : '</a>';
			$item_output .= $args->after;

			$output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

		}
	}

// 9) Wp link pages
 	$defaults = array(
		'before'           => '<p>' . __( 'Páginas:', 'empralidad' ),
		'after'            => '</p>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'Número',
		'separator'        => ' ',
		'nextpagelink'     => __( 'Proxima página', 'empralidad'),
		'previouspagelink' => __( 'Página anterior', 'empralidad' ),
		'pagelink'         => '%',
		'echo'             => 1
	);

// 10) Custom post type
 	add_action( 'init', 'codex_landing_pages_init' );
	function codex_landing_pages_init() {
		$labels = array(
			'name'               => _x( 'Landing Pages', 'Nombre general del tipo de post', 'empralidad' ),
			'singular_name'      => _x( 'Landing Page', 'Nombre singular', 'empralidad' ),
			'menu_name'          => _x( 'Landing Pages', 'admin menu', 'empralidad' ),
			'name_admin_bar'     => _x( 'Landing Pages', 'añadir nueva en admin bar', 'empralidad' ),
			'add_new'            => _x( 'Añadir nueva', 'Landing Page', 'empralidad' ),
			'add_new_item'       => __( 'Añadir nueva Landing Page', 'empralidad' ),
			'new_item'           => __( 'Nueva Landing Page', 'empralidad' ),
			'edit_item'          => __( 'Editar Landing Page', 'empralidad' ),
			'view_item'          => __( 'Ver Landing Page', 'empralidad' ),
			'all_items'          => __( 'Landing Pages', 'empralidad' ),
			'search_items'       => __( 'Buscar Landing Pages', 'empralidad' ),
			'parent_item_colon'  => __( 'Landing Page:', 'empralidad' ),
			'not_found'          => __( 'No encontrado.', 'empralidad' ),
			'not_found_in_trash' => __( 'No se en contraron en la papelera.', 'empralidad' )
		);

		$args = array(
			'labels'             => $labels,
	    'description'        => __( 'Descripcion.', 'empralidad' ),
			'menu_icon' 				 => 'dashicons-text-page',
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'landing-pages' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'show_in_rest'       => true,
			'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields')
		);


		register_post_type( 'landing_pages', $args );

		$labels = array(
			'name'               => _x( 'Páginas de contacto', 'Nombre general del tipo de post', 'empralidad' ),
			'singular_name'      => _x( 'Página de contacto', 'Nombre singular', 'empralidad' ),
			'menu_name'          => _x( 'Páginas de contacto', 'admin menu', 'empralidad' ),
			'name_admin_bar'     => _x( 'Páginas de contacto', 'añadir nueva en admin bar', 'empralidad' ),
			'add_new'            => _x( 'Añadir nueva', 'Página de contacto', 'empralidad' ),
			'add_new_item'       => __( 'Añadir nueva página de contacto', 'empralidad' ),
			'new_item'           => __( 'Nueva página de contacto', 'empralidad' ),
			'edit_item'          => __( 'Editar página de contacto', 'empralidad' ),
			'view_item'          => __( 'Ver página de contacto', 'empralidad' ),
			'all_items'          => __( 'Páginas de contacto', 'empralidad' ),
			'search_items'       => __( 'Buscar páginas de contacto', 'empralidad' ),
			'parent_item_colon'  => __( 'Página de contacto:', 'empralidad' ),
			'not_found'          => __( 'No encontrado.', 'empralidad' ),
			'not_found_in_trash' => __( 'No se en contraron en la papelera.', 'empralidad' )
		);

		$args = array(
			'labels'             => $labels,
	    'description'        => __( 'Descripcion.', 'empralidad' ),
			'menu_icon' 				 => 'dashicons-email',
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'contact' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt')
		);

		register_post_type( 'contact', $args );
	}

// 11) Woocomerce Custom
if (class_exists('WooCommerce')){
	function mytheme_add_woocommerce_support() {
	    add_theme_support( 'woocommerce', array(
	        'thumbnail_image_width' => 600,
	        'single_image_width'    => 600,

	        'product_grid'          => array(
	            'default_rows'    => 3,
	            'min_rows'        => 1,
	            'max_rows'        => 3,
	            'default_columns' => 3,
	            'min_columns'     => 3,
	            'max_columns'     => 5,
	        ),
	    ) );
	    add_theme_support( 'wc-product-gallery-slider' );
	}

	add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

// mini woocommerce cart

function custom_mini_cart() {
    echo '<div class="widget woocommerce widget_shopping_cart my-3 asd"><ul class="">';
        echo '<li> <div class="widget_shopping_cart_content fadeIn">';
                  woocommerce_mini_cart();
            echo '</div></li></ul></div>';

      }
add_shortcode( 'custom-techno-mini-cart', 'custom_mini_cart' );


function wc_refresh_mini_cart_count($fragments){
    ob_start();
    ?>
    <div id="mini-cart-count">
        <?php echo WC()->cart->get_cart_contents_count(); ?>
    </div>
    <?php
        $fragments['#mini-cart-count'] = ob_get_clean();
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart_count');

}
//  12) GitHub Updates
    // set_site_transient('update_themes', null);
	function emp_check_update( $transient ) {
	    if ( empty( $transient->checked ) ) {
	        return $transient;
	    }
	    $theme_data = wp_get_theme(wp_get_theme()->template);
	    $theme_slug = $theme_data->get_template();
	    //Delete '-master' from the end of slug
	    $theme_uri_slug = preg_replace('/-master$/', '', $theme_slug);

	    $remote_version = '0.0.0';
	    $style_css = wp_remote_get("https://raw.githubusercontent.com/alanpereyra57/".$theme_uri_slug."/master/style.css")['body'];
	    if ( preg_match( '/^[ \t\/*#@]*' . preg_quote( 'Version', '/' ) . ':(.*)$/mi', $style_css, $match ) && $match[1] )
	        $remote_version = _cleanup_header_comment( $match[1] );

	    if (version_compare($theme_data->version, $remote_version, '<')) {
	        $transient->response[$theme_slug] = array(
	            'theme'       => $theme_slug,
	            'new_version' => $remote_version,
	            'url'         => 'https://github.com/alanpereyra57/'.$theme_uri_slug,
	            'package'     => 'https://github.com/alanpereyra57/'.$theme_uri_slug.'/archive/master.zip',
	        );
	    }

	    return $transient;
	}

	$emp_password = get_theme_mod('$emp_github_pass');

	if($emp_password == 'iiKNN33797'){
		add_filter( 'pre_set_site_transient_update_themes', 'emp_check_update' );
	}

// Test block

// function gutenberg_emp_register_block() {
// 		wp_enqueue_script( 'emp-blocks', get_template_directory_uri() . '/js/emp-blocks.js', array(), '1.9.5', true );
// 		register_block_type( 'emp-blocks/lists-items', array(
//         'editor_script' => 'emp-blocks',
//     ) );
// }
// add_action( 'init', 'gutenberg_emp_register_block' );
//
// function emp_block_add_styles() {
//     wp_enqueue_style( 'emp-block-css', get_stylesheet_directory_uri() . '/css/emp_block.css' );
// }
// add_action('enqueue_block_assets', 'emp_block_add_styles');

// 13) Fix admin bar
if ( ! current_user_can( 'manage_options' ) ) {
    show_admin_bar( false );
}

?>
