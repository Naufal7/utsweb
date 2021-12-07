<?php 
class db_connect{
	private $username='root';
	private $password='';
	public $con;
	public function connect(){
		try{
			$dbh = new PDO ('mysql:host=localhost;dbname=db_web',$this->username, $this->password);
		}catch (PDOException $e){
			echo 'Error!'.$e->getMessage().'</br>';
			die();
		}
		$this->con=$dbh;
		return $dbh;
	}

	public function ambil_data(){
		$getConn = $this->connect();
		$getUsers =$getConn->prepare("SELECT * FROM user ");
		$getUsers->execute();
		return $getUsers->fetchAll();
	}
public function ambil_data2(){
		$getConn = $this->connect();
		$getUsers =$getConn->prepare("SELECT * FROM tblpetshop ");
		$getUsers->execute();
		return $getUsers->fetchAll();
	}
	public function ambil_data3(){
		$getConn = $this->connect();
		$getUsers =$getConn->prepare("SELECT * FROM tblrescure ");
		$getUsers->execute();
		return $getUsers->fetchAll();
	}

	public function getadmin($id_user){
		try{
			$getConn = $this->connect();
			$stmt = $getConn->prepare("SELECT * FROM user WHERE id_user=$id_user");
			//$stmt->bind_param('s',$no);
			$stmt->execute([$id_user]);
			// var_dump($stmt);
			return $stmt;
		}catch (Exception $e){
			return $e->getMessage();
		}
	}


	public function getadminpetshop($id_hewan){
		try{
			$getConn = $this->connect();
			$stmt = $getConn->prepare("SELECT * FROM tblrescure WHERE id_hewan=?");
			// $stmt->bind_param('s',$no);
			$stmt->execute([$id_hewan]);
			return $stmt;
		}catch (Exception $e){
			return $e->getMessage();
		}
	}
	public function deleteAdmin($id_user){
			try{
			$getConn = $this->connect();
			$stmt = $getConn->prepare("DELETE from user where id_user=?");
			// $stmt->bind_param('s',$no);
			$stmt->execute([$id_user]);
			return true;
		}catch (Exception $e){
			return false;
		}
	}
	public function deleteHewan($id_hewan){
		try{
			$getConn = $this->connect();
			$stmt = $getConn->prepare("DELETE from tblrescure where id_hewan=?");
			// $stmt->bind_param('s',$no);
			$stmt->execute([$id_hewan]);
			return true;
		}catch (Exception $e){
			return false;
		}
	}

}

?>