<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
        parent::__construct();
    
        $this->load->helper('url');             // Load url helper
        $this->load->database();                // load database
        $this->load->model('Homemodel');        // load model
    }

	function index()
	{
		$data['regions'] = $this->Homemodel->get_region_data();
		$data['top_hotels'] = $this->Homemodel->getTopHotel();
		$data['hotel_detail'] = $this->Homemodel->getHotelDetail("mgm hotel");

		$this->load->view('templates/header');
		$this->load->view('home',$data);
		$this->load->view('templates/footer');																																												
	}

}
