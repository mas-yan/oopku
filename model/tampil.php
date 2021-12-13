<?php 

class Barang{
	private $mysqli;

	function __construct($conn){
		$this->mysqli = $conn;
	}
		public function tampil($id = null){
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM siswa";

		if ($id !=null) {
			$sql .= " WHERE id_siswa = $id";
		}
		$query = $db->query($sql) or die(mysqli_error());
		return $query;
	}
}

 ?>