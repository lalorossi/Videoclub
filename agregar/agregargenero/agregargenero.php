<?php 

	function debug($data){
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}

	echo "HOLA";

	// Datos para la conexion
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$base = 'videoclub';	
	
	if(empty($_POST['nombredelgenero'])){
		exit();
	}

	// Conectarse a la DB
	$link = mysql_connect($host, $user, $pass) or die(mysql_errno());

	// Seleccionar la Tabla
	$db   = mysql_select_db($base, $link) or die(mysql_error());

	$genero 	= mysql_real_escape_string($_POST['nombredelgenero']);

	$insertar	= "INSERT INTO generos (genero) 
			VALUES ('".$genero."')";

	$resultado_insertar = mysql_query($insertar, $link) or die(mysql_error());	

	if($resultado_insertar){
		$recuperar="SELECT * FROM generos";
		$resultado_recuperar= mysql_query($recuperar, $link) or die(mysql_error());

		while ($rs=mysql_fetch_assoc($resultado_recuperar)) {
			//debug($rs);
			?>
			<div class="info">
				<?php 
					echo $rs['genero'];
				 ?>
			</div>
			<?php
		}
	}

 ?>