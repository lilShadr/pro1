<?php 

$mysqli = new mysqli("db", "root", "example", "movies");

$sql = "INSERT INTO users (userId, FirstName, LastName, Email, FavoriteMovie, Username, Password) VALUES ";
$result = $mysqli->query($sql);

?>

