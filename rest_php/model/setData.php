<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    require_once('../data/DataBase.php');
    require_once("../data/Library.php");

    $dataBase = new DataBase();
    $db = $dataBase->getConnection();

    $book = new Book($db);

    $data = json_decode(file_get_contents("php://input"));

    echo "Data $data";

    if(!empty($data->name) && !empty($data->date)) {
        $book->name = $data->name;
        $book->date = $data->date;

        if($book->create()){
            http_response_code(201);
            echo json_encode(array("message" => "Book was created."));
        }
        else{
            http_response_code(503);
            echo json_encode(array("message" => "Unable to create book."));
        }
    }
    else{
        http_response_code(400);
        echo json_encode(array("message" => "Unable to create book. Data is incomplete."));
    }
?>
