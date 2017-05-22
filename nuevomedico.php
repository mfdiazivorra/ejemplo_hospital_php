<?php include 'header.php'; ?>
<div class="container">
  <div class="row">
    <form class="form-horizontal" action="nuevomedico2.php" method="post" enctype="multipart/form-data">
      <fieldset>
        <legend>Nuevo Médico</legend>

        <div class="form-group">
          <label for="Num_Colegiado" class="col-lg-2 control-label">Núm Colegiado</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="Num_Colegiado" name="Num_Colegiado">
          </div>
        </div>
        <div class="form-group">
          <label for="Nom_Medico" class="col-lg-2 control-label">Nombre</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="Nom_Medico" name="Nom_Medico">
          </div>
        </div>
        <div class="form-group">
          <label for="Apell_Medico" class="col-lg-2 control-label">Apellido</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="Apell_Medico" name="Apell_Medico">
          </div>
        </div>
        <div class="form-group">
          <label for="Especialidad" class="col-lg-2 control-label">Especialidad</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="Especialidad" name="Especialidad">
          </div>
        </div>
        <div class="form-group">
          <label for="Antiguedad" class="col-lg-2 control-label">Antigüedad</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="Antiguedad" name="Antiguedad">
          </div>
        </div>
        <div class="form-group">
          <label for="Antiguedad" class="col-lg-2 control-label">Imagen</label>
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
