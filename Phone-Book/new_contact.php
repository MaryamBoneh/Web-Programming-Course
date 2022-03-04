<?php

    include "database.php";
    
    $name = $_POST["name"];
    $phonenumber = $_POST["phonenumber"];
    $email = $_POST["email"];

    mysqli_query($connection, "INSERT INTO contact (NAME, PHONE_NUMBER, EMAIL) VALUES ('$name', '$phonenumber', '$email')");

    header("Location: index.php");
?>