<?php

/* Visa alla kunder */

function getAllUsers($connection){
    $query = "SELECT * FROM users ORDER BY LastName ASC";
    $result = mysqli_query($conn, $query) or die("Query failed: $query");

    return $result; 
}

?>