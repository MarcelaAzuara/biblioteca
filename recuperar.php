<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Recuperar Contraseña</title>
</head>
<body>
	
	<div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <br>
        <center>
          <h1>¿Olvidaste tu contraseña?</h1>

          <h3>Escribe el email que registraste</h3>
        </center>
        <br>
        <form action="metodosUsuario.php" name="recuperar" method="post">
          <input type="hidden" name="opcion" value="1">
          <div class="form-group">
            <label for="correo">Email</label>
            <input type="email" class="form-control" id="correo" name="correo" required>
          </div>
          <br>
          <center>
            <input type="submit" class="btn btn-primary" name="recuperar" id="Enviar">
            <button class="btn btn-danger" onclick="location.href='login.php'">Cancelar</button>
          </center>  
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