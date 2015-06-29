<?php 

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$base = 'videoclub';

	// Iniciamos la conexión.
	$link = mysql_connect($host, $user, $pass) or die(mysql_errno());
	// Seleccionar la Tabla
	$db   = mysql_select_db($base, $link) or die(mysql_error());
	
?>