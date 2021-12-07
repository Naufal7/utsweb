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
	public function masukanrescurer($jns_peliharaan,$nama_hewan,$umur_peliharaan){
		$db = new db_connect(); 
		$getConn = $db->connect();
		$data=[$jns_peliharaan,$nama_hewan,$umur_peliharaan];
		$getUsers =$getConn->prepare("INSERT INTO tblrescure (jns_peliharaan,nama_hewan,umur_peliharaan) values (?,?,?)");
		$getUsers->execute($data);
		return true;
	}
	
}
?>