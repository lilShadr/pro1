<?php
session_start();
if(!isset($_SESSION['status']) || ($_SESSION['status'] != "ok")){
    header("Location: login.php");
}


?>