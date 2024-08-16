<?php 
session_start();
include('inc/mensaje.php');
include('inc/conexion.php');
include('inc/privilegio.php');

if (permitirAcceso($_SESSION['tipoUsuario'], 'editorial')) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Editorial</title>
</head>
<body>

    <body style="background-image: url(imagenes/fonAd1.jpg); background-repeat: no-repeat; background-size: cover; background-color: brown; background-attachment: fixed">

     <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="informacionUsuario.php">Usuario</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="libro.php">Libro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="editorial.php">Editorial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="prestamo.php">Prestamo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cerrarSesion.php">Cerras Sesión</a>
            </li>
          </ul>
          <span class="navbar-text">
          </span>
        </div>
      </div>
    </nav>
    
    <div class="container">
        <div class="row"> 
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <br><br>
                <h1 align="center">Información de Editorial</h1>
                <br>
                <p align="right"><button style="box-shadow: 11px 8px 11px -4px rgba(0,0,0,0.44);-webkit-box-shadow: 11px 8px 11px -4px rgba(0,0,0,0.44);-moz-box-shadow: 11px 8px 11px -4px rgba(0,0,0,0.44);" class="btn btn-primary" onclick="location.href='agregarEditorial.php'">Agregar Editorial</button></p>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Editorial</th>
                        <th scope="col">Email</th>
                        <th scope="col">Télefono</th>
                        <th scope="col">Actualizar</th>
                        <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                include('inc/conexion.php');
                $cuenta=0;

                $sql="SELECT * FROM `editorial`";
                $consulta=$conexion->query($sql);

                while($fila=mysqli_fetch_array($consulta)){
                    $cuenta++;
                    echo "<tr><td>". $fila[1] . "</td>";
                    echo "<td>". $fila[2] . "</td>";
                    echo "<td>". $fila[3] . "</td>";
                    echo "<td><a href='actualizarEditorial.php?correo=".$fila[2]."'><i class='fa fa-pencil' style='font-size:24px'></i></a></td>";
                    echo "<td><a href='metodosUsuario.php?id=".$fila[0]."&opcion=8'><i class='fa fa-trash-o' style='font-size:24px; color:red;'></i></a></td></tr>";

                }


                ?>
                </tbody>
                </table>
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