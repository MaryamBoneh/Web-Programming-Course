<?php
    require "view/home.php";
    $posts = $db->query("SELECT * FROM posts INNER JOIN users ON posts.USER_ID = users.ID");
?>