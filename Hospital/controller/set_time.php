<?php 
    include "../model/database.php";
    $time = $_POST["TIME"];
    $day_of_week = $_POST["DAY_OF_WEEK"];

    $physician_code =
    `echo " <script type='text/JavaScript'>localStorage.getItem('physician_code'); </script>";`
    ;

    $physician_code = intval($physician_code);

    $db->query("INSERT INTO times (PHYSICIAN_CODE, TIME, DAY_OF_WEEK) VALUES ($physician_code, '$time', '$day_of_week')");

    $_SESSION["message"] = "Successfull Register";
    $_SESSION["message_type"] = "success";
    header("Location:../view/physician_panel.php");

?>