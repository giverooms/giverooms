<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends CI_Controller {

	
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('hotel_detail');
		$this->load->view('templates/footer');
	}

	public function Detail($room){
		$this->load->view('templates/header');
		$this->load->view('room_detail');
		$this->load->view('templates/footer');
	}

}
