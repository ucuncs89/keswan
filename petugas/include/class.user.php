<?php 
	include "db_config.php";
	class User{
		protected $db;
		public function __construct(){
			$this->db = new DB_con();
			$this->db = $this->db->ret_obj();
		}
		
		/*** for registration process ***/
		
			
			
	/*** for login process ***/
		public function check_login($id_petugas, $password_petugas){
        $id_petugas = $id_petugas;
		
		$query = "SELECT * from tbl_petugas WHERE id_petugas='$id_petugas' and password_petugas='$password_petugas'";
		
		$result = $this->db->query($query) or die($this->db->error);

		
		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		$count_row = $result->num_rows;
		
		if ($count_row == 1) {
	            $_SESSION['login'] = true; // this login var will use for the session thing
	            $_SESSION['id_petugas'] = $user_data['id_petugas'];
	            return true;
	        }
			
		else{return false;}
		

	}
	
	
	public function get_fullname($id_petugas){
		$query = "SELECT * FROM tbl_petugas WHERE id_petugas = $id_petugas";
		
		$result = $this->db->query($query) or die($this->db->error);
		
		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		echo $user_data['nama_petugas'];
		
	}
	
	/*** starting the session ***/
	public function get_session(){
	    return $_SESSION['login'];
	    }

	public function user_logout() {
	    $_SESSION['login'] = FALSE;
		unset($_SESSION);
	    session_destroy();
	    }	
}