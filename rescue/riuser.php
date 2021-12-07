<?php
session_start();
require 'aktifitas.php';
$db = new aktifitas();

// DATA BARANG

if($db->masukanuser($_POST['username'],$_POST['password'])){
	$_SESSION['Message']="BERHASIL MEMASUKAN DATA";
	header('location:http://localhost/UAS2/rescue/home');

}else {
	
	$_SESSION['Message']="GAGAL MEMASUKAN DATA";
	header('location:'.$_SERVER['HTTP_REFERER']);	
}

?>