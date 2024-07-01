<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body style="height : 3000px">
  <!-- Header -->
<?php include "header.php"; ?>
<!-- End Header -->
<div class="container-lg">
<div class="row">
  <!-- sidebar -->
  <?php include "sidebar.php"; ?>
<!-- End sidebar -->

<!-- content -->
<div class="col-lg-9 mt-2">
<div class="card">
  <div class="card-header">
    Dashboard
  </div>
  <div class="card-body">
    <h5 class="card-title">Luna Hotel</h5>
    <p align="center"><img src="https://pixelz.cc/wp-content/uploads/2018/12/costa-adeje-gran-hotel-pool-spain-uhd-4k-wallpaper.jpg" width="800px" hight="200px" class="img-fluid mb-3"></p>
    <p class="card-text">WELCOME TO LUNA HOTEL.</p>
    <p class="card-text">The best hotel reservation wordpress theme.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<!-- end content -->
</div>
<div class="fixed-bottom text-center mb-2">Reservasi hotel Online</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>