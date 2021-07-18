
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Inticoin- Iniciar Sesión</title>
  <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
<body style="background : -webkit-linear-gradient(left, #F9BD41 , #FAA700);
  background :    -moz-linear-gradient(left, #F9BD41 , #FAA700);
  background :      -o-linear-gradient(left, #F9BD41 , #FAA700);
  background :         linear-gradient(to right, #F9BD41 , #FAA700);">
  <div class="cont">
  <div class="demo">
    <div class="login">
      <center>
        <br><br><br><br>
        <img src="img/logo.png" style="width: 70%; padding: 10px;">
      </center>
      <form method="post" action="php/sesion/iniciar_sesion.php">
      <div class="login__form">
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
          <input type="text" class="login__input name" name="usuario" required placeholder="Usuario"/>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" class="login__input pass" name="contraseña" required placeholder="Contraseña"/>
        </div>
        <button type="submit" class="login__submit">Entrar</button>
        <p class="login__signup">No recuerdas tu contraseña? &nbsp;<a>click aquí</a></p>
      </div>
    </div>
    </form>
    <div class="app">
      <br><br><br><br><br>
      <br><br><br><br><br>
      <br><br><br><br><br>
      <h2>Iniciando sesión</h2>
      <center>
        <img class="animated infinite pulse" src="../img/favi.png" style="width: 50%; padding: 10px;" >
      </center>
    </div>
  </div>
</div>
  <script src='js/jquery.js'></script>

<?php 

  session_start();
  if($_SESSION['usuario']!=""){
    header("Location: inicio");
  }
 

?>
</body>
</html>
