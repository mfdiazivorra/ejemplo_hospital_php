<?php

  if (!isset($_POST['Num_Colegiado'])) {
    mysqli_close($conexion);
    header ("Location: medicos.php");
    exit();
  }
  require_once 'conexion.php';

  $query = "INSERT INTO medicos (Num_Colegiado, Nom_Medico, Apell_Medico, Especialidad, Antiguedad)
  VALUES ('" . $_POST['Num_Colegiado'] . "',
   '".$_POST['Nom_Medico']."',
   '".$_POST['Apell_Medico']."',
   '".$_POST['Especialidad']."',
   '".$_POST['Antiguedad']."'
    )";
  mysqli_query($conexion, $query);
  mysqli_close($conexion);
  header ("Location: medicos.php");
?>
