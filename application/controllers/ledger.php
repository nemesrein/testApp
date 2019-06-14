<?php 
    class Ledger extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model("ledger_model");
           
        }
        public function add_ledger()
        {
            if(!isset($_POST['psid']) && !isset($_POST['webhook']) || empty($_POST['psid']) || empty($_POST['webhook']))
            {
                return  false;
            }
            $psid = $_POST['psid'];
            $webhook = $_POST['webhook'];
            if(!$this->ledger_model->get_ledger($psid,$webhook))
            {
                if($this->ledger_model->save_ledger($psid,$webhook))
                {
                    echo "data added";
                }
                else{
                    echo 'data existed';
                }
            }
        }
    }
?>