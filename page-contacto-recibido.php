<?php
get_header();

$nombre = $mail = $mensaje = '';

$nombre = ( isset($_POST['nombre']) ) ? $_POST['nombre'] : '';
$mail = ( isset($_POST['email']) ) ? $_POST['email'] : '';
$mensaje = ( isset($_POST['mensaje']) ) ? $_POST['mensaje'] : '';

$mail_to = 'ceuhz.campus.universitario@gmail.com';
$subject = 'Contacto página CEUHZ '.$nombre;

$body_message = 'Nombre: '.$nombre."\n";
$body_message .= 'Mail: '.$mail."\n";
$body_message .= 'Mensaje: '.$mensaje;

$headers = 'From: '.$mail."\r\n";
$headers .= 'Reply-To: '.$mail."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);
?>
			<div class="seccion_single">
				
				<h2>Contacto</h2>
				
				<div class="entrada_single">
					
					<h3>Hemos recibido tu mensaje, nos pondremos en contacto contigo pronto.</h3>
					
				</div><!-- entrada_home -->
				
			</div><!-- seccion_single -->
			
			<?php get_sidebar(); ?>
			
<?php get_footer(); ?>