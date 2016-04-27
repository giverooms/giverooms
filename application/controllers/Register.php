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
    $rules = array(
      array('field'=>'name', 'label'=>'Name', 'rules'=>'trim|required'),
      array('field'=>'email', 'label'=>'Email', 'rules'=>'trim|required|valid_email'),
      array('field'=>'phone', 'label'=>'Phone', 'rules'=>'trim|required'),
      array('field'=>'password','label'=>'Password', 'rules'=>'required')
     // array('field'=>'repassword', 'label'=>'Confirm Password', 'rules'=>'required')
    );

    $this->form_validation->set_rules($rules);
    if($this->form_validation->run() == FALSE)
    {
      redirect(site_url('register.html'));
    }
    else
    {
      $email = $this->input->post('email');
      $name = $this->input->post('name');

      if($this->Registermodel->add_user() == true){

        $sub = "GiveRooms Verification Mail";
        $msg = "<html><p>Dear ".$name.",</p><p>Thank you for registration on GiveRooms.com,<br/>You need to activate by clicking link below.</p><p>Active Link:<br/><a href='http://www.giverooms.com/register.php?passkey='>http://www.giverooms.com/register.php?passkey=</a></p></html>";

        $this->session->set_flashdata('register', array('messages' => 'Your register successfully !We send verification link to you email.See in your email','class' => 'alert-success')); 

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
        redirect(site_url('/'));
      }

    }
  }

}
