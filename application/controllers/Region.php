<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Region extends CI_Controller {

    
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('hotel');
        $this->load->view('templates/footer');  
    }

    public function hotel($region)
    {
       $this->index();
    }
}
