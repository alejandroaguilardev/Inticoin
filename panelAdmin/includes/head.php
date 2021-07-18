<?php 
  session_start();
  if($_SESSION['usuario']==""){
    header("Location: index");
  }
 
  if (isset($_SESSION['usuario'])) {
        //asignar a variable
        $usernameSesion = $_SESSION['usuario'];
        //asegurar que no tenga "", <, > o &
        $usuario = htmlspecialchars($usernameSesion);   
  }     
  include('php/conex_bd.php');
 ?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inticoin | Administrador</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="css/_all-skins.min.css">
  <link rel="stylesheet" href="css/estilos.css"> 

  <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">

</head>
<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Inticoin</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Inticoin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li>
            <a href="php/sesion/cerrar_sesion" class="pull-left">Cerrar Sesión </a>
        </ul>
    </div>      
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" >
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="img/user.png" class="img-circle img-responsive" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?php echo  $usuario;?></p>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">PANEL DE NAVEGACIÓN</li>
        <li id="inicio">
          <a href="inicio">
            <i class="fa fa-home"></i>
            <span>INICIO</span>
          </a>
        </li>        
       <li id="noticias">
          <a href="noticias">
            <i class="fa fa-cog"></i>
            <span>NOTICIAS</span>
          </a>
        </li> 
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>



<div class="content-wrapper" style="padding: 30px;">
