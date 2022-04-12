
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customerctl extends CI_Controller {
	public $data=array();
	public function __construct()
    {
        parent::__construct();
        
        $this->load->library('session');
		$this->load->helper('url');
		$this->load->model("customermod");
        if($this->session->userdata('userid')==""){
            redirect(base_url());
        }
    } 
    public function customer_list() {
        if(!empty($this->input->post())) {
            //echo '<pre>'; print_r($this->input->post()); exit();
            if($this->input->post('txtsubmit')=="1") {
                $this->customermod->update_customer();
            } else if($this->input->post('txtsubmit')=="2") {
                $this->customermod->insert_customer();
            }
            redirect(base_url('features/customers'));
        }

        $this->data['activepage'] = 3;
    	$this->data['page_categ'] = 1;
    	$this->data['page_categ_name'] = 'Customer';
    	$this->data['newempno'] = "CC-".str_pad($this->customermod->get_max_customerid()['lid']+1, 4, "0", STR_PAD_LEFT);;

    	$this->data['recordlist'] = $this->customermod->get_table_resultrec('tblcustomer', 'lid <>', null, 'lid', 'desc');
    	$this->load->view('includes/header',$this->data);
		$this->load->view('View_customer/view_customer',$this->data);
		$this->load->view('includes/footer',$this->data);
	}
    public function ajax_frmcustomer() {
        $this->data['rec'] = $this->customermod->get_table_rowrec('tblcustomer', 'lrefno', $this->input->post('refno'));
        $this->load->view('View_customer/Ajax_Folder/frm_customer',$this->data);
        
    }

    
	

}