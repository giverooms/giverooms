<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct() {
      parent::__construct();
    
      $this->load->helper('url','email');             // Load url helper
      $this->load->library('form_validation','session');
      $this->load->model('Registermodel');
    }

	public function index()
	{
		
		$this->load->view('templates/header');
		$this->load->view('register');
		$this->load->view('templates/footer');																		
	}

  public function add_user(){
    
    $this->form_validation->set_rules('name','Name','trim|required');
    $this->form_validation->set_rules('email','Email','trim|required|valid_email');
    $this->form_validation->set_rules('phone','Phone','trim|required|numeric');
    $this->form_validation->set_rules('password','Password','trim|required');
    $this->form_validation->set_rules('repassword','Confirm Password','trim|required');
    $this->form_validation->set_rules('terms','Terms','trim|required');
    $this->form_validation->set_rules('user','User Type','trim|required');


    if($this->form_validation->run() == FALSE)
    {

      $this->index();

    }

    else
    {
      $email = $this->input->post('email');
      $name = $this->input->post('name');

      if($this->Registermodel->add_user() == true){

        $sub = "GiveRooms Verification Mail";
        $msg = "<html><p>Dear ".$name.",</p><p>Thank you for registration on GiveRooms.com,<br/>You need to activate by clicking link below.</p><p>Active Link:<br/><a href='http://www.giverooms.com/register.php?passkey='>http://www.giverooms.com/register.php?passkey=</a></p></html>";

        $this->session->set_flashdata('register', array('messages' => 'successfully !We send verification link to you email.See in your email','class' => 'alert-success')); 

        send_email('',$email,'',$sub,$msg);
        
        redirect(site_url('register.html'));
      }
      else{
        //redirect(site_url('login.html'));
      }

    }
  }

  function login(){
    $rules = array(
      array('field'=>'username', 'label'=>'Username', 'rules'=>'trim|required|valid_email'),
      array('field'=>'password','label'=>'Password', 'rules'=>'required')
    );

    $this->form_validation->set_rules($rules);
    if($this->form_validation->run() == FALSE)
    {
      redirect(site_url('/'));
    }
    else{

      if($this->Registermodel->login() == true){
        redirect(site_url('profile/mgm-hotel'));
      }
      else{
        redirect(site_url('register.html'));
      }

    }
  }

}
