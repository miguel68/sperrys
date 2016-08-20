<?php

	if (isset($_GET['nombre']) && isset($_GET['apellido']) && isset($_GET['email']) && isset($_GET['mensaje'])) {		
	 
	$nombre = $_GET['nombre'];
	$apellido = $_GET['apellido'];
	$email = $_GET['email'];
	$mensaje = $_GET['mensaje'];

	$servername = "localhost";
    $username = "bauldeco_miguelc";
    $password = "#vR4kJgXpTLf";
    $dbname = "bauldeco_miguelcastaneda";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error){
		die ("connection failed" . $conn->connect_error);
	}

	$sql = "INSERT INTO informacion (nombre, apellido, email, mensaje) 
	VALUES ('$nombre', '$apellido', '$email', '$mensaje')";

	if($conn->query($sql) === TRUE){
		echo "Gracoias! hemos recibido tu comentario.";
	} else {
		echo "Lo sentimos, no podemos procesar tu perición. Intenta nuevamente.";
	}
	$conn->close();

	} else{
	 	echo "llena todos los campos";
	 }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Contacto</title>
	<meta charset ="utf-8">	
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">	
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	
</head>
<body>
	<div id="contenedor">
		<div class="titulo">
			<a href="inicio.php"><img src="images/SPERRYS.png"/></a>
		</div>
		<div id="menu">
			<ul>
			<li><a href="formulario.php"><img src="images/contacto.png" width="180"/></a></li>
			<li><a href="ubicacion.php"><img src="images/ubicacion.png" width="180"/></a></li>
			<li><a href="joyas.php"><img src="images/joyas.png" width="180"/></a></li>	
			<li><a href="bebidas.php"><img src="images/bebidas.png" width="180"/></a></li>				
		</ul>
		</div>

		<div class="contenido1">

		<div class="formu">
			<form action="formulario.php" method="GET">
		 		<label>Nombre:</label>
		 		<input type='tex'name="nombre"></input>
		 		<label>Apellido:</label>
		 		<input type='tex' name='apellido'></input> 		
		 		<label>Email:</label>
		 		<input type='tex' name='email'></input>
		 		<label>Mensaje:</label>
		 		<textarea name='mensaje'></textarea>
		 		<input type="submit" id="enviar"></input>
 			</form>
 		</div>
 
		</div>
		<div class="footer">
		<ul>
			<li><a href="inicio.php">inicio</a></li>
			<li><a href="bebidas.php">bebidas</a></li>	
			<li><a href="joyas.php">joyas</a></li>
			<li><a href="ubicacion.php">ubicación</a></li>
			<li><a href="formulario.php">contacto</a></li>		
		</ul>
        <a href="https://www.facebook.com/biuriful.mx/?fref=ts" target="_blank"><img src="images/facebook.png"/></a>
        <a href="https://www.instagram.com/biuriful_/" target="_blank"><img src="images/instagram.png"/></a>
		</div>
	</div>
</body>
</html>