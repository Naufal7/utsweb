 <?php
session_start();
require 'db_update.php';
$db = new db_aksiupdate();
if($db->updatepetshop($_POST['nama'],$_POST['nama_barang'],$_POST['jns_barang'],$_POST['ket_barang'],$_POST['harga'],$_POST['id_barang'])){
	 // "<script>alert('Berhasil Mendaftar'); window.location=('".$_SERVER['HTTP_REFERER']."')</script>";
	$_SESSION['Message']="BERHASIL UPDATE DATA";
	header('location:'.$_SERVER['HTTP_REFERER']);

}else {
	
	$_SESSION['Message']="GAGAL UPDATE DATA";
	header('location:'.$_SERVER['HTTP_REFERER']);	
}

?>