<?php 



	/* Comprobar su $_GET['a'] esta seteado y si esta seteado conectar a DB ACA */
	include_once"conectar.php";
	
	include_once 'pie.php';


	/* Una vez que este comprobado si existe o no seguir con el switch de lo 
		contrario llevar al index o hacer un exit();
	*/

	

	switch ($_GET['a']) {
		case 'chequear':


			echo "esto es chequear";

			//No hace falta generar la conexion 
			//Se genero en conectar.php (inlcuido en el index)

			/* Buscar el usuario  y comparar la contraseña */

			$usuario 	= mysql_real_escape_string($_POST['user']);	
			$contraseña = md5(mysql_real_escape_string($_POST['pass']));


			$sql = "SELECT nombre FROM usuarios WHERE nombre='$usuario' AND pass='$contraseña'";
			
			$res= mysql_query($sql, $link) or die(mysql_error());

			$nombreencontrado = mysql_result($res, 0);

			if ($nombreencontrado==$usuario){
				if ($usuario=="admin"){
					header("Location: home.php?u=admin");
				}else{
					header("Location: home.php?u=user");
				}
			}else{
				header("Location: login.php?e=validar");
			}


		break;

		case 'registro':

			echo "esto es registro";

			$usuario=mysql_real_escape_string($_POST['user']);
			$contra=md5(mysql_real_escape_string($_POST['pass']));
			$contra2=md5(mysql_real_escape_string($_POST['pass2']));
			$mail=mysql_real_escape_string($_POST['mail']);


			/*chequeo que el usuario no exista*/
			$sql="SELECT nombre FROM usuarios WHERE nombre = '$usuario'";
			$query=mysql_query($sql, $link);

			$array=mysql_fetch_array($query);

			$usuario_traido = $array[0];

			echo $usuario_traido;


			if (empty($usuario) or empty($contra) or empty($contra2) or empty($mail)) {
				header("Location: registro.php?e=vacio");
			}
			elseif($usuario_traido){
				/*e=user significa que se dio un error, y ya existe el nombre de usuario*/
				header("Location: registro.php?e=user");
			}


			/*chequeo que se haya ingresado bien la contraseña*/
			elseif($contra!=$contra2){

				/*e=pass significa que no coinciden las contraseñas*/
				header("Location: registro.php?e=pass");
			}
			

			else{
				$sql="INSERT INTO usuarios (nombre, pass) VALUES ('$usuario', '$contra')";
				$query=mysql_query($sql, $link) or die(mysql_error());

				echo "LLEGUE";
				if (!empty($query)){
					echo"BIEN REGISTRADO";
					header("Location:login.php?e=registrado");
				}else{
					echo "MAL REGISTADO";
				}

			}



			break;
		}

?>

