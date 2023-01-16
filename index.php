<?php
    require_once "country.php";
    $country = new country();

    if($_SERVER["REQUEST_METHOD"] === "GET"){
        header("content-type:application/json");
        echo json_encode($country->get());
    }

    if ($_SERVER["REQUEST_METHOD"] === 'POST') {
        header("content-type:application/json");
        echo file_get_contents("php://input");
    }

    // if($_SERVER["REQUEST_METHOD"] == "PUT"){
        
    // }

    // if($_SERVER["REQUEST_METHOD"] == "DELETE"){
        
    // }
