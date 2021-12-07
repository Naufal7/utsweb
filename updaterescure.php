<?php
session_start();
require 'db_update.php';
$db = new db_update();
if($db->updaterescure($_POST['nama_hewan'],$_POST['jns_hewan'],$_POST['umur_peliharaan'],$_POST['id_hewan'])){
	 // "<script>alert('Berhasil Mendaftar'); window.location=('".$_SERVER['HTTP_REFERER']."')</script>";
	$_SESSION['Message']="BERHASIL UPDATE DATA";
	header('location:'.$_SERVER['HTTP_REFERER']);

}else {
	
	$_SESSION['Message']="GAGAL UPDATE DATA";
	header('location:'.$_SERVER['HTTP_REFERER']);	
}

?>