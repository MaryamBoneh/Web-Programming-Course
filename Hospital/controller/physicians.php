<?php 
    include "../model/database.php";
    $physicians = $db->query("SELECT * FROM physician"); 
    require "../view/physicians.php";
?>