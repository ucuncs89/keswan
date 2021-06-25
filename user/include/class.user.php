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
		public function check_login($username_user, $password_user){
        $password_user = $password_user;
		
		$query = "SELECT * from tbl_user WHERE username_user='$username_user' and password_user='$password_user'";
		
		$result = $this->db->query($query) or die($this->db->error);

		
		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		$count_row = $result->num_rows;
		
		if ($count_row == 1) {
	            $_SESSION['login'] = true; // this login var will use for the session thing
	            $_SESSION['username_user'] = $user_data['username_user'];
	            return true;
	        }
			
		else{return false;}
		

	}
	
	
	public function get_fullname($username_user){
		$query = "SELECT * FROM tbl_user WHERE username_user = $username_user";
		
		$result = $this->db->query($query) or die($this->db->error);
		
		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		echo $user_data['nama_user'];
		
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