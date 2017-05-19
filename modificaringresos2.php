<?php
  if (!isset($_POST['Num_Ingreso'])) {
    mysqli_close($conexion);
    header ("Location: ingresos.php");
    exit();
  }
  require_once 'conexion.php';
  $query = "
    UPDATE ingresos
    SET FIngreso = '" .$_POST['FIngreso'] . "',
         FAlta = '" .$_POST['FAlta'] . "',
         Planta = '" .$_POST['Planta'] . "',
         Cama = '" .$_POST['Cama'] . "',
         Alergico = " . $_POST['Alergico'] . ",
         Diagnostico = '" .$_POST['Diagnostico'] . "',
         Coste = '" .$_POST['Coste'] . "',
         Num_Historial = '" .$_POST['Num_Historial'] . "',
         Num_Colegiado = '" .$_POST['Num_Colegiado'] . "'
    WHERE Num_Ingreso = '" .$_POST['Num_Ingreso'] . "';
  ";
  mysqli_query($conexion, $query);
  mysqli_close($conexion);
  // echo $query;
  header ("Location: ingresos.php");
?>
