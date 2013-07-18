<?php get_header(); ?>
			<?php the_post(); ?>
			<div class="seccion_single">
				
				<h2><?php the_title(); ?></h2>
				
				<div class="entrada_single mapa">
					<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=19.396942,-99.569184&amp;aq=&amp;sll=19.282754,-99.655722&amp;sspn=0.440075,0.726471&amp;ie=UTF8&amp;t=m&amp;z=14&amp;ll=19.396942,-99.569184&amp;output=embed"></iframe>
					
				</div><!-- entrada_home -->
				
			</div><!-- seccion_single -->
			
			<?php get_sidebar(); ?>
			
<?php get_footer(); ?>