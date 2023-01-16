<?php
    class DB{
        protected $host = "localhost";
        protected $username = "root";
        protected $password = "ilyass20S@";

        public function connect()
        {
            try{
                $db = new PDO("mysql:host=$this->host;dbname=sakila", $this->username, $this->password);
                return $db;
            }catch(PDOException $e){
                exit("error :".$e->getMessage());
            }
        }
    }