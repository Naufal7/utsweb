<?php
session_start();
require 'db_update.php';
$db = new db_update();
if($db->update_user($_POST['username'],$_POST['password'],$_POST['id_user'])){
	$_SESSION['Message']="BERHASIL UPDATE DATA";
	header('location:http://localhost/UAS2/admin');

}else {
	
	$_SESSION['Message']="GAGAL UPDATE DATA";
	header('location:'.$_SERVER['HTTP_REFERER']);	
}

?>