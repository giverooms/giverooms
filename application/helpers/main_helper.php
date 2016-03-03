<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('slug_url'))
{
    function slug_url($str = '')
    {
        $string = trim($str);
        $string = strtolower($string);
        $string = htmlspecialchars($string);

        $slug = str_replace(" ", "-", $string);

        echo $slug;

    }   
}

if (!function_exists("slice_array")) {
    
    function slice_array($array = ""){

        if(is_string($array)){
            $array = explode(",", $array);
        }
        else{
            $array = "Is not String !";
        }

        return $array;
    }

}

if(!function_exists('select_by_id')){

	function select_by_id($id="", $table = ""){

        $CI =& get_instance();
        $CI->load->database(); 

        $sql = "select * from room where room_hotel_id = ".$id; 
        $query = $CI->db->query($sql);
        $row = $query->result();

        return $row;
   }
}

if(!function_exists('get_total_hotel')){
    function get_total_hotel($id){
        $CI =& get_instance();
        $CI->load->database();

        $sql = "select * from hotel where hotel_ct_id = ".$id;
        $quy = $CI->db->query($sql);
        $row = $quy->result();

        return $quy->num_rows();
    }
}

if(!function_exists('get_city_name')){
    function get_city_name($id){
        $CI = & get_instance();
        $CI->load->database();

        $sql = "select ct_name_en from city where ct_id = ".$id;
        $c_quy = $CI->db->query($sql);
        $c_row = $c_quy->result();

        return $c_row;
    }
}

