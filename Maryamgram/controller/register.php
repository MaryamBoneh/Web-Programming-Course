<?php

    include "../model/database.php";

    $username = $_POST["USERNAME"];
    $first_name = $_POST["FIRST_NAME"];
    $last_name = $_POST["LAST_NAME"];
    $gender = $_POST['GENDER'];
    $password = $_POST["PASSWORD"];
    $confirm_password = $_POST["CONFIRMPASS"];
    $phone_number = $_POST["PHONENUMBER"];
    $birthday = $_POST["BIRTHDAY"];
    $email = $_POST["EMAIL"];

        
    if ($gender == "female") {
        $gender = 0;
    } 
    else {
        $gender = 1;
    }

    if($password !== $confirm_password) {
        echo "invalid password";
    }
    else {
        echo "______________________________lfhsdfljlskdjfksjdfjsdf_____________________";
        $db->query("INSERT INTO users (FIRST_NAME, LAST_NAME, USER_NAME, PASSWORD, EMAIL, BIRTHDAY, MOBILE_NUMBER, GENDER) VALUES ('$first_name', '$last_name', '$username', '$password', '$email', '$birthday', '$phone_number', $gender)");
    }

    header("Location: ../view/index.php");
?>