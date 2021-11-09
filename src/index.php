<?php

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
        <form action="login.php" method="post" class="form-example">
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
            <label for="favoriteMovie">Favorite Movie: </label>
            <input type="text" name="favoriteMovie" id="favoriteMovie" required>
            </div>
            <div class="form">
            <label for="username">Username: </label>
            <input type="text" name="username" id="username" required>
            </div>
            <div class="form">
            <label for="Password">Password: </label>
            <input type="password" name="password" id="password" required>
            </div>
            <div class="form">
            <input type="submit" value="Sign Up">
            </div>
            </form>
            </div>
    </main>
</body>
</html>
