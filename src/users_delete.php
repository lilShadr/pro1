<?php 
session_start();
if(!isset($_SESSION['status']) || ($_SESSION['status'] != "ok")){
    header("Location: login.php");
}


    require ("includes/conn_mysql.php");
    require ("includes/user_functions.php");

$mysqli = new mysqli("db", "root", "example", "movies");

$sql = "DELETE FROM users (userId, FirstName, LastName, Email, FavoriteMovie, Username) VALUES ";
$result = $mysqli->query($sql);

?>