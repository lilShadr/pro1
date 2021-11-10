<?php 

    require ("includes/conn_mysql.php");
    require ("includes/user_functions.php");

    $connection = dbConnect();


$mysqli = new mysqli("db", "root", "example", "movies");

$sql = "DELETE FROM moviesTable (movieId, title, genre, year, director, rating) VALUES ";
$result = $mysqli->query($sql);

?>