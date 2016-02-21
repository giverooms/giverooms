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

