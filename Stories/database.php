<?php
    $db = new mysqli("localhost", "id18615416_maryamboneh", "uY75uF1/1XKn|+>A", "id18615416_stories");

    if ($db->connect_error) {
        echo $db->connect_error;
        echo "Connection error";
    }
    else {
        $db-> query("SET CHARACTER SET utf8");
    }
?>