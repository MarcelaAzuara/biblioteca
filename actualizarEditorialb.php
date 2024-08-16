<?php 
session_start();
include('inc/mensaje.php');
include('inc/conexion.php');
include('inc/privilegio.php');

if (permitirAcceso($_SESSION['tipoUsuario'], 'actualizarEditorialb')) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Actualizar Editorial</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">

        <?php
          include('inc/conexion.php');
          $correo=$_REQUEST['correo'];

          $sql="SELECT * FROM `editorial` WHERE `emailEditorial` ='$correo'";

          $consulta = $conexion->query($sql);
          if($fila=mysqli_fetch_array($consulta)){
        ?>
            <br><br>
            <h1 align="center">Actualizar Editorial</h1>
            <br><br>
            <form action="metodosUsuario.php" name="agregar" method="post">
                <input type="hidden" name="opcion" value="19">
                <input type="hidden" name="id" value="<?php echo $fila[0] ?>">
                <div class="form-group">
                    <label for="nombre">Editorial</label>
                    <input type="text" class="form-control" id="editorial" name="editorial" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]+" value="<?php echo $fila[1]  ?>">
                </div>

                <div class="form-group">
                    <label for="paterno">Email</label>
                    <input type="text" class="form-control" id="correo" name="correo" value="<?php echo $fila[2]  ?>">
                </div>

                <div class="form-group">
                    <label for="materno">Télefono</label>
                    <input type="text" class="form-control" id="telf" name="telf"   maxlength="10"  pattern="[0-9]+" value="<?php echo $fila[3]  ?>">
                </div>
                <br><br>
                <p>
                    <input type="submit" class="btn btn-primary" name="enviar" value="Actualizar Editorial">
                    <input readonly="readonly" class="btn btn-danger" onclick="location.href='editorialb.php'" value="Cerrar">
                </p>
            </form>


        </div>
    <?php
    }
    ?>

    
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