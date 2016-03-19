<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('send_email'))
{
    function send_email($from = '',$to = '',$name = '',$subject = '',$message = '')
    {
    	$ci = get_instance();

    	if($from == ""){
    		$sender = $from;
    	}
    	else{
    		$sender = 'giverooms@gmail.com';
    	}

    	if($name == ""){
    		$sender_name = 'GiveRooms';
    	}
    	else{
    		$sender_name = $name;
    	}

        $config = array();
        $config['protocol'] = "smtp";
        // does not have to be gmail
        $config['smtp_host'] = 'ssl://smtp.gmail.com'; 
        $config['smtp_port'] = '465';
        $config['smtp_user'] = 'giverooms@gmail.com';
        $config['smtp_pass'] = 'GIVErooms12#$';
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['wordwrap'] = TRUE;

        $ci->load->library('email');

        $ci->email->initialize($config);

        $ci->email->from($sender,$sender_name);
        $ci->email->to($to);
        //$ci->email->cc('kyawminhtwe.pro912@gmail.com');
        $ci->email->subject($subject);
        $ci->email->message($message);

        $ci->email->send();

    }   
}