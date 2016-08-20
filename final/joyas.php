<?php 
 $servername = "localhost";
    $username = "bauldeco_miguelc";
    $password = "#vR4kJgXpTLf";
    $dbname = "bauldeco_miguelcastaneda";
 
    $conn = new mysqli($servername, $username, $password, $dbname);
 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
 
    $sql = "SELECT * FROM joyas1";
    $result = $conn->query($sql);
 
    $conn->close();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Joyas</title>
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

		<div class="contenido">
			<div class="tabla">
				<table>
		        <?php while($row = $result->fetch_assoc()): ?>
		        <tr>
		            <td ><img src="images/<?php echo $row['imagen']; ?>"></td>
		            <td><img src="images/<?php echo $row['foto']; ?>"></td>
		            <td><?php echo utf8_encode($row['texto']);?></td>
		            <td><?php echo utf8_encode($row['precio']);?></td>
		 

		        </tr>
		        <?php endwhile; ?>
		    	</table>
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