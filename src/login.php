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
                <li><a href="index.php">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <div class="formCon">
        <h1 class="headerForm">Log in</h1>    
        <form action="movies.php" method="get" class="form-example">
            <div class="form">
            <label for="username">Username: </label>
            <input type="text" name="username" id="username" required>
            </div>
            <div class="form">
            <label for="Password">Password: </label>
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