<?php
declare(strict_types=1);


// check user/account provided data
function checkUserProvidedData(string $userProvidedData, string $userProvidedDataTitle): string
{
    // !str_contains($userProvidedData, 'drop') - varian of sql escape
    if (isset($userProvidedData) && !empty(trim($userProvidedData)) && !str_contains($userProvidedData, 'drop')) {
        return $userProvidedData;
    } else {
        die("{$userProvidedDataTitle} not provided");
    }
};

(string) $userEmail = checkUserProvidedData($_POST['email'], 'Email');
(string) $userPassword = checkUserProvidedData($_POST['password'], 'Password');

try {
    // connect to DB
    require_once 'connectToDB.php';

    // add new user to DB - query
    $createAccountQuery = "SELECT * FROM users WHERE user_email = '{$userEmail}' AND user_password = '{$userPassword}'";

    // add new user to DB - response 
    $createAccountResponse = $connectionToDB->query($createAccountQuery);

    // add new user to DB - result 
    if ($createAccountResponse->num_rows > 0) {
        //redirect user
        header("Location: ../success.php");
    } else {
        die('No account exist with entered credentials');
    }
} catch (Exception $e) {
    //redirect user
    header("Location: ../error.php");
} finally {
    // close connection
    $connectionToDB->close();
}
