<?php
session_start();
if ($_SESSION['canAccess']= false){
    header('location: index.php');
    exit;
}

echo"WELCOME TO DASHBOARD";

?>