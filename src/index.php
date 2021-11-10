<?php
    require ("includes/conn_mysql.php");
    require ("includes/user_functions.php");



   $mysqli = new mysqli('db','root', 'example', 'movies') or die(mysqli_error($mysqli));

    if (isset($_POST['save'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $favoritemovie = $_POST['favoritemovie'];
        $username = $_POST['username'];
        $password = $_POST['password'];
    }

    $mysqli->query("INSERT INTO users (firstname, lastname, email, favoritemovie, username, password) VALUES ('$firstname', '$lastname', '$email', '$favoritemovie', '$username', '$password')") or die($mysqli->error);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>projekt1</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo">PRO 1</div>

            <ul class="headerlinks">
                <li><a href="login.php">Log In</a></li>
                <li><a href="index.php">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <div class="formCon">
        <h1 class="headerForm">Sign up</h1>    
        <form action="" method="post" class="form-example">
            <div class="form">
            <label for="name">First Name: </label>
            <input type="text" name="firstName" id="firstName" required>
            </div>
            <div class="form">
            <label for="name">Last Name: </label>
            <input type="text" name="lastName" id="lastName" required>
            </div>
            <div class="form">
            <label for="email">E-mail: </label>
            <input type="email" name="email" id="email" required>
            </div>
            <div class="form">
            <label for="favoritemovie">Favorite Movie: </label>
            <input type="text" name="favoritemovie" id="favoritemovie" required>
            </div>
            <div class="form">
            <label for="username">Username: </label>
            <input type="text" name="username" id="username" required>
            </div>
            <div class="form">
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" required>
            </div>
            <div class="form">
            <input type="submit" name="save" value="Sign Up">
            </div>
            </form>
            </div>
    </main>
</body>
</html>
