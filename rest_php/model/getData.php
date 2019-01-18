<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    require_once('../data/DataBase.php');
    require_once("../data/Library.php");

    $dataBase = new DataBase();
    $db = $dataBase->getConnection();

    $book = new Book($db);

    $stmt = $book->read();
    $num = $stmt->rowCount();

    if ($num > 0) {
        $products_arr = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $product_item = array(
                "id" => $id,
                "name" => $name,
                "date" => $date,
            );

            array_push($products_arr, $product_item);
        }

        http_response_code(200);

        echo json_encode($products_arr);
    } else {
        http_response_code(404);

        echo json_encode(array("message" => "No book found."));
    }
?>
