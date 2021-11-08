<?php 

$mysqli = new mysqli("db", "root", "example", "movies");

$sql = "INSERT INTO users (name, fav_color) VALUES('Lucy', 'Yellow')";
$result = $mysqli->query($sql);

$sql = "INSERT INTO users (name, fav_color) VALUES('Nick', 'Red')";
$result = $mysqli->query($sql);

$sql = "INSERT INTO users (name, fav_color) VALUES('Mark', 'Blue')";
$result = $mysqli->query($sql);

?>