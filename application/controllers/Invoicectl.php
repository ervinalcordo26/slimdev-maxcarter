
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Invoicectl extends CI_Controller {
	public $data=array();
	public function __construct()
    {
        parent::__construct();
        
        $this->load->library('session');
		$this->load->helper('url');
		$this->load->model("invoicemod");
        if($this->session->userdata('userid')==""){
            redirect(base_url());
        }
    } 
    public function invoice_list() {
        if(!empty($this->input->post())) {
            //echo '<pre>'; print_r($this->input->post()); exit();
            if($this->input->post('txtsubmit')=="1") {
                $this->invoicemod->update_invoice();
            } else if($this->input->post('txtsubmit')=="2") {
                $this->invoicemod->insert_invoice();
            }
            redirect(base_url('features/invoices'));
        }

        $this->data['activepage'] = 4;
    	$this->data['page_categ'] = 1;
    	$this->data['page_categ_name'] = 'Invoice';
    	$this->data['invoiceno'] = "INV-".str_pad($this->invoicemod->get_max_invoiceid()['lid']+1, 4, "0", STR_PAD_LEFT);
        $this->data['customerlist'] = $this->invoicemod->get_table_resultrec('tblcustomer', 'lid <>', null, 'lid', 'desc');
    	$this->data['recordlist'] = $this->invoicemod->get_invoice_list();
        //echo '<pre>'; print_r($this->data['recordlist']); exit();
    	$this->load->view('includes/header',$this->data);
		$this->load->view('View_Invoice/view_invoice',$this->data);
		$this->load->view('includes/footer',$this->data);
	}
    public function ajax_frminvoice() {
        $this->data['rec'] = $this->invoicemod->get_invoicedet($this->input->post('refno'));
        $this->load->view('View_Invoice/Ajax_Folder/frm_invoice',$this->data);
        
    }

    
	

}