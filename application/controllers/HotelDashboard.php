<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HotelDashboard extends CI_Controller {

	function __construct() {
        parent::__construct();
    
        $this->load->helper('url');             // Load url helper
        $this->load->library('form_validation'); // load liberary
        $this->load->database();                // load database
        $this->load->model('Hoteldashboardmodel');        // load model
    }

	function index()
	{
		
		$this->load->view('templates/header');
		$this->load->view('hoteldashboard');
		$this->load->view('templates/footer');																																
	}

	function profile(){

		$rules = array(
				array('field' => 'name', 'label' => 'Name' , 'rules' => 'trim|required'),
				array('field' => 'email', 'label' => 'Email', 'rules' => 'trim|required|valid_email'),
				array('field' => 'phone', 'label' => 'Phone', 'rules' => 'trim|required|numeric'),
				array('field' => 'hotel-name', 'label' => 'Hotel Name', 'rules' => 'trim|required'),
				array('field' => 'region', 'label' => 'Region', 'rules' => 'trim|required'),
				array('field' => 'city', 'label' => 'City', 'rules' => 'trim|required')
			);

		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == false){

			$this->index();

		}
		else{

			if($this->Hoteldashboardmodel->edit_profile(1)){
				$this->session->set_flashdata('profile',array('messages' => 'Successfully Edit !', 'class' => 'alert alert-success'));
			}
			else{
				$this->session->set_flashdata('profile',array('messages' => 'Fail Edit . Try again !', 'class' => 'alert alert-danger'));
			}

			
			redirect(site_url('profile/mgm-hotel'));

		}

	}

	function create_hotel(){

		
		
	}

}
