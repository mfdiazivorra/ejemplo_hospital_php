<?php include 'header.php'; ?>
<div class="container">
  <br><br>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
      <?php
        require_once 'conexion.php';

        $sql = "SELECT cod_card, imagen, h3, p FROM frontpage_cards;";
        $result = $conexion->query($sql);

        if ($result->num_rows > 0) {
            ?>
            <table class="table table-striped table-hover table-bordered">
              <thead>
                <tr>
                  <th>Imagen</th>
                  <th>Título</th>
                  <th>Texto</th>
                  <?php if (isset($_SESSION['usuario'])){ ?>
                    <th colspan="2"><center><a href="nuevatarjeta.php"class="btn btn-success">Nueva</a></center></th>
                  <?php } ?>
                </tr>
              </thead>
              <tbody>
            <?php
             while($row = $result->fetch_assoc()) {
               ?>
                <tr>
                  <td style="vertical-align:middle">
                    <?php
                      if (file_exists($row["imagen"])){

                    ?>
                      <center><img class="portrait" src="<?php echo $row["imagen"] ?>" alt="<?php echo "imagen de " . $row["h3"] ?>"></center>
                    <?php
                      }
                    ?>
                  </td>
                  <td style="vertical-align:middle"><?php echo $row["h3"] ?></td>
                  <td style="vertical-align:middle"><?php echo mb_strimwidth($row["p"], 0, 90, "..."); ?></td>
                  <?php
                  if (isset($_SESSION['usuario'])){
                    ?>
                      <td><center><a href="modificartarjetas.php?cod=<?php echo $row["cod_card"] ?>" class="btn btn-primary">modificar</a></center></td>
                      <td><center><a href="eliminartarjetas.php?cod=<?php echo $row["cod_card"] ?>" class="btn btn-danger confirmar">eliminar</a></center></td>
                    <?php
                   }
                  ?>
                </tr>
               <?php
             }
            ?>
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
