<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('user_name_exit')){

	function username_exit($email){

		$CI =& get_instance();
        $CI->load->database();

		$sql = "SELECT * FROM user WHERE user_email = '".$email."' ";

		$quy = $CI->db->query($sql);

		$row_result = $quy->query($quy);

		return $$row_result->num_rows();

	}

}