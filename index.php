<?php get_header(); ?>
	
	<div class="seccion_home">
				
				<h2> <a href="<?php echo home_url('/c/noticias'); ?>"> Noticias </a> </h2>
				
				<?php
				$args = array(
					'post_per_page' => 3,
					'cat' => 9
				);
				query_posts($args);
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

			</div><!-- seccion_home -->
			
			<div class="seccion_home">
				
				<h2> <a href="<?php echo home_url('/c/avisos'); ?>"> Avisos para alumnos </a> </h2>
				
				<?php
				$args = array(
					'post_per_page' => 3,
					'cat' => 10
				);
				query_posts($args);
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
				
			</div><!-- seccion_home -->
	
<?php get_footer(); ?>