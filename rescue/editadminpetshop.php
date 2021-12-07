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
  <meta name="author" content="">

  <title>MCR Luxury - Luxury Stuff For Your Pets</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">


</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index2">Miles Cats Record</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index">Logout</a>
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
            <a href="#" class="list-group-item active">Rescure <small>Edit</small></a>
          </div>
        </div>
        <!-- Content Column -->
        <div class="col-lg-9 mb-4">
          <!-- Content Column -->
          <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
             <div class="box box-info">
               <div class="box-header with-border">
               </div>

               <div style="padding: 20px;"> 
                <?php if(isset($_SESSION['Message'])): ?>
                </div>
                <div class="alert alert-success">
                  <? $_SESSION['Message'] ?>
                </div>
              <?php endif; ?> 
              <form method="POST" action="updaterescure">
                <?php
                foreach($db->getadminpetshop($_GET['id_hewan']) as $d){
                  ?>
                  <input type="hidden" name="id_hewan" value="<?=$d['id_hewan'] ?>">
                  <label>Nama Hewan</label>
                  <input type="text" name="nama_hewan" class="form-control" placeholder="Masukan Nama" value="<?=$d['nama_hewan'] ?>">
                  <label>Jenis Peliharaan</label>
                  <input type="text" name="jns_peliharaan" class="form-control" placeholder="Masukan Jenis" value="<?=$d['jns_peliharaan']?>">
                  <label>Umur Peliharaan</label>
                  <input type="text" name="umur_peliharaan" class="form-control" placeholder="Masukan Umur" value="<?=$d['umur_peliharaan']?>">
                  <label>Keterangan</label>
                </br>
                <button type="submit"  class="btn btn-primary" >
                  SIMPAN  
                </button>
                <a href="home" class="btn btn-success">CANCEL</a>
              </form>
              <?php } ?>
          </div>

        </section>
      </div>
    </div>
    <!-- /.content -->
  </div>
</header>


<!-- Footer -->
<br>
<br>
<br>
<br>
<br>
<footer class="py-5 bg-dark">
  <div class="container">
<p style="padding-bottom: 5px" class="m-0 text-center text-white">Copyright &copy; 2020 Kelompok 5 TIFRP17-CID-B All Right Reservert </p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
