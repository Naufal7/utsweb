<?php
require 'db_connect.php';
class aktifitas{
	public function masukanuser($username,$password){
		$db = new db_connect(); 
		$getConn = $db->connect();
		$data=[$username,$password];
		$getUsers =$getConn->prepare("INSERT INTO user (username,password) values (?,?)");
		$getUsers->execute($data);
		return true;
	}
	public function masukanpetshop($nama,$kota,$alamat,$no_hp,$email){
		$db = new db_connect(); 
		$getConn = $db->connect();
		$data=[$nama,$kota,$alamat,$no_hp,$email];
		$getUsers =$getConn->prepare("INSERT INTO tblmekanik (nama,kota,alamat,no_hp,email) values (?,?,?,?,?)");
		$getUsers->execute($data);
		return true;
	}

	public function masukanrescurer($nama,$kota,$alamat,$no_hp,$email){
		$db = new db_connect(); 
		$getConn = $db->connect();
		$data=[$nama,$kota,$alamat,$no_hp,$email];
		$getUsers =$getConn->prepare("INSERT INTO tblsupplier (nama,kota,alamat,no_hp,email) values (?,?,?,?,?)");
		$getUsers->execute($data);
		return true;
	}
	
}
?>