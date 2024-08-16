<?php
session_start();
include('inc/mensaje.php');
include('inc/conexion.php');

$usuario = $_REQUEST['usuario'];
$clave = $_REQUEST['clave'];

$sql = "SELECT * FROM `login`, usuario WHERE  login.email=usuario.login_email and login.email='$usuario'and login.clave='$clave' and usuario.habilitado='Si'";

$consulta=$conexion->query($sql);

if($resultado=mysqli_fetch_array($consulta)){
	$_SESSION['tipoUsuario']=$resultado[2];
	$dato=$resultado[2];

	switch($dato){

		case 'Administrador':
				     header('Location:informacionUsuario.php');
				     break;
		case 'Bibliotecario':
					 header('Location:informacionLibrob.php');
					 break;
		case 'Usuario':
					 header('Location:listadoPrestamo.php');
					 break;
	}
}
else{
	mensaje('Revisar Usuario Contraseña','login.php','error.png');
}

?>
<style type="text/css">
	img{
		width: 90px;
		height: 90px;
	}
</style>