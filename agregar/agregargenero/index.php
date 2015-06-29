<!DOCTYPE html>
<html>
	<head>

		<!-- TITULO DE LA PÁGINA -->
		<title>Shugman's Club</title>

		<!-- DEFINIR ESTILOS -->
		<style type="text/css">
			/* ACÁ METÉ LOS ESTILOS NEGRO DE MIERDA*/
			.div1{
				position: relative;
				margin: 100px auto;
				background: rgba(0,0,0,.6);
				padding: 15px 25px;
				border-radius: 15px;
				font-size: 18px;
				color: white;
				width: 300px;
			}
		</style>
	</head>

	<body style="background:#FA3;">
		<!-- ACA VAN LO QUE QUIERAS MOSTRAR NEGRO!!! -->
		<!-- CAJA CENTRAL -->
		<div class="div1">
			<!-- TABLA DE LA CAJA -->
			<form method="POST" action="agregargenero.php">
				<table>
					<tr>
						<td>G&eacutenero</td>
						<td><input type="text" name="nombredelgenero" width="16"></td>
					</tr>
						<td align="center" colspan="2"><input type="submit" value="Enviar"></td>
					</tr>
				</table>
			</form>
		</div>
	</body>

</html>