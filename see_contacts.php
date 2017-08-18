<?php 
	require_once "lib/nusoap.php";
	require "conexion.php";
	$client = new nusoap_client("http://localhost/m7/uf4/Prt1/server.php?wsdl");
	$contactos = $client->call("cargaContactos"); 
	$contactos = json_decode($contactos);
	
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
	    	<table class="table table-striped table-hover">
	    	<thead>
	    		<tr>
	    			<th class="text-muted"></th>
	    			<th>Nombre</th>
	    			<th>Dirección</th>
	    			<th>Teléfono</th>
	    			<th>Email</th>
	    		</tr>
	    	</thead>
	    	<tbody>
			<?php 
				$contador = 1;
				foreach ($contactos as $contacto) {
					echo "<tr><td>$contador</td><td>".$contacto->nombre. "</td><td>" . $contacto->direccion . "</td><td>" . $contacto->telefono. "</td><td>".$contacto->email. "</td></tr>";
					$contador++;
				}
			 ?>
			 </tbody>
			 </table>
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

