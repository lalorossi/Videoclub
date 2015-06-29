<?php 

	include_once "/mis_proyectos/videoclub/conectar.php";
	include_once "/mis_proyectos/videoclub/css/estilos.css";


 ?>
	<div class="contenedor_agregar">	

		<form method="POST" action="completar_agregar.php">

			<input autofocus type="text" class="inputtext" name="actor" placeholder="Nombre del Actor"  autocomplete="off" />
			
			<input type="submit" value="Enviar" />

		</form> 

	</div>

<?php
