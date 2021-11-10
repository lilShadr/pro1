<?php

session_start();
if(!isset($_SESSION['status']) || ($_SESSION['status'] != "ok")){
    header("Location: login.php");
}

require("includes/conn_mysql.php");
require("includes/user_functions.php");

$connection = dbConnect();

$allUsers = getAllUsers($connection);


?>
<html lang="sv">
    <head>
        <meta charset="utf-8" />
        <title>Kunder - Visa alla</title>
    </head>

    <body>
        <h1>Kunder</h1>

        <ul>
            <?php
                //loopa igenom arrayen som innehåller alla kunder i tabellen
                while($row = mysqli_fetch_array($allCustomers)){
            ?>
                <li>
                    <?php echo $row['userName'];?> <a href="users_update.php?editid=<?php echo $row['userId'];?>">Uppdatera</a>
                </li>
            <?php
                }
            ?>
        </ul>
        <?php
            // Stänger databaskopplingen
            dbDisconnect($connection); 
        ?>
    </body>
</html>