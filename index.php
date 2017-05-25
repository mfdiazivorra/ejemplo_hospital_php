<?php include 'header.php'; ?>
    <div class="jumbotron jumbotronportada">
      <h1>Healthstone Community Hospital</h1>
      <p>This is a simple hero unit for calling extra attention to featured content or information.</p>
      <p><a class="btn btn-primary btn-lg" href="index.php">Learn more</a></p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 id="type-blockquotes"></h2>
        </div>
      </div>
      <div class="row">
        <?php
          require_once 'conexion.php';

          $sql = "SELECT cod_card, imagen, h3, p FROM frontpage_cards;";
          $result = $conexion->query($sql);

          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

        ?>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="<?php echo $row["imagen"] ?>" alt="imagen <?php echo $row["cod_card"] ?>">
            <div class="caption">
              <h3><?php echo $row["h3"] ?></h3>
              <p><?php echo $row["p"] ?></p>
            </div>
          </div>
        </div>
        <?php
            }
          }
        ?>

      </div>
      <div class="row">
        <div class="panel panel-primary col-lg-6">
          <div class="panel-heading">
            <h3 class="panel-title">Información Adicional</h3>
          </div>
          <div class="panel-body">
            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore possimus perspiciatis deserunt mollitia quaerat nisi laboriosam quasi tempore expedita suscipit ducimus eaque, excepturi quia, ipsa iste a nulla voluptatem, qui!</div>
            <div>Natus obcaecati quaerat dolorum id porro architecto assumenda vero nam vel in, odio, impedit. Modi optio eligendi dolore voluptatum consectetur maxime voluptatibus provident facere iste! Ab quasi placeat impedit alias?</div>
            <div>Quia laboriosam, eum, aspernatur dolor officia nesciunt est molestias cum nihil sequi velit non deleniti autem magni earum voluptatum aut a iure laborum eaque veniam vero id corporis! A, tenetur.</div>
          </div>
        </div>
        <div class="col-lg-6">
          <blockquote class="blockquote">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
          </blockquote>
        </div>
      </div>
    </div>
<?php include 'footer.php'; ?>
