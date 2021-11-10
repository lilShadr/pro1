<?php
 session_start();

 require ("includes/conn_mysql.php");
 require ("includes/user_functions.php");

 $connection = dbConnect();

 $mysqli = new mysqli('db','root', 'example', 'movies') or die(mysqli_error($mysqli));

    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($connection, $username);  
        $password = mysqli_real_escape_string($connection, $password);  
      
        $sql = "select * from users where username = '$username' and password = '$password'";  
        $result = mysqli_query($connection, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION['status'] = "ok";
            header("Location: movies.php");
            exit;
        } else {
            header("Location: login.php?invalid_login");
            exit;
        }

?>
