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
		public function check_login($id_admin, $password_admin){
        $password_admin = ($password_admin);
		
		$query = "SELECT * from tbl_admin WHERE email_admin =  '$id_admin' or id_admin='$id_admin' and password_admin='$password_admin'";
		
		$result = $this->db->query($query) or die($this->db->error);

		
		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		$count_row = $result->num_rows;
		
		if ($count_row == 1) {
	            $_SESSION['login'] = true; // this login var will use for the session thing
	            $_SESSION['id_admin'] = $user_data['id_admin'];
	            return true;
	        }
			
		else{return false;}
		

	}
	
	
	public function get_fullname($id_admin){
		$query = "SELECT nama_admin FROM tbl_admin WHERE id_admin = $id_admin";
		
		$result = $this->db->query($query) or die($this->db->error);
		
		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		echo $user_data['id_admin'];
		
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