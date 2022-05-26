<?php
    $posts = $db->query("SELECT * users.ID AS karbar_id, posts.ID AS post_id FROM posts INNER JOIN users ON posts.USER_ID = users.ID ORDER BY TIME DESC");

    $posts_array = array();
    foreach ($posts as $post)
    {
        $post_id = $post["post_id"];
        $post["likes"] = $db->query("SELECT COUNT(*) AS count FROM likes WHERE post_id = $post_id")->fetch_assoc();
        $post["comments"] = $db->query("SELECT * FROM comments INNER JOIN users ON comments.USER_ID = users.ID WHERE POST_ID = $post_id ORDER BY TIME DESC");
        $posts_array[] = $post;
    }

    require "maryamgram/view/home.php";
?>