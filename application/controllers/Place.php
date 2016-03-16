<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Place extends CI_Controller {

	function __construct() {
        parent::__construct();
    
        $this->load->helper('url');             // Load url helper
        $this->load->database();                // load database
        $this->load->model('Homemodel');        // load model
    }

	function index()
	{
		$data['places'] = $this->Homemodel->get_place_detail();
		
		$this->load->view('templates/header');
		$this->load->view('place',$data);
		$this->load->view('templates/footer');																																
	}

}
