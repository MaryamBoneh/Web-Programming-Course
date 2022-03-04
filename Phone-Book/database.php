<?php
    $connection = mysqli_connect("localhost", "root", "root", "PhoneBook");

    if (mysqli_connect_errno() == 0) {
        
    }
    else {
        print(mysqli_connect_error());
    }
?>