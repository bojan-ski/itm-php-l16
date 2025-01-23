<?php
declare(strict_types=1);


try {
    // connect to DB
    require_once 'connectToDB.php';
    
    // get products from DB - query
    $getProductsListQuery = "SELECT * FROM products";

    // get products from DB - response
    $getProductsListResponse = $connectionToDB->query($getProductsListQuery);

    // get products from DB - result
    (array) $getProductsListResult = $getProductsListResponse->fetch_all(MYSQLI_ASSOC);   
} catch (Exception $e) {
    //redirect user
    header("Location: ../error.php");
} finally {
    // close connection
    $connectionToDB->close();
}
