<?php 


	
	switch ($_GET['a']) {
		case 'usuario':
			
			?>
			<div class="contenedor_agregar animated">	

				<form method="POST" action="completar_agregar.php?d=usuarios">

					<input autofocus type="text" class="inputtext" name="nombre" placeholder="Nombre del Usuario"  autocomplete="off" />

					<input type="password" class="inputtext" name="pass" placeholder="Contraseña"  autocomplete="off" />				

					<input type="submit" value="Enviar" />

				</form> 

			</div>

			<?php


			break;


		case 'actor':
			
			?>
			<div class="contenedor_agregar animated">	

				<form method="POST" action="completar_agregar.php?d=actores">

					<input autofocus type="text" class="inputtext" name="nombre" placeholder="Nombre del Actor"  autocomplete="off" />
					
					<input type="submit" value="Enviar" />

				</form> 

			</div>

			<?php

			break;


		case 'director':
			
			?>
			<div class="contenedor_agregar animated">	

				<form method="POST" action="completar_agregar.php?d=directores">

					<input autofocus type="text" class="inputtext" name="nombre" placeholder="Nombre del Director"  autocomplete="off" />
					
					<input type="submit" value="Enviar" />

				</form> 

			</div>

			<?php

			break;


		case 'pelicula':

			include_once "conectar.php";
			
			$sql="SELECT * FROM actores";
			$act=mysql_query($sql, $link);

			$array_actores=mysql_fetch_array($act);

			?>
			<div class="contenedor_agregar animated">	

				<form method="POST" action="completar_agregar.php?d=peliculas">

					<input autofocus type="text" class="inputtext" name="nombre" placeholder="Nombre de la Película"  autocomplete="off" />
					
					<!--NO SE DE QUÉ MANERA DEJARLE AL ADMIN SELECCIONAR VARIOS ACTORES, DIRECTORES Y GENEROS-->

					<div class="contenedor_datos">
						<?php 
							foreach ($array_actores as $nombre) {
							
						 ?>
							<input type="checkbox" name="actor" placeholder="$nombre" />$nombre
						<?php 
							}
						 ?>

					</div>

					<input type="submit" value="Enviar" />

				</form> 

			</div>

			<?php

			break;
		


	}


	
 ?>