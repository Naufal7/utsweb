  <?php
	include "db_connect.php"; 
  session_start();
  

$db = new db_connect(); 
$getConn = $db->connect();

   $username = $_POST['username'];
   $password = $_POST['password'];
   $getUsers =$getConn->prepare("SELECT * FROM user WHERE username = ?");
   $getUsers->execute(array($username));
   $hasil = $getUsers->fetch();
   if($getUsers->rowCount() == 0) {
     echo "<script>alert('Username Salah!'); window.location=('Login')</script>";
   } else {
     if($password <> $hasil['password']) {
       echo "<script>alert('Password Salah!'); window.location=('Login')</script>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:rescue/index');
     }
   }
?>