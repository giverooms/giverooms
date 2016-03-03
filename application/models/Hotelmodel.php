<?php
	class Hotelmodel extends CI_Model {

		function __construct(){
	        parent::__construct();
	        $this->load->helper('url');
	    }
	 
		public function getHotelDetail($hotel){

			$this->db->select("*");
			$this->db->from("hotel ht");
			$this->db->join("hotel_gallery gal","ht.hotel_id = gal.gal_hotel_id","left");
			$this->db->where("hotel_name",$hotel);

			$hdetail_query = $this->db->get();

			return $hdetail_query->result();
		}

		private function getRegionId($r_name){
			$this->r_name = $r_name;
			$this->db->select("region_id");
			$this->db->from("region");
			$this->db->where("region_name_en",$r_name);

			$query_id = $this->db->get();

			foreach($query_id->result_array() as $row){

				$data = $row['region_id'];

			}
			//$data = 1;
			return $data;
		}

		public function getHotelRegion($r_name){

			$this->r_name = $r_name;
			$r_id = $this->getRegionId($this->r_name);

			$this->db->select("*");
			$this->db->from("hotel");
			$this->db->where("hotel_r_id",$r_id);

			$query_hotel = $this->db->get();

			return $query_hotel->result();
		}

		public function getCityRegion($r_name){

			$this->r_name = $r_name;
			$r_id = $this->getRegionId($this->r_name);

			$this->db->select("*");
			$this->db->from("city");
			$this->db->where("ct_region_id",$r_id);

			$query_city = $this->db->get();

			return $query_city->result();
		}
	 
	}
?>