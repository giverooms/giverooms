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

if(!function_exists('select_by_id')){

	function select_by_id($id=""){

        $CI =& get_instance();
        $CI->load->database(); 

        $sql = "select * from hotel"; 
        $query = $CI->db->query($sql);
        $row = $query->result();

        foreach($row as $val){
        	return $val->hotel_name;
        }
   }
}