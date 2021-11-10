<?php
/*
//Startar upp sessionen
session_start();

require ("includes/conn_mysql.php");
require ("includes/user_functions.php");

$connection = dbConnect();


//Användare och lösenord för sidan


//Hämta användaer och lösen från formuläret
//$checkUser = $_POST['username'];
//$checkPass = $_POST['password'];
$checkUser = mysqli_real_escape_string($connection, $_POST['username']);
$checkPassword = mysqli_real_escape_string($connection, $_POST['password']);

$query = "SELECT * FROM users
            WHERE username = '$checkUser' AND '$checkPassword'";

$result = mysqli_query($connection, $query) or die("Query failed: $query");

$row = mysqli_fetch_assoc($result);

$count = mysqli_num_rows($result);

// Kontrollera sessionen
if($checkUser == $user && $checkPass == $pass){
    $_SESSION['status'] = "ok";
    header("Location: movies.php");
    exit;
} else {
    header("Location: login.php?invalid_login");
    exit;
}


/*session_start();

require("includes/conn_mysql.php");

$connection = dbConnect();

$checkUser = mysqli_real_escape_string($conn, $_POST['txtUser']);
$checkPassword = mysqli_real_escape_string($conn, $_POST['txtPassword']);

$query = "SELECT * FROM users
            WHERE Email = '$checkUser'";

$result = mysqli_query($connection, $query) or die("Query failed: $query");

$row = mysqli_fetch_assoc($result);

$count = mysqli_num_rows($result);

if($count == 1) {
    if(password_verify($checkPassword, $row["Password"])) {
        $_SESSION['status'] = "ok";
        header("Location: users_read.php");
    }
}

header("Location: login.php");

mysqli_close($connection);
*/
?>