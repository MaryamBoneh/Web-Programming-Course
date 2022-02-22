<?php
    $connection = mysqli_connect("localhost", "root", "root", "Boneh-Family");

    if (mysqli_connect_errno() == 0) {
        print("connected");
    }
    else {
        print("Error connecting");
        print(mysqli_connect_error());
    }
?>