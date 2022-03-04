<?php

    include "database.php";
    $name = $_POST["name"];
    $message = $_POST["message"];

    mysqli_query($connection,"INSERT INTO messages (NAME, TEXT) VALUES ('$name', '$message')");

    header("Location: index.php");
?>