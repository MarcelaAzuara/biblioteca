<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css">

	<title>INICIO</title>

	<style>
		img{
			width: 90px;
			height: 90px;
		}

		.login-page
{
  background-color:#e5e7ed
}
.login-page main
{
  width:100%;
  max-width:460px;
  margin:8% auto 5%
}
.login-block
{
  background-color:#fff;
  padding:60px;
  -webkit-box-shadow:0 3px 50px 0 rgba(0,0,0,.1);
  box-shadow:0 3px 50px 0 rgba(0,0,0,.1);
  text-align:center;
  border-radius:5px
}
.login-block h1,.login-block h6
{
  font-family:Open Sans,sans-serif;
  color:#96a2b2;
  letter-spacing:1px
}
.login-block h1
{
  font-size:22px;
  margin-bottom:60px;
  margin-top:40px
}
.login-block h6
{
  font-size:11px;
  text-transform:uppercase;
  margin-top:0
}
.login-block .form-group
{
  margin-top:15px;
  margin-bottom:15px;
}
.login-block .form-control,.login-block .form-control:focus,.login-block .input-group-addon,.login-block .input-group-addon:focus
{
  background-color:transparent;
  border:none;
}
.login-block .form-control
{
  font-size:17px;
  border-radius:0px;
}
.login-block input:-webkit-autofill
{
  -webkit-box-shadow:0 0 0 1000px #fff inset;
  -webkit-text-fill-color:#818a91;
  -webkit-transition:none;
  -o-transition:none;
  transition:none;
}
.login-block .input-group-addon
{
  color:#29aafe;
  font-size:19px;
  opacity:.5
}
.login-block .btn-block
{
  margin-top:30px;
  padding:15px;
  background:#29aafe;
  border-color:#29aafe;
}
.login-block .hr-xs
{
  margin-top:5px;
  margin-bottom:5px
}
.login-footer
{
  margin-top:60px;
  opacity:.5;
  -webkit-transition:opacity .3s ease-in-out;
  -o-transition:opacity .3s ease-in-out;
  transition:opacity .3s ease-in-out
}
.login-footer:hover
{
  opacity:1
}
.login-links
{
  padding:15px 5px 0;
  font-size:13px;
  color:#96a2b2
}
.login-links:after
{
  content:'';
  display:table;
  clear:both
}
.login-links a
{
  color:#96a2b2;
  opacity:.9
}
.login-links a:hover
{
  color:#29aafe;
  opacity:1
}
@media (max-width:767px)
{
  .login-page main
  {
    position:static;
    top:auto;
    left:auto;
    -webkit-transform:none;
    -o-transform:none;
    transform:none;
    padding:30px 15px
  }
  .login-block{padding:20px}}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.rss:hover
{
  background-color:#f26522
}
.social-icons a.google-plus:hover
{
  background-color:#dd4b39
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}

	</style>

</head>
<body>
		
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
     <a class="navbar-brand" href="index.php">INICIO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
           <a class="nav-link" href="somos.php">QUIENES SOMOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">LOGIN</a>
        </li>
          <ul >
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


<br>
	<body class="login-page">
    <main>
      <div class="login-block">
        <img src="Imagenes/ususario.png">
        <h1>Iniciar sesión</h1>

        <form action="validar.php" name="login" method="get">            
          <hr class="hr-xs">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope ti-email"></i></span>
              <input type="email" class="form-control" id="usuario" name="usuario" placeholder="Correo Electronico" required>
            </div>
          </div>
          
          <hr class="hr-xs">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock ti-unlock"></i></span>
              <input type="password" class="form-control" id="clave" name="clave" placeholder="Contraseña" maxlength="10" required>
            </div>
          </div>

          <input type="submit" class="btn btn-primary" name="enviar" value="Loguearse">

          <div class="login-footer">
            <h6>Iniciar Sesión</h6>
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>

        </form>
      </div>

      <div class="login-links">
        <p class="text-center"><a class="txt-brand" href="user-login.html">Login</a></p>
      </div>

    </main>

<br><br>

</body>
</html>