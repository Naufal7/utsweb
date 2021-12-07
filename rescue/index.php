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
      <a class="navbar-brand" href="../index">Miles Cats Record</a>
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

   <h1 class="my-4">Welcome to MCR</h1>

   <!-- Portfolio Section -->
   <div style="padding: 20px;"> 
    <a href="input" class="btn btn-primary" style="margin-bottom: 10px">+Tambah Hewan</a>
    <table class="table table-hover table-bordered">
      <thead style="background-color: #00c0ef; color: white;">
        <tr align="center">
          <th width="1%">No</th>
          <th width="15%">Nama Hewan</th>
          <th width="15%">Jenis Hewan</th>
          <th width="10%">Umur Hewa <small>(Bulan)</small> </th>
          <th width="10%">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($db->ambil_data3()as $d):?> 
          <tr>
            <td align="center" style="vertical-align: middle;"><?=$d['id_hewan'] ?></td>
            <td align="center" style="vertical-align: middle;"><?=$d['nama_hewan'] ?></td>
            <td align="center" style="vertical-align: middle;"><?=$d['jns_peliharaan'] ?></td>
            <td align="center" style="vertical-align: middle;"><?=$d['umur_peliharaan'] ?></td>
            <td align="center" style="vertical-align: middle;">
              <a href="show?id_hewan=<?=$d['id_hewan'] ?>" class="btn btn-success btn-sm">Lihat</a></td>
            </tr>
          </tbody>
        <?php endforeach ; ?> 
      </table>
      <?php
      
      $db = new db_connect(); 
      $getConn = $db->connect();
      if(isset($_GET['no'])){
        $no_get= $_GET['no'];
        $getUsers =$getConn->prepare("DELETE FROM username WHERE no=$no_get");
        $getUsers->execute();

        echo "<script>  window.location= 'admin' </script> ";

      }
      ?>  
      <hr>
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
