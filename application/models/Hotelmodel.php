<?php
	class Hotelmodel extends CI_Model {

		function __construct(){
	        parent::__construct();
	        $this->load->helper('url');
	    }
	 
		function getHotelDetail($hotel){

			$this->db->select("*");
			$this->db->from("hotel ht");
			$this->db->join("hotel_gallery gal","ht.hotel_id = gal.gal_hotel_id","left");
			$this->db->where("hotel_name",$hotel);

			$hdetail_query = $this->db->get();

			return $hdetail_query->result();
		}
	 
	}
?>