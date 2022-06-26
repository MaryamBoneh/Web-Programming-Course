<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    $_SESSION["login_status"] = false;
    header("Location: ../view/index.php");
?>