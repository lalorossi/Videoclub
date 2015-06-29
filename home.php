<?php 
	include_once "cabecera.php";


/* Si el GET esta definido, es porque otra pagina me trajo al login
 y muestro el mensaje que dejo la pagina anterior */
 
	if (empty($_GET['m']))
		echo "Esto es Home";
	else
		echo "Se agrego el dato $_GET[m]";


	if ($_GET['u']=="user"){
		include_once "menu_user.php";
	}elseif($_GET['u']=="admin"){
		include_once "menu_admin.php";
	}


	include_once "pie.php";
 ?>
 