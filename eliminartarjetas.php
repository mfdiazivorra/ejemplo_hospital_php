<?php
  session_start();
  if (!isset($_REQUEST['cod']) || (!isset($_SESSION['usuario']))) {
    mysqli_close($conexion);
    header ("Location: paneldecontrol.php");
    exit();
  }
  require_once 'conexion.php';
  $query = "SELECT imagen FROM frontpage_cards WHERE cod_card = '" . $_REQUEST['cod'] . "'";
  mysqli_query($conexion, $query);
  $result = $conexion->query($query);
  if ($result->num_rows > 0) $row = $result->fetch_assoc();
  $imagen = $row["imagen"];

  $query = "DELETE FROM frontpage_cards WHERE cod_card = '" . $_REQUEST['cod'] . "'";
  if (mysqli_query($conexion, $query)) unlink($image);
  mysqli_close($conexion);
  header ("Location: paneldecontrol.php");
?>
