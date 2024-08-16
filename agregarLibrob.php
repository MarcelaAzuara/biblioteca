<?php 
session_start();
include('inc/mensaje.php');
include('inc/conexion.php');
include('inc/privilegio.php');

if (permitirAcceso($_SESSION['tipoUsuario'], 'agregarLibrob')) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Agregar Libro</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <br><br>
            <h1 align="center">Agregar Libro</h1>
            <br>
            <form action="metodosUsuario.php" name="agregar" method="post">
                <input type="hidden" name="opcion" value="18">
                <div class="form-group">
                    <label for="nombre">Clave Libro</label>
                    <input type="text" class="form-control" id="clave" name="clave" required pattern="[0-9]+">
                </div>

                <div class="form-group">
                    <label for="paterno">Titulo</label>
                    <input type="text" class="form-control" id="titu" name="titu" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]+">
                </div>

                 <div class="form-group">
                    <label for="paterno">Nombre Autor</label>
                    <input type="text" class="form-control" id="nomauto" name="nomauto" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]+">
                </div>

                 <div class="form-group">
                    <label for="paterno">Ap Paterno</label>
                    <input type="text" class="form-control" id="appat" name="appat" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]+">
                </div>

                 <div class="form-group">
                    <label for="paterno">Ap Materno</label>
                    <input type="text" class="form-control" id="apmat" name="apmat" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]+">
                </div>

                <div class="form-group">
                    <label for="tipo">Clasificaión</label>
                    <select class="form-control" id="clasi" name="clasi">
                        <option value="Filosofía">Filosofía</option>
                        <option value="Artes">Artes</option>
                        <option value="Matematicas y Ciencias">Matematicas y Ciencias</option>
                    </select>
                </div>
                <?php 
                include('inc/conexion.php');

                $sql="SELECT * FROM `editorial` ORDER BY  'nomEditorial'";

                $consulta = $conexion -> query($sql);
                ?>

                <div class="form-group">
                    <label for="tipo">Editorial</label>
                    <select class="form-control" id="edito" name="edito">
                    <?php 
                        while ($fila=mysqli_fetch_array($consulta)){
                            echo "<option value='".$fila[0]."'>".$fila[1]."</option>";
                        }
                    ?>
                    </select>
                </div>


                <br><br>
                <p>
                    <input style="box-shadow: 11px 8px 11px -4px rgba(0,0,0,0.44);-webkit-box-shadow: 11px 8px 11px -4px rgba(0,0,0,0.44);-moz-box-shadow: 11px 8px 11px -4px rgba(0,0,0,0.44);" type="submit" class="btn btn-primary" name="enviar" value="Agregar Libro">
                    <button style="box-shadow: 11px 8px 11px -4px rgba(0,0,0,0.44);-webkit-box-shadow: 11px 8px 11px -4px rgba(0,0,0,0.44);-moz-box-shadow: 11px 8px 11px -4px rgba(0,0,0,0.44);" class="btn btn-danger" onclick="location.href='informacionLibrob.php'">Cerrar</button>
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