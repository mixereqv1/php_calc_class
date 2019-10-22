<?php
    class db {
        private $hn, $un, $pw, $db;

        // public function __construct($hn,$un,$pw,$db) {
        //     $this->hn = $hn;
        //     $this->un = $un;
        //     $this->pw = $pw;
        //     $this->db = $db;
        // }

        public function connect() {
            // $mysqli = new mysqli($this->hn, $this->un, $this->pw, $this->db);
            // return $mysqli;
            $conn = new mysqli('172.16.131.125','02_ral','matiozo1w','02_ral');
            // $conn->connect();
            return $conn;
        }
    }

?>