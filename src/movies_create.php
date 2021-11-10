<?php 

require ("includes/conn_mysql.php");
require ("includes/user_functions.php");

$connection = dbConnect();


$mysqli = new mysqli("db", "root", "example", "movies");

$sql = "INSERT INTO movieTable (movieId, title, genre, year, director, rating) VALUES (1, The Hobbit, Fantasy, 2012, Peter Jackson, 3)";
$result = $mysqli->query($sql);

?>
