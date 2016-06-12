<?php
	class Hoteldashboardmodel extends CI_Model {

		function __construct(){
	        parent::__construct();
	        $this->load->helper('url');
	    }
	 
		function edit_profile($id){

			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$phone  = $this->input->post('phone');
			$hotel_name = $this->input->post('hotel_name');
			$region = $this->input->post('region');
			$city = $this->input->post('city');

			$data = array(
					'user_name' => $name,
					'user_email' => $email,
					'user_phone' => $phone,
					'user_password' => 'kyawminhtwe',
					'hotel_name' => $hotel_name,
					'region' => $region,
					'city' => $city
				);

			$this->db->where('user_id',$id);
			$this->db->update('user',$data);

		}
	 
	}
?>