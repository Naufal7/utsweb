<?php
session_start();
require 'aktifitas.php';
$db = new aktifitas();

// DATA BARANG

if($db->masukanrescurer($_POST['jns_peliharaan'],$_POST['nama_hewan'],$_POST['umur_peliharaan'])) {
	$_SESSION['Message']="BERHASIL MASUKAN HEWAN";
	header('location:http://localhost/UAS2/rescue/index');

}else{

	$_SESSION['Message']="GAGAL MEMASUKAN DATA";
	header('location:'.$_SERVER['HTTP_REFERER']);	

}

?>