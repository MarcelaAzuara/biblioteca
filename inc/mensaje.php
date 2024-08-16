
<link rel="stylesheet"href="css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"integrity="sha384-7+zCNj/
Iq395w0160MtfsKbZ9ccEh31e0z1HGyDuCQ6wgny JNSYdrPa03rtR1zdB"crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"integrity="
sha384-QJHtvGhmr9x0IpI6YVutG+2Q0K9T+ZnN4kzFN1RtK3zEFEIsxhlmW15/YESVpZ13"crossorigin="anonymous"></script>

<script src="js/bootstrap.min.js"></script>
<?php

function mensaje ($mensaje, $pagina, $imagen){

	echo " 
	<script>
	$(document).ready(function(){
		$('#myModal').modal('show');
	});
	</script>


	 ";

echo " 


<div class='modal' tabindex='-1' id='myModal' data-bs-backdrop='static' data-bs-keyboard='false'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title'>Mensaje de Alerta</h5>
      </div>

      <div class='modal-body'>
      <center>
      <img src='Imagenes/".$imagen."'>
        <p>".$mensaje."</p> </center>
      </div>

      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal' onclick='regresarPaginaAnterior()'>Close</button>
      </div>
    </div>
  </div>
</div>

<script>
 function regresarPaginaAnterior(){
 	window.open('".$pagina."', '_self');
 }
</script>

";
 }


?>