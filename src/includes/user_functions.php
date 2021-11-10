<?php

/* Visa alla kunder */

function getAllUsers($connection){
    $query = "SELECT * FROM users ORDER BY LastName ASC";
    $result = mysqli_query($connection, $query) or die("Query failed: $query");

    return $result; 
}

function getUserData($connection, $userId){
    $query = "SELECT * FROM user
        WHERE userId=". $userId;

$result = mysqli_query($connection, $query) or die("Query failed: $query");

$row = mysqli_fetch_assoc($result);

return $row;
}

function updateUser($connection){
    $name = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    $editid = $_POST['uptadeid'];

    $query = "UPDATE user
        SET userName ='$name', email='$email'
        WHERE userId = ". $editid;

        $result = mysqli_query($connection, $query) or die("Query failed: $query");
}

?>