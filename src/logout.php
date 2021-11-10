<?php
session_start();

unset($_SESSION['status']);

session_destroy();

header("Location:login.php");

?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8" />
    <title>Kunder - Logga in</title>
</head>

<body>
<h1> Du är utloggad! </h1>    
</body>
</html>
