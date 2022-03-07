<?php
    include "database.php";

    $porseh_ha = $db-> query( "SELECT * FROM question");
    $total = $porseh_ha->num_rows;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="question"/>
    <meta name="keywords" content="quiz"/>
    <meta name="auther" content="0"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <title>Quizzer</title>
</head>

<body dir="rtl">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Quizzer</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 d-flex justify-content-center">
                <div class="card p-4" style="width: 50%;">
                    <div class="card-body">
                        <h5 class="card-title py-3">به Quizzer خوش اومدی
                            🌹
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            تعداد سوالات این آزمون 
                            <?php echo $total; ?>
                            تا می باشد
                        </h6>
                        <p class="card-text">
                            زمان آزمون: 
                            <?php echo $total / 2; ?>
                            دقیقه
                        </p>
                        <a href="question.php" class="btn btn-success mt-3 w-100">
                            بزن بریم!
                        </a>
                    </div>
                </div>
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