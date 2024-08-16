<?php

$conexion = new mysqli("localhost","root","","biblioteca");
if($conexion->connect_errno){
    echo "Fallo al conectar a Mysql: (".$conexion->connect_errno .") " . $conexion->connect_error;
}else{
    //echo "Conexion a Base de datos";
}

?>