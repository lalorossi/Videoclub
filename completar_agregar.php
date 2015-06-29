<?php 

	include_once "cabecera.php";
	include_once "conectar.php";

	
	$tabla=$_GET['d'];

	$valor=mysql_real_escape_string($_POST['nombre']);

	if ($tabla=='usuarios'){

		$pass=md5(mysql_real_escape_string($_POST['pass']));
		$insert = "INSERT INTO $tabla (nombre, pass) VALUES ('$valor', '$pass')";
		$sql = mysql_query($insert, $link) or die(mysql_error());

	}else{

		$insert = "INSERT INTO $tabla (nombre) VALUES ('$valor')";
		$sql = mysql_query($insert, $link) or die(mysql_error());

	}


	if ($sql) {
		header("Location: home.php?m=$tabla");
	}
	else{
		echo "no se agrego el dato";
	}


 ?>