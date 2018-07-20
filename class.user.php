<?php
	session_start();
	include "db_config.php";

	class User{

		public $db;

		public function __construct(){
			$this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

			if(mysqli_connect_errno()) {
				echo "Error: Could not connect to database.";
			        exit;
			}
		}

		/*** for login process ***/
		public function check_login($username, $password){

        	//$password = md5($password);
			$sqlquery="SELECT userid from users WHERE username='$username' and password='$password'";

			//checking if the username is available in the table
        	$result = mysqli_query($this->db,$sqlquery);
        	$user_data = mysqli_fetch_array($result);
        	$count_row = $result->num_rows;

	        if ($count_row == 1) {	
	            // this login var will use for the session thing
				$_SESSION['login']= true;
	            $_SESSION['userid'] = $user_data['username'];
	            return true;
	        }
	        else{
			    return false;
			}
    	}

    	/*** starting the session ***/
	    public function get_session(){
	        return $_SESSION['login'];
	    } 	 	 	 	

	    public function user_logout() {
	        $_SESSION['login'] = FALSE;
			session_unset();
			session_destroy();  
	    }

	}
?>