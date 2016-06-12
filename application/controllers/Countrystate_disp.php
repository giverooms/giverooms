<?php
class Countrystate_disp extends CI_Controller {
     
        function __construct() {
        parent::__construct();
        $this->load->model('countrystate','',TRUE);

    }
     
    
    function index() {
       
        $arrCountries = $this->countrystate->loadcountries();
              
        foreach ($arrCountries as $countries) {
            $arr = $countries->region_name_en;
        }
         
        $data['country'] = $arr;
         
       
        $this->load->view('loadcountrystate',$data);
    }
     
    function ajax_call() {
       
        if (isset($_POST) && isset($_POST['country'])) {
            $country = $_POST['country'];
			           $arrStates = $this->countrystate->loadstatesfromcountries($country);
                     foreach ($arrStates as $states) {
                $arrstates[$states->state] = $states->state;
            }
             
       
            print form_dropdown('state',$arrstates);
        } else {
            redirect('site');
        }
  	
	}
}
?>