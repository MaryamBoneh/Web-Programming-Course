<?php

    include "database.php";
    $name = $_POST["name"];
    $message = $_POST["message"];

    $mysqli_query = mysql_query("INSERT INTO messages (name, message) VALUES ('$name', '$message')");

    header("Location: index.php");
?>