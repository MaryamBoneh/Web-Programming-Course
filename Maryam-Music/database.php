<?php
    $db = new mysqli("localhost", "root", "root", "Maryam-Music");
    // $db = new mysqli("localhost", "id18615416_maryam", "n7~SjeYRC~Z(Eb&a", "id18615416-music");

    if ($db->connect_error) {
        echo $db->connect_error;
        echo "Connection error";
    }
    else {
        $db-> query("SET CHARACTER SET utf8");
    }
?>