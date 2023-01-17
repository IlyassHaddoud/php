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

        public function post($country){
            $stmt = $this->con->prepare("insert into country(country) values (:country)");
            return ["added"=>$stmt->execute(["country"=>$country]) ? true : false] ;
        }

        public function edit($id,$country){
            $stmt = $this->con->prepare("update country set country = :country where country_id = :id");
            return ["updated"=>$stmt->execute(["id"=>$id,"country"=>$country]) ? true : false] ;
        }

        public function delete($id){
            $stmt = $this->con->prepare("delete from country where country_id = :id");
            return ["deleted"=>$stmt->execute(["id"=>$id]) ? true : false] ;
        }
        
    }