<?php 
	class Countrystate extends CI_Model{

		function loadcountries() {
			$sql = "select * from region order by region_name_en";
        	$query = $this->db->query($sql);

       	 	$r_row = $query->result();
	         
	        if ($query->num_rows > 0) {
	            return $r_row;
	        }
	    }
     
	    function loadstatesfromcountries($country) {
		
	        $query = $this->db->query("SELECT ct_name_en FROM city WHERE ct_region_id = '{$country}'");
		
	         
	        if ($query->num_rows > 0) {
	            return $query->result();
	        }
	    }

	}
?>