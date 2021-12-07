<?php
session_start();
require 'aktifitas.php';
$db = new aktifitas();

// DATA BARANG

if($db->masukanuser($_POST['username'],$_POST['password'])){
	 // "<script>alert('Berhasil Mendaftar'); window.location=('".$_SERVER['HTTP_REFERER']."')</script>";
	$_SESSION['Message']="BERHASIL MEMASUKAN DATA";
	header('location:'.$_SERVER['HTTP_REFERER']);

}else {
	
	$_SESSION['Message']="GAGAL MEMASUKAN DATA";
	header('location:'.$_SERVER['HTTP_REFERER']);	
}

// DATA MEKANIK

if($db->masukanuser($_POST['username'],$_POST['password'])){
	 // "<script>alert('Berhasil Mendaftar'); window.location=('".$_SERVER['HTTP_REFERER']."')</script>";
	$_SESSION['Message']="BERHASIL MEMASUKAN DATA";
	header('location:'.$_SERVER['HTTP_REFERER']);

}else {
	
	$_SESSION['Message']="GAGAL MEMASUKAN DATA";
	header('location:'.$_SERVER['HTTP_REFERER']);	
}

?>