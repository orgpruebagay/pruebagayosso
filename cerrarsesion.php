<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
	<title>CerrarSesión</title>
</head>
<body>
	<?php 

		include 'conexion2.php';
		$conexion = new database();
		$conexion->cerrarSesion();
  echo "<br><div class='alert alert-success' align='center'><h2>Gracias por visitar Gayosso</div></h2>";
    header('Location: index.html');

	 ?>
</body>
</html>