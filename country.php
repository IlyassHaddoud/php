<?php
    require_once "db.php";

    class country{
        private $con;

        public function __construct()
        {
            $db = new DB();
            $this->con = $db->connect();
        }

        public function get(){
            $query = "select * from country";
            $stmt = $this->con->query($query);
            return $stmt->fetchAll();
        }

        
    }