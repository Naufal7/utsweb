<?php
require 'db_connect.php';
class db_update{
	public function update_user($username,$password,$id_user){
		$db = new db_connect(); 
		$getConn = $db->connect();
		$data=[$username,$password,$id_user];
	//  var_dump($data);
	// exit();
		$getUsers =$getConn->prepare("UPDATE user SET username=?,password=? WHERE id_user=?");
		$getUsers->execute($data);
		return true;
	}

	public function update_rescure($jns_peliharaan,$nama_hewan,$umur_peliharaan,$id_hewan){
		$db = new db_connect(); 
		$getConn = $db->connect();
		$data=[$jns_peliharaan,$nama_hewan,$umur_peliharaan,$id_hewan];
	//  var_dump($data);
	// exit();
		$getUsers =$getConn->prepare("UPDATE tblrescure SET nama_hewan=?,jns_peliharaan=?,umur_peliharaan=? WHERE id_hewan=?");
		$getUsers->execute($data);
		return true;
	}

}

?>