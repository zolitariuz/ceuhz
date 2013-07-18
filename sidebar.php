		<div id="sidebar">
			
			<!--	
			<div class="seccion_sidebar">
				<h3>Facebook</h3>
				
			</div><!-- seccion_sidebar -->
			
			<!--
			<div class="seccion_sidebar">
				<h3>Twitter</h3>
				
			</div><!-- seccion_sidebar
			-->
			
			<div class="seccion_sidebar">
				<h3>Contacto</h3>
				
				<form id="forma_sidebar" method="post" action="<?php echo home_url('/contacto-recibido'); ?>">
					<label for="nombre">Nombre</label>
					<input type="text"
						class="required"
						name="nombre"
					>
					
					<label for="email">Email</label>
					<input type="email"
						class="required email"
						name="email"
					>
					
					<label for="mensaje">Mensaje</label>
					<textarea name="mensaje" class="required">
					</textarea>
					
					<input type="submit" value="enviar">
				</form><!-- forma_sidebar -->
				
			</div><!-- seccion_sidebar -->
			
		</div><!-- sidebar -->