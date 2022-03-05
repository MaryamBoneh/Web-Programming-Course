<?php

    include "database.php";

    $porsesh_table = $db-> queriy("SELECT * FROM questions WHERE ID = 1");
    $porsesh = $porsesh_table-> fetch_assoc();

    $pasokh_table = $db-> queriy("SELECT * FROM answers WHERE Q_ID = 1");


    // header("Location: index.php");
?>