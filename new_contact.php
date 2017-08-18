<?php 
	require_once("lib/nusoap.php");
	require("conexion.php");
	
	$nombre = $_POST["nameUser"];
	$direccion = $_POST["addressUser"];
	$telefono = $_POST["telUser"];
	$email = $_POST["emailUser"];

	$client = new nusoap_client("http://localhost/m7/uf4/Prt1/server.php?wsdl");
	$contact_name = $client->call("insertaContacto",
									array(
										'nombre'=>$nombre,
										'dir'=>$direccion,
										'tel'=>$telefono,
										'mail'=>$email
									)
								);

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Web Service</title>
	<link rel="stylesheet" href="src/css/bootstrap.min.css">
	<link rel="stylesheet" href="src/css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>

<!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-sm-12">
        	<h2 class="text-left  text-warning">Web Service SOAP - WSDL <span class="bg-warning xs-text sq-text-w"> by Germán Pla</span></h2>   
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        	<p class="text-success">Nuevo contacto creado con éxito!</p>
        	<ul>
        		<li>Nombre: <?php echo $nombre; ?></li>
        		<li>Dirección: <?php echo $direccion; ?></li>
        		<li>Teléfono: <?php echo $telefono; ?></li>
        		<li>Email: <?php echo $email; ?></li>
        	</ul>			
			<a href="index.php" class="btn btn-success">Volver</a>
        </div>
    </div>
</div>

<!-- Jquery JS file -->
<script type="text/javascript" src="src/js/vendor/jquery-3.1.1.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="src/js/vendor/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="src/js/main.js"></script>

</body>
</html>
