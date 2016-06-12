<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_facilities'))
{
    function get_facilities()
    {
    	$CI = get_instance();
        $CI->load->database();
    	
        $sql = "select * from hotel_facilities"; 
        $query = $CI->db->query($sql);

        return $query->result();

    }   
}

if(!function_exists('get_all_region')){

    function get_all_region(){

        $CI =& get_instance();
        $CI->load->database();

        $sql = "select * from region order by region_name_en";
        $r_quy = $CI->db->query($sql);

        $r_row = $r_quy->result();

        foreach($r_row as $region){
            echo "<option value='".$region->region_id."''>".$region->region_name_en."</option>";
        }

    }

}


if(!function_exists('get_all_city')){

    function get_all_city($region_id){

        $CI =& get_instance();
        $CI->load->database();

        if($region_id != null){
            $condi = "where ct_region_id = ".$region_id;
        }
        else{
            $condi = "where ct_region_id != -1";
        }

        $sql = "select * from city ".$condi." order by ct_name_en";
        $r_quy = $CI->db->query($sql);

        $r_row = $r_quy->result();

        foreach($r_row as $city){
            echo "<option value='".$city->ct_id."''>".$city->ct_name_en."</option>";
        }

    }

}