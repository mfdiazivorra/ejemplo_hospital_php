<?php include 'header.php'; ?>
<div class="container">
  <div class="row">
    <form class="form-horizontal" action="nuevopaciente2.php" method="post" enctype="multipart/form-data">
      <fieldset>
        <legend>Nuevo Paciente</legend>

        <div class="form-group">
          <label for="Num_Historial" class="col-lg-2 control-label">Núm Historial</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="Num_Historial" name="Num_Historial">
          </div>
        </div>
        <div class="form-group">
          <label for="Nom_Paciente" class="col-lg-2 control-label">Nombre</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="Nom_Paciente" name="Nom_Paciente">
          </div>
        </div>
        <div class="form-group">
          <label for="Apell_Paciente" class="col-lg-2 control-label">Apellido</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="Apell_Paciente" name="Apell_Paciente">
          </div>
        </div>
        <div class="form-group">
          <label for="FNacimiento" class="col-lg-2 control-label">Fecha de nacimiento</label>
          <div class="col-lg-10">
            <input type="date" class="form-control" id="FNacimiento" name="FNacimiento">
          </div>
        </div>
        <div class="form-group">
          <label for="Domicilio" class="col-lg-2 control-label">Domicilio</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="Domicilio" name="Domicilio">
          </div>
        </div>
        <div class="form-group">
          <label for="Poblacion" class="col-lg-2 control-label">Población</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="Poblacion" name="Poblacion">
          </div>
        </div>

        <div class="form-group">
          <label for="select" class="col-lg-2 control-label">Sexo</label>
          <div class="col-lg-10">
            <select class="form-control" id="Sexo" name="Sexo">
              <option>H</option>
              <option>M</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="fileToUpload" class="col-lg-2 control-label">Imagen</label>
          <div class="col-lg-10">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="hidden" value="Upload Image" name="submit">
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="reset" class="btn btn-default">Cancelar</button>
            <button type="submit" class="btn btn-primary">Aceptar</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>
<?php include 'footer.php'; ?>
