<?php

echo "<h2>Example to connect to DB</h2>";

$mysqli = new mysqli("db", "root", "example", "movies");

$sql = 'SELECT * from users';

if($result = $mysqli->query(($sql))) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->name . " " . $user->fav_color;
    echo "<br>";
}

?>