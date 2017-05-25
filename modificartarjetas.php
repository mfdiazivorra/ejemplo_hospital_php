<?php include 'header.php'; ?>
<?php
if (!isset($_REQUEST['cod']) || (!isset($_SESSION['usuario']))){
  mysqli_close($conexion);
  header ("Location: paneldecontrol.php");
  exit();
}
?>
<div class="container">
  <br><br>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
      <?php
        require_once 'conexion.php';

        $sql = "SELECT imagen, h3, p FROM frontpage_cards WHERE cod_card='" . $_REQUEST['cod'] . "';";
        $result = $conexion->query($sql);

        if ($result->num_rows > 0) {
            ?>
            <table class="table table-striped table-hover table-bordered">
              <thead>
                <tr>
                  <th>Imagen</th>
                  <th>Título</th>
                  <th>Texto</th>
                </tr>
              </thead>
              <tbody>
            <?php
             while($row = $result->fetch_assoc()) {
               ?>
              <form class="form-group" action="modificartarjetas2.php?cod=<?php echo $_REQUEST['cod'] ?>" method="post" enctype="multipart/form-data">

                <tr>
                  <td style="vertical-align:middle"><input type="file" name="fileToUpload" id="fileToUpload">
                  <input type="hidden" value="Upload Image" name="submit"></td>
                  <td style="vertical-align:middle"> <input class="form-control" type="text" name="h3" value="<?php echo $row["h3"] ?>"> </td>
                  <td style="vertical-align:middle"> <input class="form-control" type="text" name="p" value="<?php echo $row["p"] ?>"> </td>

                  <?php
                  if (isset($_SESSION['usuario'])){
                    ?>
                      <td><input type="submit" name="" value="Aceptar" class="btn btn-primary confirmar"></td>
                      <td><a href="paneldecontrol.php" class="btn btn-danger">Cancelar</a></td>
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
