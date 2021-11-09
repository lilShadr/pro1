<?php 

$mysqli = new mysqli("db", "root", "example", "movies");

$sql = "INSERT INTO moviesTable (movieId, title, genre, year, director, rating) VALUES ";
$result = $mysqli->query($sql);

?>
