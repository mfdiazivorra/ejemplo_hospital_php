<?php include 'header.php'; ?>
<div class="container">
  <br><br>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
      <?php
        require_once 'conexion.php';

        $sql = "SELECT Num_Historial, Nom_Paciente, Apell_Paciente, FNacimiento, Domicilio, Poblacion, Sexo FROM pacientes;";
        $result = $conexion->query($sql);

        if ($result->num_rows > 0) {
            ?>
            <table class="table table-striped table-hover table-bordered">
              <thead>
                <tr>
                  <th>Núm Historial</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Fecha de Nacimiento</th>
                  <th>Domicilio</th>
                  <th>Población</th>
                  <th>Sexo</th>
                  <?php if (isset($_SESSION['usuario'])){ ?>
                    <th colspan="2"><center><a href="nuevopaciente.php"class="btn btn-success">Nuevo</a></center></th>
                  <?php } ?>
                </tr>
              </thead>
              <tbody>
            <?php
             while($row = $result->fetch_assoc()) {
               ?>
                <tr>
                  <td style="vertical-align:middle"><?php echo $row["Num_Historial"] ?></td>
                  <td style="vertical-align:middle"><?php echo $row["Nom_Paciente"] ?></td>
                  <td style="vertical-align:middle"><?php echo $row["Apell_Paciente"] ?></td>
                  <td style="vertical-align:middle"><?php echo date_format(date_create($row["FNacimiento"]), 'd/m/Y'); ?></td>
                  <td style="vertical-align:middle"><?php echo $row["Domicilio"] ?></td>
                  <td style="vertical-align:middle"><?php echo $row["Poblacion"] ?></td>
                  <td style="vertical-align:middle"><?php echo $row["Sexo"] ?></td>
                  <?php
                  if (isset($_SESSION['usuario'])){
                    ?>
                      <td><center><a href="modificarpacientes.php?cod=<?php echo $row["Num_Historial"] ?>" class="btn btn-primary">modificar</a></center></td>
                      <td><center><a href="eliminarpacientes.php?cod=<?php echo $row["Num_Historial"] ?>" class="btn btn-danger confirmar">eliminar</a></center></td>
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
