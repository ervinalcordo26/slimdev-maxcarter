
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employeectl extends CI_Controller {
	public $data=array();
	public function __construct()
    {
        parent::__construct();
        
        $this->load->library('session');
		$this->load->helper('url');
		$this->load->model("employeemod");
        if($this->session->userdata('userid')==""){
            redirect(base_url());
        }
    } 
    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }
    public function employee_list() {
        if(!empty($this->input->post())) {
            //echo '<pre>'; print_r($this->input->post()); exit();
            if($this->input->post('txtsubmit')=="1") {
                $this->employeemod->update_employee();
            } else if($this->input->post('txtsubmit')=="2") {
                $this->employeemod->insert_employee();
            }
            redirect(base_url('features/employees'));
        }

        $this->data['activepage'] = 2;
    	$this->data['page_categ'] = 1;
    	$this->data['page_categ_name'] = 'Employee';
    	$this->data['newempno'] = "EE-".str_pad($this->employeemod->get_max_employeeid()['lid']+1, 4, "0", STR_PAD_LEFT);;

    	$this->data['recordlist'] = $this->employeemod->get_table_resultrec('tblemployee', 'lid <>', null, 'lid', 'desc');
    	$this->load->view('includes/header',$this->data);
		$this->load->view('View_Employee/view_employee',$this->data);
		$this->load->view('includes/footer',$this->data);
	}
    public function ajax_frmemployee() {
        $this->data['rec'] = $this->employeemod->get_table_rowrec('tblemployee', 'lrefno', $this->input->post('refno'));
        $this->load->view('View_Employee/Ajax_Folder/frm_employee',$this->data);
        
    }

    
	

}