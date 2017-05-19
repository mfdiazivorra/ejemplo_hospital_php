<?php

  if (!isset($_POST['Num_Ingreso'])) {
    mysqli_close($conexion);
    header ("Location: ingresos.php");
    exit();
  }
  require_once 'conexion.php';

  $query = "INSERT INTO ingresos (Num_Ingreso, FIngreso, FAlta, Planta, Cama, Alergico, Diagnostico, Coste, Num_Historial, Num_Colegiado)
  VALUES ('" . $_POST['Num_Ingreso'] . "',
   '".$_POST['FIngreso']."',
   '".$_POST['FAlta']."',
   '".$_POST['Planta']."',
   '".$_POST['Cama']."',
   ".$_POST['Alergico'].",
   '".$_POST['Diagnostico']."',
   '".$_POST['Coste']."',
   '".$_POST['Num_Historial']."',
   '".$_POST['Num_Colegiado']."'
    )";
  mysqli_query($conexion, $query);
  mysqli_close($conexion);
  header ("Location: ingresos.php");
?>
