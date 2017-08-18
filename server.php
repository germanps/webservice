<?php 
	require_once "lib/nusoap.php";
	require "conexion.php";
	$server = new soap_server();
	$server->configureWSDL("mi priemer ws", "urn:contactos");
	if (!isset($HTTP_RAW_POST_DATA)) {
		$HTTP_RAW_POST_DATA = file_get_contents("php://input");
	}
	
	//Carga todos los contactos
	function cargaContactos(){
		$con = conexion();
		$contactos = $con->query("select * from contacto");
		$arr_contactos =  [];
		while ($contacto = mysqli_fetch_array($contactos, MYSQLI_ASSOC)) {
			$arr_contactos[] = $contacto;
		}
		return json_encode($arr_contactos);
	}

	//Carga contactos según el nombre
	function cargaContactosNombre($param){
		$con = conexion();
		$contactos = $con->query("select * from contacto where nombre='$param';");
		$arr_contactos =  [];
		while ($contacto = mysqli_fetch_array($contactos, MYSQLI_ASSOC)) {
			$arr_contactos[] = $contacto;
		}
		return json_encode($arr_contactos);
	}

	function insertaContacto($nombre,$dir,$tel,$mail){
		$con = conexion();
		$insert_query = $con->query("insert into contacto(identificador, nombre, direccion, telefono, email) values('null', '$nombre', '$dir', '$tel', '$mail');");
	}

	$server->register("cargaContactos",
						array(),
						array("return"=>"xsd:string"),
						"urn:contactos",
						"urn:namespace#cargaContactos",
						"rpc",
						"encoded",
						"Carga todos los contactos de la aplicación"
					);
	$server->register("cargaContactosNombre",
						array('param'=>'xsd:string'),
						array("return"=>"xsd:string"),
						"urn:contactos",
						"urn:namespace#cargaContactosNombre",
						"rpc",
						"encoded",
						"Carga los contactos de la aplicación por el nombre"
					);
	$server->register("insertaContacto",
						array(
							"nombre"=>"xsd:string",
							"dir"=>"xsd:string",
							"tel"=>"xsd:string",
							"mail"=>"xsd:string"
						),
						array(),
						"urn:contactos",
						"urn:namespace#insertaContacto",
						"rpc",
						"encoded",
						"Introduce un contacto a la aplicación"
					);

	//Listener
	$server->service($HTTP_RAW_POST_DATA);

 ?>