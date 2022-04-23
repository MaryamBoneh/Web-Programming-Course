<?php
    include "database.php";

    $name = $_POST["NAME"];
    $id = $_POST["ID"];
    $artist_id = $_POST["ARTIST"];
    
    if($_FILES["IMAGE"]["name"] == ""){
        $db->query("UPDATE albums SET NAME = '$name', ARTIST = $artist_id WHERE ID = $id");
        header("Location: admin_albums.php");
    }
    else {
        if($_FILES["IMAGE"]["size"] > 3000000) {
            echo "The file size is large";
            header("Location: admin_albums.php");
        }
        else {
            $image_name = $_FILES["IMAGE"]["name"];
            $db->query("UPDATE albums SET NAME = '$name', IMAGE = '$image_name', ARTIST = $artist_id WHERE ID = $id");
            
            move_uploaded_file($_FILES["IMAGE"]["tmp_name"] ,$image_name);
            header("Location: admin_albums.php");
        }
    }

?>