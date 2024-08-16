<?php 
session_start();
include('inc/mensaje.php');
include('inc/conexion.php');
include('inc/privilegio.php');

if (permitirAcceso($_SESSION['tipoUsuario'], 'prestamoA')) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Prestamo</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <br><br>
            <h1 align="center">PRESTAMO</h1>
            <br>
            <form action="metodosUsuario.php" name="agregar" method="post">
                <input type="hidden" name="opcion" value="23">
                <div class="form-group">
                    <label for="nombre">Clave Libro</label>
                    <input type="text" class="form-control" id="claveL" name="claveL" required >
                </div>

                <div class="form-group">
                    <label for="paterno">Email</label>
                    <input type="text" class="form-control" id="correo" name="correo" >
                </div>

                <div class="form-group">
                    <label for="fechar">Fecha de Registro</label>
                    <input type="date" class="form-control" id="fechar" name="fechar">
                </div>
                <br><br>
                <p>
                    <input style="box-shadow: 11px 8px 11px -4px rgba(0,0,0,0.44);-webkit-box-shadow: 11px 8px 11px -4px rgba(0,0,0,0.44);-moz-box-shadow: 11px 8px 11px -4px rgba(0,0,0,0.44);" type="submit" class="btn btn-primary" name="enviar" value="Agregar Prestamo">
                    <button style="box-shadow: 11px 8px 11px -4px rgba(0,0,0,0.44);-webkit-box-shadow: 11px 8px 11px -4px rgba(0,0,0,0.44);-moz-box-shadow: 11px 8px 11px -4px rgba(0,0,0,0.44);" class="btn btn-danger" onclick="location.href='prestamob.php'">Cerrar</button>
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