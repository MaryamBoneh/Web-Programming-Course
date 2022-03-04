<?php
    include "database.php";

    mysqli_query($connection, "DELETE FROM contact");

    header("Location: index.php");

?>