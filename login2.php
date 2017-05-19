<?php

  $usuario = $_POST['usuario'];
  $password = $_POST['pass'];

  if(empty ($usuario) || empty($password)) {
  	header("Location: login.php?error");
  	exit();
	}

  include 'conexion.php';

  $resultado = mysqli_query($conexion, " SELECT nombre,pass FROM personal_administrativo WHERE nombre = '" . $usuario . "'" );

  if ($row = mysqli_fetch_array($resultado)){
    if ($row['pass'] == $password){
      // echo "adelante";
      session_start();
      $_SESSION['usuario'] = $usuario;
      mysqli_close($conexion);
      header ("Location: index.php");
      exit();
    } else {
      mysqli_close($conexion);
      header ("Location: login.php?error");
      exit();
      }
  } else {
    mysqli_close($conexion);
    header ("Location: login.php?error");
    exit();
  }

  // include 'conexion.php';
  //
  // session_start();
  // $_SESSION['login_user'] = $usuario;
  // echo $_SESSION['login_user'];
   mysqli_close($conexion);
?>
