<?php 
require 'db_connect.php';
class delete{
	public function deleteuser($id_user){
		$db = new db_connect(); 
		$getConn = $db->connect();
		$data=[$username,$password,$id_user];

		$getUsers =$getConn->prepare("DELETE FROM user WHERE id_user=?");
		$getUsers->execute($data);
		return true;
	}
}
 ?>
