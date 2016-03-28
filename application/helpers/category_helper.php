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