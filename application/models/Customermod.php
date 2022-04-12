<?php
class Customermod extends CI_Model {
    public function __construct() {
        $this->load->database();
		date_default_timezone_set('Asia/Manila');
    }
    public function generate_hash() {
    	return substr(md5(rand(1000,9999)),0,3).date("md").substr(md5(rand(1000,9999)),0,3).date("Y").substr(md5(date("YmdHis").rand(1000,9999)),0,3).date("His").substr(md5(rand(1000,9999)),0,3);
    }
    public function get_max_customerid() {
    	$this->db->select('lid');
    	$this->db->from('tblcustomer');
    	$this->db->order_by('lid', 'desc');
    	$this->db->limit(1);

        $query = $this->db->get();
        return $query->row_array();
    }
    public function insert_customer() {
    	$data = array(  
    		"lrefno"=> $this->generate_hash(),
    		"lcustomerid"=> $this->input->post('txtempid'),
            "llname"=> $this->input->post('txtlname'),
            "lfname"=> $this->input->post('txtfname'),
            "lcompany"=> $this->input->post('txtcompany'),
            "lemail"=> $this->input->post('txtemail'),
            "laddress"=> $this->input->post('txtaddress'),
            "lcity"=> $this->input->post('txtcity'),
            "lstate"=> $this->input->post('txtstate'),
            "lcountry"=> $this->input->post('txtcountry'),
            "lpostalcode"=> $this->input->post('txtpostalcode'),
            "lphone"=> $this->input->post('txtphone'),
            "lfax"=> $this->input->post('txtfax'),
            "ltimestamp"=>date("Y-m-d H:i:s"),
        );
        $this->db->insert("tblcustomer", $data);
    }
    public function update_customer() {
    	$data = array(  
            "llname"=> $this->input->post('txtlname'),
            "lfname"=> $this->input->post('txtfname'),
            "lcompany"=> $this->input->post('txtcompany'),
            "lemail"=> $this->input->post('txtemail'),
            "laddress"=> $this->input->post('txtaddress'),
            "lcity"=> $this->input->post('txtcity'),
            "lstate"=> $this->input->post('txtstate'),
            "lcountry"=> $this->input->post('txtcountry'),
            "lpostalcode"=> $this->input->post('txtpostalcode'),
            "lphone"=> $this->input->post('txtphone'),
            "lfax"=> $this->input->post('txtfax'),
        );
        $this->db->where('lrefno', $this->input->post('refno'));
        $this->db->update('tblcustomer', $data);
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