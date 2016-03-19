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
		   $this ->db-> select('id, username, password');
		   $this ->db-> from('users');
		   $this ->db-> where('username', $username);
		   $this ->db-> where('password', MD5($password));
		   $this ->db-> limit(1);
		 
		   $query = $this ->db-> get();
		 
		   if($query -> num_rows() == 1)
		   {
		     return $query->result();
		   }
		   else
		   {
		     return false;
		   }
		}

		function add_user(){

			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$password = $this->input->post('password');

			$this->db->select('user_email');
			$this->db->from('user');
			$this->db->where('user_email',$email);

			$query = $this->db->get();

			$data = array(
					'user_name' =>$name,
					'user_email' => $email,
					'user_phone' => $phone,
					'user_password' => md5($password),
					'status' => 0
				);
			
			if($query->num_rows > 0){

				$this->session->set_flashdata('register', array('messages' => 'You are already Register ! Forget your password !','class' => 'alert-warning')); 

				return false;
			}
			else{
				$this->db->insert('user',$data);

				return true;
			}

		}

		function get_user($id = ""){

			$this->db->select("*");
			$this->db->from("user");

			if($id != "" || $id != null){
				$this->db->where("md5(user_id)",$id);
			}

			$query = $this->db->get();

			return $query->result();
		}
	 
	}
?>