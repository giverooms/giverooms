<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Region extends CI_Controller {

    function __construct() {

        parent::__construct();
        $this->load->database();                // load database
        $this->load->model('Homemodel');        // load model

    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('hotel');
        $this->load->view('templates/footer');  
    }

    public function hotel($city)
    {

        $data = $this->get_hotel($city);
        $this->load->view('templates/header');
        $this->load->view('hotel',$data);
        $this->load->view('templates/footer');

    }

    public function get_hotel($ct_name){
        $ct_name = trim(str_replace('hotels-in-', '', $this->uri->segment(1)));
        $data['hotel_info'] = $this->Homemodel->getHotel($ct_name);

        return $data;
    }
}
