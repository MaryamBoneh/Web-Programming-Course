<?php 
    include "../model/database.php";
    $time = $_POST["TIME"];

    $national_code =
    `echo " <script type='text/JavaScript'>localStorage.getItem('national_code'); </script>";`
    ;
    $physician_code =
    `echo " <script type='text/JavaScript'>localStorage.getItem('physician_code'); </script>";`
    ;
    $insurance_code =
    `echo " <script type='text/JavaScript'>localStorage.getItem('insurance_code'); </script>";`
    ;
    $national_code = intval($national_code);
    $physician_code = intval($physician_code);
    $insurance_code = intval($insurance_code);

    $db->query("INSERT INTO visits(PHYSICIAN_CODE,PATIENT_CODE,TIME) VALUES($physician_code,$insurance_code,$time)");

    $_SESSION["message"] = "Successfull Register";
    $_SESSION["message_type"] = "success";
    header("Location:../view/index.php");

?>