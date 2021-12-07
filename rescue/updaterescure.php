<?php
session_start();
require 'db_update.php';
$db = new db_update();
if($db->update_rescure($_POST['nama_hewan'],$_POST['jns_peliharaan'],$_POST['umur_peliharaan'],$_POST['id_hewan'])){
	$_SESSION['Message']="BERHASIL UPDATE DATA";
	header('location:http://localhost/UAS2/rescue/home');

}else {
	
	$_SESSION['Message']="GAGAL UPDATE DATA";
	header('location:'.$_SERVER['HTTP_REFERER']);	
}

?>