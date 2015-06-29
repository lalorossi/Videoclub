<?php 
	
	// No hace falta incluir el conectar

	include_once "menu_user.php";

	switch ($_GET['a']) {
		case 'peliculas':

			$sql="SELECT nombre FROM peliculas";
			$query=mysql_query($sql, $link);

			$filas=mysql_num_rows($query);

			for ($i=0; $i<$filas; $i++){

				$peliculas= mysql_fetch_array($query); 
				$pelicula= $peliculas[0];

	?>	
		<!-- Adenrtro de este div tienen que ir campos para el titulo, actores... y una imagen -->
		<!-- Agregar el boton de alquilar al final (solo los usuarios pueden entrar a esta pagina) -->
			<div class="contenedor_pelicula">
				<?php
					echo ("$pelicula");
				?>
			</div>

	<?php
		}
	
			break;
	
	case 'alquiladas':

			break;
		
	case 'datos_user':
			# 
			break;
			
	}

 ?>