<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guide extends CI_Controller {

	function __construct() {
        parent::__construct();
    
        $this->load->helper('url');             // Load url helper
        $this->load->database();                // load database
        $this->load->model('Homemodel');        // load model
    }

	function index()
	{

		$this->load->view('templates/header');
		$this->load->view('guide');
		$this->load->view('templates/footer');																																												
	}

}
