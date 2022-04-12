<?php
class Employeemod extends CI_Model {
    public function __construct() {
        $this->load->database();
		date_default_timezone_set('Asia/Manila');
    }
    public function generate_hash() {
    	return substr(md5(rand(1000,9999)),0,3).date("md").substr(md5(rand(1000,9999)),0,3).date("Y").substr(md5(date("YmdHis").rand(1000,9999)),0,3).date("His").substr(md5(rand(1000,9999)),0,3);
    }
    public function get_max_employeeid() {
    	$this->db->select('lid');
    	$this->db->from('tblemployee');
    	$this->db->order_by('lid', 'desc');
    	$this->db->limit(1);

        $query = $this->db->get();
        return $query->row_array();
    }
    public function insert_employee() {
    	$data = array(  
    		"lrefno"=> $this->generate_hash(),
    		"lempid"=> $this->input->post('txtempid'),
            "llname"=> $this->input->post('txtlname'),
            "lfname"=> $this->input->post('txtfname'),
            "ltitle"=> $this->input->post('txttitle'),
            "lemail"=> $this->input->post('txtemail'),
            "lreport_to"=> $this->input->post('txtreportto'),
            "lbirth_date"=> $this->input->post('txtbirthday'),
            "lhire_date"=> $this->input->post('txthiredate'),
            "lsalary"=> $this->input->post('txtsalary'),
            "laddress"=> $this->input->post('txtaddress'),
            "lcity"=> $this->input->post('txtcity'),
            "lstate"=> $this->input->post('txtstate'),
            "lcountry"=> $this->input->post('txtcountry'),
            "lpostalcode"=> $this->input->post('txtpostalcode'),
            "lphone"=> $this->input->post('txtphone'),
            "lfax"=> $this->input->post('txtfax'),
            "ltimestamp"=>date("Y-m-d H:i:s"),
        );
        $this->db->insert("tblemployee", $data);
    }
    public function update_employee() {
    	$data = array(  
            "llname"=> $this->input->post('txtlname'),
            "lfname"=> $this->input->post('txtfname'),
            "ltitle"=> $this->input->post('txttitle'),
            "lemail"=> $this->input->post('txtemail'),
            "lreport_to"=> $this->input->post('txtreportto'),
            "lbirth_date"=> $this->input->post('txtbirthday'),
            "lhire_date"=> $this->input->post('txthiredate'),
            "lsalary"=> $this->input->post('txtsalary'),
            "laddress"=> $this->input->post('txtaddress'),
            "lcity"=> $this->input->post('txtcity'),
            "lstate"=> $this->input->post('txtstate'),
            "lcountry"=> $this->input->post('txtcountry'),
            "lpostalcode"=> $this->input->post('txtpostalcode'),
            "lphone"=> $this->input->post('txtphone'),
            "lfax"=> $this->input->post('txtfax'),
        );
        $this->db->where('lrefno', $this->input->post('refno'));
        $this->db->update('tblemployee', $data);
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