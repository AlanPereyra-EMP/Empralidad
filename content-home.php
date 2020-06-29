<?php $emp_show1 = get_theme_mod('emp_homepage_show1'); ?>
<?php $emp_show2 = get_theme_mod('emp_homepage_show2'); ?>
<?php $emp_show3 = get_theme_mod('emp_homepage_show3'); ?>

	<h2 class="px-3 h1 widget-title-dark text-center"><strong class=""><?php the_title(); ?></strong>	 </h2>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		    the_content();
		endwhile; endif; ?>
