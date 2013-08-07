<?php get_header(); ?>
			<?php the_post(); ?>
			<div class="seccion_single">
				
				<h2><?php the_title(); ?></h2>
				
				<div class="entrada_single">
					
					<h3>Tramita tu cédula profesional</h3>
					
						<p><strong>En Toluca:</strong></p>
						
						<p>Av. Lerdo Poniente 101, edificio Plaza Toluca 2º piso, puerta 405, Colonia Centro Toluca, Estado de México.<br />
						Teléfono: (722) 2 -13-71-52</p>
						
						<p><strong>En el D.F.:</strong></p>
						
						<p>Dirección general de profesiones, Insurgentes sur no. 2387, Col. San Ángel, México D.F.<br />
						Teléfono: 0155-36-01-39-14 y 55 36 01 39 17<br />
						Extensión: 12566, 16648 y 16651</p>
						
						<form id="contacto_egresados" action="<?php echo home_url('/seguimiento-de-egresados-recibido'); ?>" method="post">
						
							<label>Nombre</label>
							<input type="text" name="nombre" />
							
							<label>Licenciatura</label>
							<input type="text" name="nombre" />
							
							<label>Generación</label>
							<input type="text" name="nombre" />
							
							<label>Teléfonos</label>
							<input type="tel" name="nombre" />
							
							<label>E-mail</label>
							<input type="email" name="nombre" />
							
							<label>Programa</label>
							<select name="programa">
								<option>UAEM</option>
								<option>SEGEM</option>
							</select>
							
							<label>Mensaje</label>
							<textarea name="mensaje" ></textarea>
							
							<div class="clear"></div>

							<input type="submit" value="Enviar">
						
						</form>
					
					<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="412" data-num-posts="10"></div>
					
				</div><!-- entrada_home -->
				
			</div><!-- seccion_single -->
			
			<?php get_sidebar(); ?>
			
<?php get_footer(); ?>