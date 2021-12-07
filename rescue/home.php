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
      <a class="navbar-brand" href="home">Miles Cats Record</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../index">Log out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header>
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Welcome
        <small>Admin</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="home">Home</a>
        </li>
        <li class="breadcrumb-item active">Admin Session</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
          <div class="list-group">
            <a href="inputpetadmin" class="list-group-item">Admin</a>
            <a href="inputpet" class="list-group-item">Rescure</a>
          </div>
        </div>
        <!-- Content Column -->
        <!-- Content Column -->
        <div class="col-lg-9 mb-4">

         <div class="content-wrapper">
          <!-- Main content -->
          <section class="content">

           <div class="box box-info">
             <div class="box-header with-border">
             </div>

             <div style="padding: 20px;"> 
              <a href="inputpetadmin" class="btn btn-primary" style="margin-bottom: 10px">+Tambah Admin</a>
              <table class="table table-hover table-bordered">
                <thead style="background-color: #00c0ef; color: white;">
                  <tr>
                    <th align="center">No</th>
                    <th align="center">Usename</th>
                    <th align="center">Password</th>
                    <th align="center" colspan="2"  style="text-align: center;"> Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($db->ambil_data()as $d):?> 
                    <tr>
                      <td align="center" style="vertical-align: middle;"><?=$d['id_user'] ?></td>
                      <td align="center" style="vertical-align: middle;"><?=$d['username'] ?></td>
                      <td align="center" style="vertical-align: middle;"><?=$d['password'] ?></td>
                      <td style="vertical-align: middle;">
                        <a href="editadmin?id_user=<?=$d['id_user'] ?>" class="btn btn-success btn-sm">Edit</a></td>
                        <td style="vertical-align: middle;">
                          <a href="delete?id_user=<?=$d['id_user'] ?>" class="btn btn-danger btn-sm" onclick="return confirm ('Apakah Yakin Menghapus Data');">Hapus</a>
                        </td>
                        </tr>

                      </tbody>
                    <?php endforeach ; ?> 
                  </table>  
                </div>
              </div>
                </section>
              </div>
              <div>
                <section class="content">
           <div class="box box-info">
             <div class="box-header with-border">
             </div>

             <div style="padding: 20px;"> 
              <a href="inputpet" class="btn btn-primary" style="margin-bottom: 10px">+Tambah Hewan</a>
              <table class="table table-hover table-bordered">
                <thead style="background-color: #00c0ef; color: white;">
                  <tr>
                    <th width="1%">No</th>
                    <th width="10%">Nama Hewan</th>
                    <th width="15%">Jenis Hewan</th>
                    <th width="15%">Umur Hewan</th>
                    <th width="15%" colspan="2"  style="text-align: center;"> Aksi</th>
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
                      <td style="vertical-align: middle;">
                        <a href="editadminpetshop?id_hewan=<?=$d['id_hewan'] ?>" class="btn btn-success btn-sm">Edit</a></td>
                        <td style="vertical-align: middle;">
                          <a href="deletehewan?id_hewan=<?=$d['id_hewan'] ?>" class="btn btn-danger btn-sm" onclick="return confirm ('Apakah Yakin Menghapus Data');">Hapus</a>
                        </td>
                        </tr>

                      </tbody>
                    <?php endforeach ; ?> 
                  </table>
                  </div> 
                </div>
                </section>
              </div>
              <div>
                <section class="content">
           <div class="box box-info">
             <div class="box-header with-border">
             </div>

             <div style="padding: 20px;"> 
              <a href="inputpet" class="btn btn-primary" style="margin-bottom: 10px">+Tambah Barang</a>
              <table class="table table-hover table-bordered">
              <thead style="background-color: #00c0ef; color: white;">
                <tr>
                  <th width="1%">No</th>
                  <th width="10%">Barang</th>
                  <th width="15%">Hewan</th>
                  <th width="15%">Ket. Barang</th>
                  <th width="15%">Harga</th>
                  <th width="15%" colspan="2"  style="text-align: center;"> Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($db->ambil_data2()as $d):?> 
                <tr>
                  <td align="center" style="vertical-align: middle;"><?=$d['id_barang'] ?></td>
                  <td align="center" style="vertical-align: middle;"><?=$d['nama_barang'] ?></td>
                  <td align="center" style="vertical-align: middle;"><?=$d['jns_peliharaan'] ?></td>
                  <td align="center" style="vertical-align: middle;"><?=$d['ket_barang'] ?></td>
                  <td align="center" style="vertical-align: middle;">Rp<?=$d['harga'] ?></td>
                   <td style="vertical-align: middle;">
                    <a href="?no=<?=$d['no'] ?>" class="btn btn-success btn-sm">Edit</a></td>
                  <td style="vertical-align: middle;">
                    <a href="?no=<?=$d['no'] ?>" class="btn btn-danger btn-sm" onclick="return confirm ('Apakah Yakin Menghapus Data');">Hapus</a></td>
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
                  </div> 
                </div>
                </section>
              </div>
            </div>

            </div>
          </div>



         <!-- /.content -->

      </div>
    </header>

    <!-- Footer -->
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