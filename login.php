<!-- ACA VAN LO QUE QUIERAS MOSTRAR NEGRO!!! -->
<!-- CAJA CENTRAL -->

<?php
	include_once 'cabecera.php';

/* Si el GET esta definido, es porque otra pagina me trajo al login
 y muestro el mensaje que dejo la pagina anterior */
 
	if (!empty($_GET['e'])){
		if ($_GET['e']=='validar'){
			echo"No se pudo validar el usuario";
		}
		if($_GET['e']=='registrado'){
			echo "Se pudo registrar, inicie sesion";
		}
	}
?>


<div class="contenedor_login animated">
	<!-- TABLA DE LA CAJA -->

	<!-- 
		FORM:
			Tiene que tener definido SI O SI,
				* method(método): para indicar de que forma vamos a mandar los datos si por GET o por POST.
				* action(acción): esto le dice al formulario a que pagina debe enviar los datos.
				* enctype="multipart/form-data" : En caso que quieras mandar archivos, es necesario definir esto en la etiqueta de FORM.
			Todos los datos que envie son los insertados en INPUT, TEXTAREA, SELECT, RADIO, CHECKBOX etc.	
	 -->


	<form method="POST" action="index.php?p=acciones_pre_log&a=chequear" >
		
		<input autofocus type="text" class="inputtext" name="user" placeholder="Usuario"  autocomplete="off" />
		
		<input type="password" name="pass" placeholder="Contraseña"  autocomplete="off" />
		
		<input type="submit" value="Enviar" />

		<a href="registro.php">Registrarse</a>

	</form>
</div>
