<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {

	function __construct() {

        parent::__construct();

        $this->load->helper('url');             // Load url helper
        $this->load->database();                // load database
        $this->load->model('Hotelmodel');        // load model

    }

	function index()
	{
		$this->load->view('templates/header');
		$this->load->view('hotel_detail');
		$this->load->view('templates/footer');
	}

	function Detail($hotel){

		$data['hotel_detail'] = $this->get_hotel_detail();

		$this->load->view('templates/header');
		$this->load->view('hotel_detail',$data);
		$this->load->view('templates/footer');
	}

	function get_hotel_detail(){

		$hotel_name = ucfirst(str_replace('-', ' ', trim($this->uri->segment(2))));
        $data = $this->Hotelmodel->getHotelDetail($hotel_name);

        return $data;
	}

	

}
