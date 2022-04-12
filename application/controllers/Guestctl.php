<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guestctl extends CI_Controller {
	public $data=array();
	public function __construct()
    {
        parent::__construct();
        
        $this->load->library('session');
		$this->load->helper('url');
		$this->load->model("guestmod");
        if($this->session->userdata('userid')!=""){
            redirect(base_url()."features/employees");
        }
    } 
    
    public function login() {
        $this->data['username'] = '';
        if(!empty($this->input->post())) {

            if($this->guestmod->validate_useraccount()) {
                $this->session->set_userdata("userid", $this->guestmod->get_accountinfo()['lid']);
                redirect(base_url('dashboard'));
            } else {
                $this->data['error'] = "Incorrect login information!";
                $this->data['username'] = $this->input->post('username');
                
            }
        }
        
        $this->load->view('View_Login/login',$this->data);
	}

    
	

}