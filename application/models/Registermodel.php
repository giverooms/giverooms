<?php
	class Registermodel extends CI_Model {

		function __construct(){
	        parent::__construct();
	        $this->load->helper('url');
	    }
	 
		function username_exits($user){

			$this->db->select('user_email');
			$this->db->from('user');
			$this->db->where('user_email',$user);

			$query = $this->db->get();

			if($query->num_rows > 0){
				return true;
			}
			else{
				return false;
			}
		}

		function login()
		{
			$email = $this->input->post('username');
			$password = $this->input->post('password');

		   	$this->db->select('*');
        	$this->db->from('user');
        	$this->db->where('user_email',$email);

		 
		   $query = $this->db->get();
		 
		   if($query->num_rows() > 0)
		   {
		     return true;
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

			$data = array(
					'user_name' =>$name,
					'user_email' => $email,
					'user_phone' => $phone,
					'user_password' => md5($password),
					'status' => 0
				);
			
			if($this->username_exits($email) == false){

				$this->session->set_flashdata('register', array('messages' => 'You are already Register ! Forget your password !','class' => 'alert-warning')); 
				redirect(site_url('register.html'));
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