<?php
	require_once('Setting.php');

	if (!isset($_SESSION)) {
		session_start();
	}
	
	class Connection extends Setting{
		protected $server = '';
		protected $db_name = 'go';
		protected $db_user = 'root';
		protected $db_pass = '';
		protected $user_tb = 'user_tb';
		protected $package = 'package_detail';
		protected $sender = 'senders_details';
		protected $reciever = 'receiver_detail';
		protected $shipping = 'shipping_info';
		protected $order = 'order_details';

		public function connect(){
			$conn = new mysqli($this->server,$this->db_user,$this->db_pass,$this->db_name);
			if ($conn) {
				return $conn;
			}
		}

		public function _query($sql) {
			$conn = $this->connect();
			$query = $conn->query($sql);
			return($query);
		}

		public function _escape($str) {
			return $this->connect()->real_escape_string($str);
		}

		public function get_site_settigs($data){
			$sql = $this->_query("SELECT $data FROM $this->site_settings");
			return $sql->fetch_assoc()[$data];
		}

	}

	$db_con = new Connection;
?>