<?php 
	function conexion(){
		$con = mysqli_connect("localhost","root","", "webservice") or die("Error en la conexión con la base de datos");
		return $con;
	}
 ?>