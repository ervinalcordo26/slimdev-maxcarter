<?php
class Invoicemod extends CI_Model {
    public function __construct() {
        $this->load->database();
		date_default_timezone_set('Asia/Manila');
    }
    public function generate_hash() {
    	return substr(md5(rand(1000,9999)),0,3).date("md").substr(md5(rand(1000,9999)),0,3).date("Y").substr(md5(date("YmdHis").rand(1000,9999)),0,3).date("His").substr(md5(rand(1000,9999)),0,3);
    }
    public function get_invoice_list() {
        $this->db->select('i.*, c.lfname, c.llname');
        $this->db->from('tblinvoice i');
        $this->db->join('tblcustomer c', 'c.lrefno=i.lcustomerid');
        $this->db->order_by('i.lid', 'desc');

        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_invoicedet($refno) {
        $this->db->select('i.*, c.lfname, c.llname');
        $this->db->from('tblinvoice i');
        $this->db->join('tblcustomer c', 'c.lrefno=i.lcustomerid', 'left');
        $this->db->where('i.lrefno', $refno);

        $query = $this->db->get();
        return $query->row_array();
    }
    public function get_max_invoiceid() {
    	$this->db->select('lid');
    	$this->db->from('tblinvoice');
    	$this->db->order_by('lid', 'desc');
    	$this->db->limit(1);

        $query = $this->db->get();
        return $query->row_array();
    }
    public function insert_invoice() {
    	$data = array(  
    		"lrefno"=> $this->generate_hash(),
    		"linvoiceno"=> $this->input->post('txtinvno'),
            "lcustomerid"=> $this->input->post('txtcustomer'),
            "linvoicedate"=> date("Y-m-d"),
            "lbillingaddress"=> $this->input->post('txtaddress'),
            "lbillingcity"=> $this->input->post('txtcity'),
            "lbillingstate"=> $this->input->post('txtstate'),
            "lbillingcountry"=> $this->input->post('txtcountry'),
            "lbillingpostal"=> $this->input->post('txtpostalcode'),
            "ltotal"=> $this->input->post('txttotal'),
            "ltimestamp"=>date("Y-m-d H:i:s"),
        );
        $this->db->insert("tblinvoice", $data);
    }
    public function update_invoice() {
    	$data = array(  
            "lbillingaddress"=> $this->input->post('txtaddress'),
            "lbillingcity"=> $this->input->post('txtcity'),
            "lbillingstate"=> $this->input->post('txtstate'),
            "lbillingcountry"=> $this->input->post('txtcountry'),
            "lbillingpostal"=> $this->input->post('txtpostalcode'),
            "ltotal"=> $this->input->post('txttotal'),
        );
        $this->db->where('lrefno', $this->input->post('refno'));
        $this->db->update('tblinvoice', $data);
    }
    public function get_table_rowrec($table, $field, $val) {
        $this->db->from($table);
        $this->db->where($field, $val);

        $query = $this->db->get();
        return $query->row_array();
    }
    public function get_table_resultrec($table, $field, $val, $order_field=null, $order_val=null) {
        $this->db->from($table);
        $this->db->where($field, $val);
        if($order_field!="" && $order_val!="") {
        	$this->db->order_by($order_field, $order_val);
        }
        $query = $this->db->get();
        return $query->result_array();
    }
				
}
?>