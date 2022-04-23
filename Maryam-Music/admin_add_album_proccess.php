<?php
    include "database.php";


    $name = $_POST["name"];
    $artist_id = $_POST["artist-id"];

    if($_FILES["image"]["size"] > 300000){
        echo"The file size is large";
        header("Location:admin_add_album.php");
    }
    else{
        $image = "images/albums/" . $_FILES["image"]["name"];

        $db->query("INSERT INTO albums (name, image, artist_id) VALUES ('$name', '$image', $artist_id)");

        move_uploaded_file($_FILES["image"]["tmp_name"] ,$image);
        header("Location:admin_albums.php");
    }
?>