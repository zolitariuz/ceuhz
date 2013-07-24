<?php get_header(); ?>
			<div class="seccion_single">
				
				<h2>Bolsa de Trabajo</h2>
				
				<div class="entrada_single">
					
					<?php
						$args = array(
							'post_type'		 => 'vacantes',
							'posts_per_page' => -1
						);
						query_posts($args);
						while ( have_posts() ) : the_post();
							$ciudad = get_post_meta($post->ID, 'dbt_ciudad', true);
							$url = get_post_meta($post->ID, 'dbt_url', true);
						?>

						<h4><?php the_title(); ?></h4>

						<?php if ( $ciudad != '' ){ ?>
							<p><strong>Ciudad:</strong> <?php echo $ciudad; ?><br />
						<?php }

						if ( $url != '' ){ ?>
							<strong>URL:</strong> <?php echo $url; ?></p>
						<?php } ?>

						<?php the_content(); ?>

							

						<?php endwhile; ?>

				</div><!-- entrada_single -->
				
			</div><!-- seccion_single -->
			
			<?php get_sidebar(); ?>
			
<?php get_footer(); ?>