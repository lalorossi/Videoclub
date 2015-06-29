<?php


	// Hoy es martes 9 de junio, esta nublado, Carla me mostro la tanga. Mi mama es muy buena. Saludos.
	// Incluimos la cabecera
	include_once 'cabecera.php';

	// Incluimos las conexiones a DB.
	include_once 'conectar.php';

	// Incluimos la seguridad de la web (si el usuario tiene permisos o no).
	//include_once 'seguridad.php';




	/*
		Si GET['p']( definido en la URL pe. www.google.com.ar?p=estoes ) esta definido
		entonces cargamos la página que estamos pidiendo por GET.
		De lo contrario cargamos login por defecto.
	*/

	if (!empty($_GET['p'])) {
		
		include_once ''.$_GET['p'].'.php';

	}else{

		// Pagina para loguear
		include_once 'login.php';

	}

	// Incluimos el pie
	include_once 'pie.php';

?>