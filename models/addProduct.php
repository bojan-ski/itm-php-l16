<?php

declare(strict_types=1);


// check user/product provided data
function checkProductData(string | int | float $productData, string $productDataName): string | int | float
{
    // !str_contains($productData, 'drop') - varian of sql escape
    if (isset($productData) && !empty(trim($productData)) && !str_contains($productData, 'drop')) {
        return $productData;
    } else {
        die("{$productDataName} not provided");
    }
};

(string) $productName = checkProductData($_POST['productName'], 'Product name');
(string) $productDesc = checkProductData($_POST['productDesc'], 'Product desc');
(float) $productPrice = checkProductData($_POST['productPrice'], 'Product price');
(string) $productDeliveryDate = checkProductData($_POST['productDeliveryDate'], 'Product delivery date');
(int) $productQuantity = checkProductData($_POST['productQuantity'], 'Product quantity');

try {
    // connect to DB
    require_once 'connectToDB.php';

    // add new product to DB - query
    $addProductQuery = "INSERT INTO products (
    product_name, 
	product_desc,	
	product_price,
   	product_delivery_date,
	product_quantity
    ) 
    VALUES(
        '$productName',
        '$productDesc',
        $productPrice,
        '$productDeliveryDate',
        $productQuantity
    )";

    // add new product to DB - result
    $addProductResult = $connectionToDB->query($addProductQuery);

    //redirect user
    header("Location: ../success.php");
} catch (Exception $e) {
    //redirect user
    header("Location: ../error.php");
} finally {
    // close connection
    $connectionToDB->close();
}
