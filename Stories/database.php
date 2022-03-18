<?php
    $db = new mysqli("localhost", "root", "root", "Stories");

    if ($db->connect_error) {
        echo $db->connect_error;
        echo "Connection error";
    }
    else {
        $db-> query("SET CHARACTER SET utf8");
    }
?>