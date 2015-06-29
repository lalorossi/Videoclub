<?php

	if (empty($_SESSION['nombre'])) {
		header("Location: login.php");
	}

?>