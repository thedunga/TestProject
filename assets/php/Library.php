<?php
	require_once('Connection.php');

	class Library extends Connection {

		public function get_data_by_id($data,$tb,$col,$id){
			if ($data == false) {
				$sql = $this->_query("SELECT * FROM $tb WHERE $col='$id'");
				if ($sql && $sql->num_rows > 0) {
					return $sql->fetch_assoc();
				}
			} else {
				$sql = $this->_query("SELECT $data FROM $tb WHERE $col='$id'");
				if ($sql && $sql->num_rows > 0) {
					$row = $sql->fetch_assoc();
					return $row[$data];
				}
			}
			return false;
		}
		
	}
	
	$lib = new Library;

	if (isset($_REQUEST["action"])) {

		if($_REQUEST["action"]=="new-account") {$response = $lib->register_user();echo json_encode($response);}
		
	}

?>