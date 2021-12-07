<?php
include "db_connect.php"; 
$db = new db_connect(); 
?>  
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="naufall">

  <title>Pet Rescure</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index">Miles Cats Record</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="Login">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Page Content -->
  <div class="container">

   <h1 class="my-4">Welcome to MCR Luxury Pet Shop</h1>

   <!-- Portfolio Section -->
   <div class="row">
    <?php
    foreach($db->getadminpetshop($_GET['id_hewan']) as $d){
      ?>
      <div class="col-lg-12 mb-12">
        <div class="card h-100">
          <h4 class="card-header">Hai my name is <?=$d['nama_hewan'] ?></h4>
          <div class="card-body">
            <p class="card-text">Many people love me because i'm a <?=$d['jns_peliharaan'] ?>. And i am <?=$d['umur_peliharaan'] ?> month old</p>
          </div>
          <div class="card-footer" align="center">
            <a href="index" class="btn btn-success">Home/<small>back</small></a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<!-- /.container -->

<!-- Footer -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer class="py-5 bg-dark">
  <div class="container">
  <p style="padding-bottom: 5px" class="m-0 text-center text-white">Copyright &copy; 2021 Naufal Rafii Anwar All Right Reservert </p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
