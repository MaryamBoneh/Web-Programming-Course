<?php
    $db = mysqli_connect("localhost", "root", "root", "Quizer");

    if ($db-> connect_error) {
        echo (mysqli_connect_error());
        echo "Connection error";
    }
    else {
        $db-> queriy("SET CHARACHTER SEET utf8");
    }
?>