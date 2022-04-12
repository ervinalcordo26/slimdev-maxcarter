<?php
class Guestmod extends CI_Model {
    public function __construct() {
        $this->load->database();
		date_default_timezone_set('Asia/Manila');
    }
    public function generate_hash() {
    	return substr(md5(rand(1000,9999)),0,3).date("md").substr(md5(rand(1000,9999)),0,3).date("Y").substr(md5(date("YmdHis").rand(1000,9999)),0,3).date("His").substr(md5(rand(1000,9999)),0,3);
    }
    public function validate_useraccount() {
        $this->db->from("tblaccount");
        $this->db->where("lusername", $this->input->post('txtusername'));
        $this->db->where("lpassword", md5($this->input->post('pass')));
        $query = $this->db->get();
        //echo $this->db->last_query(); exit();
        $row = $query->row_array(); 
        if ($query->num_rows() > 0)
        {
            return true;
        }else{
            return false;
        }
    }
    public function get_accountinfo() {
        $this->db->from("tblaccount");
        $this->db->where("lusername", $this->input->post('txtusername'));
        $this->db->where("lpassword", md5($this->input->post('pass')));
        $query = $this->db->get();
        return $query->row_array();
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