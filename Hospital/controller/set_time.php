<?php 
    if (session_status() !== PHP_SESSION_NONE) {
        session_destroy();
    }
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    include "../model/database.php";
    $time = $_POST["TIME"];
    $day_of_week = $_POST["DAY_OF_WEEK"];

    $physician_code = $_SESSION["physician_code"];
    $physician_code = intval($physician_code);


    $db->query("INSERT INTO times (PHYSICIAN_CODE, TIME, DAY_OF_WEEK) VALUES ($physician_code, '$time', '$day_of_week')");

    $_SESSION["message"] = "Successfull Register";
    $_SESSION["message_type"] = "success";
    header("Location:../view/physician_panel.php");

?>