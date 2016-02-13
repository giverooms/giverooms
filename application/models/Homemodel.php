<?php
	class Homemodel extends CI_Model {

		public function __construct(){
	        parent::__construct();
	        $this->load->helper('url');
	    }
	 
		function get_region_data(){

		  	$this->db->select("region_id,region_name_en,region_type");
		  	$this->db->from('region');
		  	$query = $this->db->get();

		  	return $query->result();

		}

		function getCityId($ct_name){
			$this->ct_name = $ct_name;
			$this->db->select("ct_id");
			$this->db->from("city");
			$this->db->where("ct_name_en",$this->ct_name);

			$query_id = $this->db->get();

			foreach($query_id->result_array() as $row){

				$data = $row['ct_id'];

			}

			return $data;
		}

		function getHotel($ct_name){
			$this->ct_name = $ct_name;
			$ct_id = $this->getCityId($this->ct_name);

			$this->db->select("*");
			$this->db->from("hotel");
			$this->db->where("hotel_ct_id",$ct_id);

			$query_hotel = $this->db->get();

			return $query_hotel->result();
		}
	 
	}
?>