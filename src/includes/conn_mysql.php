<?php

function dbConnect(){
    $connection = mysqli_connect("172.21.0.2", "root", "example", "movies") or die("Could not connect");
    mysqli_select_db($connection, "movies") or die("Could not select database");
    return $connection;
}

function dbDisconnect($connection){
    mysqli_close($connection);
}


?>