<?php include 'header.php'; ?>
<?php
if (!isset($_REQUEST['cod']) || (!isset($_SESSION['usuario']))){
  mysqli_close($conexion);
  header ("Location: medicos.php");
  exit();
}
?>
<div class="container">
  <br><br>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
      <?php
        require_once 'conexion.php';

        $sql = "SELECT Num_Colegiado, Nom_Medico, Apell_Medico, Especialidad, Antiguedad FROM medicos WHERE Num_Colegiado='" . $_REQUEST['cod'] . "';";
        $result = $conexion->query($sql);

        if ($result->num_rows > 0) {
            ?>
            <table class="table table-striped table-hover table-bordered">
              <thead>
                <tr>
                  <th>Imagen</th>
                  <th>Núm Colegiado</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Especialidad</th>
                  <th>Antigüedad</th>
                </tr>
              </thead>
              <tbody>
            <?php
             while($row = $result->fetch_assoc()) {
               ?>
              <form class="form-group" action="modificarmedicos2.php" method="post" enctype="multipart/form-data">

                <tr>
                  <td style="vertical-align:middle"><input type="file" name="fileToUpload" id="fileToUpload">
                  <input type="hidden" value="Upload Image" name="submit"></td>
                  <td style="vertical-align:middle"><div><?php echo $row["Num_Colegiado"] ?></div> <input type="hidden" name="Num_Colegiado" value="<?php echo $row["Num_Colegiado"] ?>" class="disabled"> </td>
                  <td style="vertical-align:middle"> <input class="form-control" type="text" name="Nom_Medico" value="<?php echo $row["Nom_Medico"] ?>"> </td>
                  <td style="vertical-align:middle"> <input class="form-control" type="text" name="Apell_Medico" value="<?php echo $row["Apell_Medico"] ?>"> </td>
                  <td style="vertical-align:middle"> <input class="form-control" type="text" name="Especialidad" value="<?php echo $row["Especialidad"] ?>"> </td>
                  <td style="vertical-align:middle"> <input class="form-control" type="text" name="Antiguedad" value="<?php echo $row["Antiguedad"] ?>"> </td>

                  <?php
                  if (isset($_SESSION['usuario'])){
                    ?>
                      <td><input type="submit" name="" value="Aceptar" class="btn btn-primary confirmar"></td>
                      <td><a href="pacientes.php" class="btn btn-danger">Cancelar</a></td>
                    <?php
                   }
                  ?>
                </tr>
               <?php
             }
            ?>
              </form>
              </tbody>
            </table>

            <?php
        } else {
             echo "0 resultados";
        }
      ?>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
