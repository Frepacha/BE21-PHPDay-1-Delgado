<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- boostrap is here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Php Challenge</title>
</head>
<body>
<?php
       $cars = array(
           "Car1" => array
               (
               "Branch" => "Lamborgini",
               "Model" => "Landa-530T",
               "Price"  => 600000
               ),
               "Car2" => array
               (
               "Branch" => "Ford",
               "Model" => "Mustang-1970",
               "Price"  => 100000
               ),
               "Car3" => array
               (
               "Branch" => "Bugatti",
               "Model" => "Chiron",
               "Price"  => 530000
               ),
               "Car4" => array
               (
               "Branch" => "Bentley",
               "Model" => "Continental GT3",
               "Price"  => 800000
               )
           );
           ?>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cars</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Lamborgini</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ford</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Bugatti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Bentley</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

</body>
<script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 
</script>
</html>