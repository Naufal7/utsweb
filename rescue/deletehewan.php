<?php 


require 'db_connect.php';

$id_hewan = $_GET["id_hewan"];
$db = new db_connect();
if ($db->deleteHewan($id_hewan)) {
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