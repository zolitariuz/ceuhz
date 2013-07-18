<?php get_header(); ?>
			<?php the_post(); ?>
			<div class="seccion_single">
				
				<h2><?php the_title(); ?></h2>
				
				<div class="entrada_single">
					
					<?php
					the_post_thumbnail('full', array('class' => 'main'));
					the_content();
					?>
					
					<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="412" data-num-posts="10"></div>
					
				</div><!-- entrada_home -->
				
			</div><!-- seccion_single -->
			
			<?php get_sidebar(); ?>
			
<?php get_footer(); ?>