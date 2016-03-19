<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct() {
        parent::__construct();
    
       $this->load->helper('url');             // Load url helper
       $this->load->library('form_validation');
       $this->load->model('Registermodel');
    }

	public function index()
	{
		
		$this->load->view('templates/header');
		$this->load->view('register');
		$this->load->view('templates/footer');																		
	}

  public function add_user(){
    $rules = array(
    array('field'=>'username','label'=>'User Name','rules'=>'trim|required|min_length[4]|max_length[12]'),
    array('field'=>'email','label'=>'Email','rules'=>'trim|required|valid_email'),
    array('field'=>'password','label'=>'Password','rules'=>'trim|required|min_length[6]'),
    array('field'=>'gender','label'=>'Gender','rules'=>'required')
    );

    $this->form_validation->set_rules($rules);
    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('register_view');
    }
    else
    {
      $this->user_model->register_user();
      $this->load->view('success');
    }
  }

}
