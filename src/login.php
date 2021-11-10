<?php 

    session_start();

    require ("includes/conn_mysql.php");
    require ("includes/user_functions.php");

    $connection = dbConnect();

    $mysqli = new mysqli('db','root', 'example', 'movies') or die(mysqli_error($mysqli));

    if (isset($_POST['save'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
    

    /*$mysqli->query("INSERT INTO users (username, password) VALUES ('$username', '$password')") or die($mysqli->error);*/
}
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

<?php
        if (isset($_GET['invalid_login'])) {
            echo "Your username and password combination is invalid <br>";
        }
        ?>

    <header>
        <nav>
            <div class="logo">PRO 1</div>

            <ul class="headerlinks">
                <li><a href="index.php">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <div class="formCon">
        <h1 class="headerForm">Log in</h1>    
        <form action="checklogin.php" method="post" class="form-example">
            <div class="form">
            <label for="username">Username: </label>
            <input type="text" name="username" id="username" required>
            </div>
            <div class="form">
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" required>
            </div>
            <div class="form">
            <input type="submit" value="Log in">
            </div>
            </form>
            </div>
    </main>
</body>
</html>