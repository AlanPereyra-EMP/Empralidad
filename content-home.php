<?php $ip_show1 = get_theme_mod('ip_homepage_show1'); ?>
<?php $ip_show2 = get_theme_mod('ip_homepage_show2'); ?>
<?php $ip_show3 = get_theme_mod('ip_homepage_show3'); ?>
<article class="p-3 col-12 <?php if($ip_show1 === 'true'||$ip_show2 === 'true'||$ip_show3 === 'true'){ ?> col-md-9 <?php }else{ ?> col-md-10 col-lg-9 <?php } ?> mx-auto">
	<h1 class="text-mobile text-center widget-title-dark"><strong><?php the_title(); ?></strong></h1>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		    the_content();
		endwhile; endif; ?>
</article>