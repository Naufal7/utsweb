<?php 
include 'db_connect.php';

require 'functions.php';

$id_user = $_GET["id_user"];
$query="'DELETE from user where id_user='$id_user'";
mysql_query($db_connect, $query);
header("location:home");

if (delete($id_user) > 0 ) {
	echo "
	<script>
	alert('data berhasil di hapus!');
	document.location.href = 'admin';
	</script>
	";
} else {
	echo "
	<script>
	alert('data gagal di hapus!');
	document.location.href = 'admin';
	</script>
	";
}

?>