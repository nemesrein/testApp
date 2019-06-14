<?php
    class Test extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
        }
        public function home()
        {
            $psid = 2001495413281334;
            $webhook = "https/portal.beschatbot.com/bot/fbb";
            $data = array (
                "psid" => "bar",
                "webhook" => "https/portal.beschatbot.com/bot/fbb",
            );
            $cSession = curl_init("http://localhost/testApp/ledger/add_ledger");
            curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
            curl_setopt($cSession, CURLOPT_POST, 1);
            curl_setopt($cSession, CURLOPT_POSTFIELDS, $data);
            $result=curl_exec($cSession);
            curl_close($cSession);
            echo $result;
        }
    }
?>