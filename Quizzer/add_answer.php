<?php

    include "database.php";

    $q_text = $POST['q_text'];

    $db-> query("INSERT INTO question(TEXT) VALUES ($q_text)");
    $q_id = $db->insert_id();

    $true_answer_index = 

    foreach ($POST["answer"] as $index=>$answer) {
        $db-> query("INSERT INTO answers(Q_ID, IS_TRUE, TEXT) VALUES ($q_id, '', $q_text)");
    }
?>