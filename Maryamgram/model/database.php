<?php
    // $db = new mysqli("localhost", "root", "root", "MaryamGram");
    $db = new mysqli("localhost", "id18615416_maryam", "3Ds#!B]#uDbzTfW2", "id18615416_marygram");

    if ($db->connect_error) {
        echo $db->connect_error;
        echo "Connection error";
    }
    else {
        $db-> query("SET CHARACTER SET utf8");
    }
?>