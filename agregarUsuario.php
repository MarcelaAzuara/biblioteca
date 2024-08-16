<?php 
session_start();
include('inc/mensaje.php');
include('inc/conexion.php');
include('inc/privilegio.php');

if (permitirAcceso($_SESSION['tipoUsuario'], 'agregarUsuario')) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Agregar Usuario</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <br><br>
            <h1 align="center">Agregar Usuario</h1>
            <br>
            <form action="metodosUsuario.php" name="agregar" method="post">
                <input type="hidden" name="opcion" value="2">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nom" name="nom" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]+">
                </div>

                <div class="form-group">
                    <label for="paterno">Ap. Paterno</label>
                    <input type="text" class="form-control" id="apaterno" name="apaterno"  pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]+">
                </div>

                <div class="form-group">
                    <label for="materno">Ap. Materno</label>
                    <input type="text" class="form-control" id="amaterno" name="amaterno"  pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]+">
                </div>

                <div class="form-group">
                    <label for="fechar">Fecha de Registro</label>
                    <input type="date" class="form-control" id="fechar" name="fechar">
                </div>

                <div class="form-group">
                    <label for="tel">Telefono</label>
                    <input type="text" class="form-control" id="tel" name="tel" maxlength="10"  pattern="[0-9]+">
                </div>

                <div class="form-group">
                    <label for="fechar">Email</label>
                    <input type="email" class="form-control" id="usuario" name="usuario">
                </div>

                <div class="form-group">
                    <label for="tipo">Tipo de Usuario</label>
                    <select class="form-control" id="tipo" name="tipo">
                        <option value="Administrador">Administrador</option>
                        <option value="Bibliotecario">Bibliotecario</option>
                        <option value="Usuario">Usuario</option>
                    </select>
                </div>
                <br><br>
                <p>
                    <input type="submit" class="btn btn-primary" name="enviar" value="Agregar Usuario">
                    <button class="btn btn-danger" onclick="location.href='informacionUsuario.php'">Cerrar</button>
                </p>
            </form>
        </div>
    </div>
</div>
	
	

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>

<?php 
}

else{
    header('Location:index.php');
}


?>