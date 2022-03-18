<?php
    include "database.php";

    $stories = $db-> query( "SELECT * FROM Story");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="story"/>
    <meta name="keywords" content="maryam story"/>
    <meta name="keywords" content="shahrzad story"/>
    <meta name="auther" content="0"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <title>مریم قصه‌گو</title>
</head>

<body dir="rtl">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">مریم قصه‌گو</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="container">
        <h3 class="py-3 my-5 text-center text-light">به سایت قصه‌گوی مریم خوش اومدی🌹📚</h3>
        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-9 d-flex justify-content-around">
                <?php foreach($stories as $story): ?>
                    <div class="card p-3 rounded" style="width: 20%;">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-center">
                                داستان <?php echo $story["NAME"]; ?>
                            </h6>
                            <form action="story.php" method="post">
                                <input type="text" name="p_id" class="d-none" value="0">
                                <button type="submit" class="btn btn-success mt-3 w-100">
                                    بزن بریم!
                                </button>
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>

<script src="js/bootstrap.js"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous">
  </script>
</html>