<?php 
	//require_once('server.php');
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
            <div class="pull-left">
                <button class="btn btn-success" data-toggle="modal" data-target="#new_modal">Crear contacto</button>
                <button class="btn btn-info" data-toggle="modal" data-target="#search_modal">Buscar contacto</button>
                <a class="btn btn-info" href="see_contacts.php">Ver contactos</a>
            </div>
        </div>
    </div>  
<!-- /Container Section -->


<!-- Modal new contact-->
<div class="modal fade" id="new_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method='post' action='new_contact.php' role="form" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Crear contacto</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="nameUserId">Nombre</label>
                        <input name="nameUser" type="text" id="nameUserId" placeholder="Nombre" class="form-control" required/>
                    </div>

                    <div class="form-group">
                        <label for="addressUserId">Dirección</label>
                        <input name="addressUser" type="text" id="addressUserId" placeholder="Dirección" class="form-control" required/>
                    </div>

                    <div class="form-group">
                        <label for="telUserId">Teléfono</label>
                        <input name="telUser" type="text" id="telUserId" placeholder="Teléfono" class="form-control" required/>
                    </div>

                    <div class="form-group">
                        <label for="emailUserId">Email</label>
                        <input name="emailUser" type="text" id="emailUserId" placeholder="Email" class="form-control" required/>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Añadir usuario</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- // Modal new contact-->
<!-- Modal search-->
<div class="modal fade" id="search_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method='post' action='show_search.php' role="form">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Buscar por nombre</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="nameSearchId">Nombre</label>
                        <input name="nameSearch" type="text" id="nameSearchId" placeholder="Nombre" class="form-control"/>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- // Modal search-->


<!-- Jquery JS file -->
<script type="text/javascript" src="src/js/vendor/jquery-3.1.1.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="src/js/vendor/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="src/js/main.js"></script>

</body>
</html>
