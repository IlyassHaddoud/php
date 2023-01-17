<?php
    require_once "country.php";
    $country = new country();

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        header("content-type:application/json");
        echo json_encode($country->get());
    }

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        header("content-type:application/json");
        $data = json_decode(file_get_contents("php://input"),true);
        echo json_encode($country->post($data["country"]));
    }

    if($_SERVER["REQUEST_METHOD"] == "PUT"){
        header("content-type:application/json");
        $data = json_decode(file_get_contents("php://input"),true);
        echo json_encode($country->edit($data["id"],$data["country"]));
    }

    if($_SERVER["REQUEST_METHOD"] == "DELETE"){
        header("content-type:application/json");
        $data = json_decode(file_get_contents("php://input"),true);
        echo json_encode($country->delete($data["id"]));
    }
