<?php
    $db = new mysqli("localhost", "root", "root", "Quizer");

    if ($db->connect_error) {
        echo $db->connect_error;
        echo "Connection error";
    }
    else {
        $db-> query("SET CHARACTER SET utf8");
    }
?>