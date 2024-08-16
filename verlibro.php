<?php 
session_start();
include('inc/mensaje.php');
include('inc/conexion.php');
include('inc/privilegio.php');

if (permitirAcceso($_SESSION['tipoUsuario'], 'verLibro')) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Ver Libro</title>
</head>
<body>
	
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <br>
                <h1 align="center">Ver información de Libro</h1>
                <br><br>

                <?php
                    include('inc/mensaje.php');
                    include('inc/conexion.php');
                    $clave=$_REQUEST['clave'];

                    $sql="SELECT * FROM `libro` WHERE `claveLibro` = '$clave'";

                    $consulta = $conexion->query($sql);
                    //De ser necesario cambiar filas 
                    if($fila=mysqli_fetch_array($consulta)){
                        echo "<h3>Clave Libro: ".$fila[1]. "</h3>";echo'<br>';
                        echo "<h3>Titulo: ".$fila[2]. "</h3>";echo'<br>';
                        echo "<h3>Nombre de Autor: ".$fila[3]. "</h3>";echo'<br>';
                        echo "<h3>Apellido Paterno: ".$fila[4]. "</h3>";echo'<br>';
                        echo "<h3>Apellido Materno: ".$fila[5]. "</h3>";echo'<br>';
                        echo "<h3>Clasificación: ".$fila[0]. "</h3>";echo'<br>';
                        echo "<h3>Editorial: ".$fila[6]. "</h3>";echo'<br>';
                    }
                ?>
                <br><br>
                <p align="center"><button style="box-shadow: 11px 8px 11px -4px rgba(0,0,0,0.44);-webkit-box-shadow: 11px 8px 11px -4px rgba(0,0,0,0.44);-moz-box-shadow: 11px 8px 11px -4px rgba(0,0,0,0.44);" class="btn btn-danger" onclick="location.href='informacionLibro.php'">Cerrar</button></p>


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