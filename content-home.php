<article class="p-3 col-12 col-md-10 col-lg-9 mx-auto">
	<h1 class="text-mobile text-center widget-title-dark"><strong><?php the_title(); ?></strong></h1>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		    the_content();
		endwhile; endif; ?>
</article>