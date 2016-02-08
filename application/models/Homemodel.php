<?php
	class Homemodel extends CI_Model {

		public function __construct(){
	        parent::__construct();
	    }
	 
		function get_region_data(){

		  	$this->db->select("region_id,region_name_en,region_type");
		  	$this->db->from('region');
		  	$query = $this->db->get();

		  	return $query->result();

		}
	 
	}
?>