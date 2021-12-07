<!DOCTYPE html>
<html>
<head>
	<title>Pet Rescue</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="">
 	<meta name="author" content="naufall">

  	<!-- Bootstrap core CSS -->
  	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  	<!-- Custom styles for this template -->
<!--   	<link href="css/modern-business.css" rel="stylesheet"> -->
	
</head>
<body class="body" >
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index">Miles Cats Record</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
</div>
  </nav>
	<br/>
	<br/>
	<center><h2>Miles Cats Record</h2></center>	
	<div class="login" >
	<br/>
		<form action="process_login" method="post" onSubmit="return validasi()">
			<div align="left">
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div align="left">
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>	
			<br>		
			<div>
				
				<input type="submit" value="Login" class="tombol" style="padding: 10px 30px">
				
			</div>
			
		</form>
	</div>
</body>
<footer class="py-5 bg-dark">
    <div class="container">
    <p style="padding-bottom: 5px" class="m-0 text-center text-white">Copyright &copy; 2021 Naufal Rafii Anwar All Right Reservert </p>
    </div>
    <!-- /.container -->
  </footer>
 
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}

 
</script>
</html>
