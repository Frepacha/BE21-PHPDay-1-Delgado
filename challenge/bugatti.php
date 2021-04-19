<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- boostrap is here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="./style.css">
    <title>BUgatti</title>
</head>
<body>
<?php
  $cars = array(
        "Car1" => array
            (
            "image" => "https://i.auto-bild.de/mdb/extra_large/70/urus-68d.png",
            "Branch" => "Lamborgini",
            "Model" => "Urus",
            "Price"  => 600000
            ),
            "Car2" => array
            (
            "image" => "https://cdn1.mecum.com/auctions/ca0815/ca0815-225184/images/ca0815-225184_1@2x.jpg",
            "Branch" => "Ford",
            "Model" => "Mustang-1970",
            "Price"  => 100000
            ),
            "Car3" => array
            (
            "image" => "https://i.auto-bild.de/ir_img/2/4/6/0/8/3/9/9d49b5336c1f8b2c.jpg",
            "Branch" => "Bugatti",
            "Model" => "Chiron",
            "Price"  => 530000
            ),
            "Car4" => array
            (
            "image" => "https://soymotor.com/sites/default/files/styles/amp_metadata_content_image_min_696px_wide/public/imagenes/noticia/bentley_continental_gt_1.jpg",
            "Branch" => "Bentley",
            "Model" => "Continental GT3",
            "Price"  => 800000
            )
          );
          //echo ($cars["Car1"]["Branch"]);
  ?>
<!--   navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="./challenge-1.php">Cars</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./lamborgini.php"><?php echo ($cars["Car1"]["Branch"]);?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./ford.php"><?php echo ($cars["Car2"]["Branch"]);?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./bugatti.php"><?php echo ($cars["Car3"]["Branch"]);?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./bentley.php"><?php echo ($cars["Car4"]["Branch"]);?></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- card info auto -->
<div class="container d-flex justify-content-center">
  <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?php echo ($cars["Car3"]["image"]);?>" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title text-light fs-4"><?php echo ($cars["Car3"]["Branch"]);?> <?php echo ($cars["Car3"]["Model"]);?> </h5>
        <p class="card-text text-light fs-5">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text text-light fs-4"><?php echo ($cars["Car3"]["Price"]);?> $</p>
      </div>
    </div>
  </div>
</div>
</div>


<footer>
  <h1 class="container d-flex justify-content-center">Cars collection &copy;</h1>
</footer>
</body>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 

</html>