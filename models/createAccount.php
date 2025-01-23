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

(string) $email = checkUserProvidedData($_POST['email'], 'Email');
(string) $password = checkUserProvidedData($_POST['password'], 'Password');
(string) $user_data_of_birth = checkUserProvidedData($_POST['user_data_of_birth'], 'Date of birth');

try {
    // connect to DB
    require_once 'connectToDB.php';

    // add new user to DB - query
    $createAccountQuery = "INSERT INTO users (
    user_email, 
	user_password,
    user_data_of_birth	
    ) 
    VALUES(
        '$email',
        '$password',
        '$user_data_of_birth'
    )";

    // add new user to DB - result 
    $createAccountResult = $connectionToDB->query($createAccountQuery);

    //redirect user
    header("Location: ../success.php");
} catch (Exception $e) {
    //redirect user
    header("Location: ../error.php");
} finally {
    // close connection
    $connectionToDB->close();
}