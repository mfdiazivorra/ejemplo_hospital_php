<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Healthstone Community Hospital</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Healthstone Community Hospital</a>
        </div>
        <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
            <li><a href="pacientes.php">Pacientes</a></li>
            <li><a href="ingresos.php">Ingresos</a></li>
            <li><a href="medicos.php">Médicos</a></li>
            <?php
              session_start();
              if (isset($_SESSION['usuario']))
                echo '<li><a href="paneldecontrol.php">Panel de Control</a></li>';
            ?>
          </ul>
          <!-- <a class="navbar-brand navbar-right bienvenido" href="index.php">Healthstone Community Hospital</a> -->
          <!-- falta solucionar el estilo del mensaje de bienvenido -->
          <ul class="nav navbar-nav navbar-right">
            <?php
              if (!isset($_SESSION['usuario'])) {
                echo '<li><a href="login.php">Login</a></li>';
              } else {
                echo '<li><div class="navbar-brand bienvenido">Bienvenido '.$_SESSION['usuario'].' </div></li>';
                echo '<li><a href="logout.php">Logout</a></li>';
              }
            ?>
          </ul>
        </div>
      </div>
    </nav>
