<?php 

function permitirAcceso($tipo, $formulario){

	include('conexion.php');

	$sql="SELECT * FROM `privilegio` WHERE `tipoUsuario`='$tipo' and `formulario`='$formulario'";

	$resultado=$conexion->query($sql);
	if ($resultado->num_rows>0){
		return true;
	}else{
		return false;
	}

}

?>