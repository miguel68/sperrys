<?php 
 	$servername = "localhost";
    $username = "bauldeco_miguelc";
    $password = "#vR4kJgXpTLf";
    $dbname = "bauldeco_miguelcastaneda";
 
    $conn = new mysqli($servername, $username, $password, $dbname);
 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
 
    $sql = "SELECT * FROM ubicacion";
    $result = $conn->query($sql);
 
    $conn->close();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubicación</title>
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
			<div id="map">
	    <script>
			function initMap() {
			  var map = new google.maps.Map(document.getElementById('map'), {
			    zoom: 13,
			    center: {lat: 20.6404733, lng: -87.0594108}
			  });

			  var image = 'images/ima1.png';
			  var beachMarker = new google.maps.Marker({
			    position: {lat: 20.6490073, lng: -87.0550544},
			    map: map,
			    icon: image
			  });
			  var image = 'images/ima2.png';
			  var beachMarker = new google.maps.Marker({
			    position: {lat: 20.636712, lng: -87.071698},
			    map: map,
			    icon: image
			  });
			   var image = 'images/ima3.png';
			  var beachMarker = new google.maps.Marker({
			    position: {lat: 20.639577, lng: -87.060544},
			    map: map,
			    icon: image
			  });
			}

		</script>
	    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIBvmUpYSDb-PV4PdGo5fnlSYzV6QNSFM&signed_in=true&callback=initMap"></script>
	    </div>
			<div class="tabla2">
				<table>
		        <?php while($row = $result->fetch_assoc()): ?>
		        <tr>
		            <td><img src="images/<?php echo $row['logo']; ?>"></td>
		            <td><img src="images/<?php echo $row['imagen']; ?>"></td>
		            <td><?php echo utf8_encode($row['texto']);?></td>
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