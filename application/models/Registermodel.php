<?php
	class Registermodel extends CI_Model {

		function __construct(){
	        parent::__construct();
	        $this->load->helper('url');
	    }
	 
		function username_exits($name){
			
		}

		function login($username, $password)
		{
		   $this -> db -> select('id, username, password');
		   $this -> db -> from('users');
		   $this -> db -> where('username', $username);
		   $this -> db -> where('password', MD5($password));
		   $this -> db -> limit(1);
		 
		   $query = $this -> db -> get();
		 
		   if($query -> num_rows() == 1)
		   {
		     return $query->result();
		   }
		   else
		   {
		     return false;
		   }
		}
	 
	}
?>