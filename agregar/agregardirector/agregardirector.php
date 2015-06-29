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
	
	if(empty($_POST['nombredeldirector'])){
		exit();
	}

	// Conectarse a la DB
	$link = mysql_connect($host, $user, $pass) or die(mysql_errno());

	// Seleccionar la Tabla
	$db   = mysql_select_db($base, $link) or die(mysql_error());

	$director 	= mysql_real_escape_string($_POST['nombredeldirector']);

	$insertar	= "INSERT INTO directores (nombre) 
			VALUES ('".$director."')";

	$resultado_insertar = mysql_query($insertar, $link) or die(mysql_error());	

	if($resultado_insertar){
		echo "se agrego el actor";
		header("Location: /home.php");

		
	}

 ?>