<?php
include('inc/mensaje.php');
include('inc/conexion.php');

$opcion=$_REQUEST['opcion'];

switch($opcion){
    case "1":   
            $correo=$_REQUEST['correo'];
            $sql = "SELECT * FROM `login`, usuario WHERE login.email='$correo' and usuario.habilitado='Si'";

            $consulta = $conexion->query($sql);
            if($fila=mysqli_fetch_array($consulta)){
                correo($fila[0],$fila[1]);
            }else{
                mensaje("Correo no registrado","index.php","error.png");
            }
            break;
    case "2":
            $nom=$_REQUEST['nom'];
            $ap=$_REQUEST['apaterno'];
            $am=$_REQUEST['amaterno'];
            $fecha=$_REQUEST['fechar'];
            $tel=$_REQUEST['tel'];
            $correo=$_REQUEST['usuario'];
            $tipo=$_REQUEST['tipo'];

            $clave=generar();

            //AGREGAR PROCEDIMIENTO ALMACENADO AGREGAR USUARIO

            $sql="call agregarUsuario('$correo','$clave','$tipo','$nom','$ap','$am','$fecha','$tel','Si',@res)";

            $consulta=$conexion->query($sql);

            if($consulta>0){
                mensaje("Registro dado de alta","informacionUsuario.php","ok.png");
            }else{
                mensaje("Error","informacionUsuario.php","error.png");
            }

            break;
    case "3":
            $nom=$_REQUEST['nom'];
            $ap=$_REQUEST['apaterno'];
            $am=$_REQUEST['amaterno'];
            $tel=$_REQUEST['tel'];
            $tipo=$_REQUEST['tipo'];
            $correo=$_REQUEST['correo'];

            $clave=generar();
            //AGREGAR PROCEDIMIENTO ALMACENADO ACTUALIZAR USUARIO
            $sql="call actualizarUsuario('$correo','$tipo','$nom','$ap','$am','$tel',@res)";

            $consulta=$conexion->query($sql);

            if($consulta>0){
                mensaje("Registro Actualizado","informacionUsuario.php","ok.png");
            }else{
                mensaje("Error","informacionUsuario.php","error.png");
            }

            break;
    case "4":
            $correo =$_REQUEST['correo'];

             //AGREGAR PROCEDIMIENTO INHABILITAR USUARIO 
             $sql="call inhabilitarUsuario('$correo',@res)";

             $consulta=$conexion->query($sql);
 
             if($consulta>0){
                 mensaje("Usuario Inhabilidato","informacionUsuario.php","ok.png");
             }else{
                 mensaje("Error","informacionUsuario.php","error.png");
             }
 
             break;
    case "5":
            $correo =$_REQUEST['correo'];

            //AGREGAR PROCEDIMIENTO HABILITAR USUARIO 
            $sql="call habilitarUsuario('$correo',@res)";

            $consulta=$conexion->query($sql);

            if($consulta>0){
                mensaje("Usuario Habilidato","informacionUsuario.php","ok.png");
            }else{
                mensaje("Error","informacionUsuario.php","error.png");
            }

            break;
    case "6":
    
            $clave=generar();

            $correo =$_REQUEST['correo'];
            //AGREGAR PROCEDIMIENTO ELIMINAR USUARIO 
            $sql="call eliminarUsuario('$correo',@res)";
            $consulta=$conexion->query($sql);

            if($consulta>0){
                mensaje("Usuario ELiminado","informacionUsuario.php","ok.png");
            }else{
                mensaje("Error","informacionUsuario.php","error.png");
            }

            break;
    case "7":
            $id=$_REQUEST['id'];
            $edi=$_REQUEST['editorial'];
            $tel=$_REQUEST['telf'];
            $correo =$_REQUEST['correo'];

            //AGREGAR PROCEDIMIENTO ACTUALIZAR DATOS EDITORIAL 
            $sql="call actualizarEditorial('$id','$edi','$correo','$tel',@res)";

            $consulta=$conexion->query($sql);

            if($consulta>0){
                mensaje("Editorial Actualizada","editorial.php","ok.png");
            }else{
                mensaje("Error","editorial.php","error.png");
            }

            break;
    case "8":
            $id=$_REQUEST['id'];
        
            //AGREGAR PROCEDIMIENTO ELIMINAR EDITORIAL 
            $sql="call eliminarEditorial('$id',@res)";

            $consulta=$conexion->query($sql);

            if($consulta>0){
                mensaje("Editorial Eliminada","editorial.php","ok.png");
            }else{
                mensaje("Error","editorial.php","error.png");
            }

            break;
    case "9":

            $edi=$_REQUEST['editorial'];
            $tel=$_REQUEST['telf'];
            $correo =$_REQUEST['correo'];
        
            //AGREGAR PROCEDIMIENTO AGREGAR EDITORIAL 
            $sql="call agregarEditorial('$edi','$correo','$tel',@res)";

            $consulta=$conexion->query($sql);

            if($consulta>0){
                mensaje("Editorial Agregada","editorial.php","ok.png");
            }else{
                mensaje("Error","editorial.php","error.png");
            }

            break;
    case "10":

            $claveL=$_REQUEST['clave'];
            $titulo=$_REQUEST['titu'];
            $nomAuto=$_REQUEST['nomauto'];
            $apAuto=$_REQUEST['appat'];
            $amAuto=$_REQUEST['apmat'];
            $clasificacion=$_REQUEST['clasi'];
            $idEdit=$_REQUEST['edito'];
           
        
            //AGREGAR PROCEDIMIENTO AGREGAR LIBRO 
            $sql="call agregarLibro('$clasificacion','$claveL','$titulo','$nomAuto','$apAuto','$amAuto','$idEdit',@res)";

            $consulta=$conexion->query($sql);

            if($consulta>0){
                mensaje("Libro Agregado","informacionLibro.php","ok.png");
            }else{
                mensaje("Error","informacionLibro.php","error.png");
            }

            break;
    case "11":

            $claveL=$_REQUEST['clave'];
            $titulo=$_REQUEST['titu'];
            $nomAuto=$_REQUEST['nomauto'];
            $apAuto=$_REQUEST['appat'];
            $amAuto=$_REQUEST['apmat'];
            $clasificacion=$_REQUEST['clasi'];
            $idEdit=$_REQUEST['edito'];
           
        
            //AGREGAR PROCEDIMIENTO ACTUALIZAR LIBRO 
            $sql="call actualizarLibro('$claveL','$clasificacion','$titulo','$nomAuto','$apAuto','$amAuto','$idEdit',@res)";

            $consulta=$conexion->query($sql);

            if($consulta>0){
                mensaje("Libro Actualizado","informacionLibro.php","ok.png");
            }else{
                mensaje("Error","informacionLibro.php","error.png");
            }

            break;
    case "12":
            $clave=$_REQUEST['clave'];
    
            //AGREGAR PROCEDIMIENTO ELIMINAR EDITORIAL 
            $sql="call eliminarLibro('$clave',@res)";

            $consulta=$conexion->query($sql);

            if($consulta>0){
                mensaje("Libro Eliminado","informacionLibro.php","ok.png");
            }else{
                mensaje("Error","informacionLibro.php","error.png");
            }

            break;
    case "13":
            $clave=$_REQUEST['claveL'];
            $correo=$_REQUEST['correo'];
            $fecha=$_REQUEST['fechar'];
    
            //AGREGAR PROCEDIMIENTO AGREGAR PRESTAMO 
            $sql="call agregarPrestamo('','$fecha','$clave','$correo',@res)";

            $consulta=$conexion->query($sql);

            if($consulta>0){
                mensaje("Prestamo Agregado","prestamo.php","ok.png");
            }else{
                mensaje("Error","prestamo.php","error.png");
            }

            break;
    case "14":
            $clave=$_REQUEST['clave'];
            $fecha=$_REQUEST['fecha'];
    
            //AGREGAR PROCEDIMIENTO DEVOLUCION
            $sql="call hacerDevolucion('$clave','$fecha',@res)";

            $consulta=$conexion->query($sql);

            if($consulta>0){
                mensaje("Libro Devuelto","prestamo.php","ok.png");
            }else{
                mensaje("Error","prestamo.php","error.png");
            }

            break;
    case "15":
            $clave=$_REQUEST['clave'];
    
            //AGREGAR PROCEDIMIENTO ELIMNAR DEVOLU
            $sql="call eliminarDevolucion('$clave',@res)";

            $consulta=$conexion->query($sql);

            if($consulta>0){
                mensaje("Eliminado","prestamo.php","ok.png");
            }else{
                mensaje("Error","prestamo.php","error.png");
            }

            break;
     case "16":

            $claveL=$_REQUEST['clave'];
            $titulo=$_REQUEST['titu'];
            $nomAuto=$_REQUEST['nomauto'];
            $apAuto=$_REQUEST['appat'];
            $amAuto=$_REQUEST['apmat'];
            $clasificacion=$_REQUEST['clasi'];
            $idEdit=$_REQUEST['edito'];
           
        
            //AGREGAR PROCEDIMIENTO ACTUALIZAR LIBRO 
            $sql="call actualizarLibro('$claveL','$clasificacion','$titulo','$nomAuto','$apAuto','$amAuto','$idEdit',@res)";

            $consulta=$conexion->query($sql);

            if($consulta>0){
                mensaje("Libro Actualizado","informacionLibrob.php","ok.png");
            }else{
                mensaje("Error","informacionLibrob.php","error.png");
            }

            break;
    case "17":
            $clave=$_REQUEST['clave'];
    
            //AGREGAR PROCEDIMIENTO ELIMINAR EDITORIAL 
            $sql="call eliminarLibro('$clave',@res)";

            $consulta=$conexion->query($sql);

            if($consulta>0){
                mensaje("Libro Eliminado","informacionLibrob.php","ok.png");
            }else{
                mensaje("Error","informacionLibrob.php","error.png");
            }

            break;
    case "18":

            $claveL=$_REQUEST['clave'];
            $titulo=$_REQUEST['titu'];
            $nomAuto=$_REQUEST['nomauto'];
            $apAuto=$_REQUEST['appat'];
            $amAuto=$_REQUEST['apmat'];
            $clasificacion=$_REQUEST['clasi'];
            $idEdit=$_REQUEST['edito'];
           
        
            //AGREGAR PROCEDIMIENTO AGREGAR LIBRO 
            $sql="call agregarLibro('$clasificacion','$claveL','$titulo','$nomAuto','$apAuto','$amAuto','$idEdit',@res)";

            $consulta=$conexion->query($sql);

            if($consulta>0){
                mensaje("Libro Agregado","informacionLibrob.php","ok.png");
            }else{
                mensaje("Error","informacionLibrob.php","error.png");
            }

            break;
    case "19":
            $id=$_REQUEST['id'];
            $edi=$_REQUEST['editorial'];
            $tel=$_REQUEST['telf'];
            $correo =$_REQUEST['correo'];

            //AGREGAR PROCEDIMIENTO ACTUALIZAR DATOS EDITORIAL 
            $sql="call actualizarEditorial('$id','$edi','$correo','$tel',@res)";

            $consulta=$conexion->query($sql);

            if($consulta>0){
                mensaje("Editorial Actualizada","editorialb.php","ok.png");
            }else{
                mensaje("Error","editorialb.php","error.png");
            }

            break;
    case "20":

            $edi=$_REQUEST['editorial'];
            $tel=$_REQUEST['telf'];
            $correo =$_REQUEST['correo'];
        
            //AGREGAR PROCEDIMIENTO AGREGAR EDITORIAL 
            $sql="call agregarEditorial('$edi','$correo','$tel',@res)";

            $consulta=$conexion->query($sql);

            if($consulta>0){
                mensaje("Editorial Agregada","editorialb.php","ok.png");
            }else{
                mensaje("Error","editorialb.php","error.png");
            }

            break;
    case "21":
            $id=$_REQUEST['id'];
        
            //AGREGAR PROCEDIMIENTO ELIMINAR EDITORIAL 
            $sql="call eliminarEditorial('$id',@res)";

            $consulta=$conexion->query($sql);

            if($consulta>0){
                mensaje("Editorial Eliminada","editorialb.php","ok.png");
            }else{
                mensaje("Error","editorialb.php","error.png");
            }

            break;
    case "22":
            $clave=$_REQUEST['clave'];
            $fecha=$_REQUEST['fecha'];
    
            //AGREGAR PROCEDIMIENTO DEVOLUCION
            $sql="call hacerDevolucion('$clave','$fecha',@res)";

            $consulta=$conexion->query($sql);

            if($consulta>0){
                mensaje("Libro Devuelto","prestamob.php","ok.png");
            }else{
                mensaje("Error","prestamob.php","error.png");
            }

            break;
    case "23":
            $clave=$_REQUEST['claveL'];
            $correo=$_REQUEST['correo'];
            $fecha=$_REQUEST['fechar'];
    
            //AGREGAR PROCEDIMIENTO AGREGAR PRESTAMO 
            $sql="call agregarPrestamo('','$fecha','$clave','$correo',@res)";

            $consulta=$conexion->query($sql);

            if($consulta>0){
                mensaje("Prestamo Agregado","prestamob.php","ok.png");
            }else{
                mensaje("Error","prestamob.php","error.png");
            }

            break;
    case "24":
            $clave=$_REQUEST['clave'];
    
            //AGREGAR PROCEDIMIENTO ELIMNAR DEVOLU
            $sql="call eliminarDevolucion('$clave',@res)";

            $consulta=$conexion->query($sql);

            if($consulta>0){
                mensaje("Eliminado","prestamob.php","ok.png");
            }else{
                mensaje("Error","prestamob.php","error.png");
            }

            break;
}// fin del switch

function correo($correo,$clave){
    $msg="Usuario:".$correo. "\n Contraseña: ".$clave;
    mail($correo, "Biblioteca Municipal", $msg);
    mensaje("Contraseña enviada","login.php","ok.png");
}

function generar(){
    $caracteres='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $longpalabra=10;
    for($pass='', $n=strlen($caracteres)-1; strlen($pass) < $longpalabra ; ) {
      $x = rand(0,$n);
      $pass.= $caracteres[$x];
    }
     return $pass;
}


?>

<style type="text/css">
	img{
		width: 90px;
		height: 90px;
	}
</style>