<?php
declare(strict_types=1);


// varian of sql escape
(string) $selectedProductID = strlen($_GET['id']) < 3 ? $_GET['id'] : '1' ;

try {
    // connect to DB
    require_once 'connectToDB.php';
    
    // get products from DB - query
    $getSelectedProductQuery = "SELECT * FROM products WHERE id='{$selectedProductID}'";

    // get products from DB - response
    $getSelectedProductResponse = $connectionToDB->query($getSelectedProductQuery);

    // get products from DB - result
    (array) $getSelectedProductResult = $getSelectedProductResponse->fetch_assoc(); 
} catch (Exception $e) {
    //redirect user
    header("Location: ../error.php");
} finally {
    // close connection
    $connectionToDB->close();
}