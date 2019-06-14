<?php
    class Ledger_model extends CI_Model
    {
        function __construct()
        {
            $this->load->database();
        }
        public function save_ledger($psid,$webhook)
        {
            $insert = $this->db->query("INSERT into ledger (psid,webhook,dateadded) Values ('$psid','$webhook',NOW())");
            if($insert)
            {
                return true;
            }

            return false;
        }
        public function get_ledger($psid,$webhook)
        {
            $select = $this->db->query("SELECT count(*) as cnt from ledger where psid = '$psid' and webhook = '$webhook'");

            $rows = $select->result_array();
            return $rows[0]['cnt'];
        }
    }
?>