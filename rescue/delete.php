<?php 

require 'db_connect.php';

$id_user = $_GET["id_user"];
$db = new db_connect();
if ($db->deleteAdmin($id_user)) {
	echo "
	<script>
	alert('data berhasil di hapus!');
	document.location.href = 'home';
	</script>
	";
} else {
	echo "
	<script>
	alert('data gagal di hapus!');
	document.location.href = 'home';
	</script>
	";
}
?>