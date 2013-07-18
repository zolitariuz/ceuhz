<?php get_header(); ?>
	
	<div class="seccion_home">
		
		<h2><?php single_cat_title(); ?></h2>
		
		<?php
		while ( have_posts( ) ) : the_post(); ?>
		
			<div class="entrada_home">
			
				<a href="<?php the_permalink(); ?>" rel="no-follow">
					<?php the_post_thumbnail('entrada_home'); ?>
				</a>
				<div class="entrada_home_info">
					<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
				</div><!-- entrada_home_info -->
				
			</div><!-- entrada_home -->

		<?php endwhile; ?>
		
		<div class="clear"></div>
		
		<div id="pagination">
			
			<div id="prev" class="pag">
				
				<?php previous_posts_link( '< Anterior' ); ?>
				
			</div><!-- prev -->
			
			<div id="next" class="pag">
				
				<?php next_posts_link( 'Siguiente >' ); ?>
				
			</div><!-- next -->
		
		</div><!-- pagination -->
		
		
	</div><!-- seccion_home -->
	
<?php get_footer(); ?>