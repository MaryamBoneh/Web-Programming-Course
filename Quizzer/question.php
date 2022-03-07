<?php

    include "database.php";

    $porsesh_table = $db-> query("SELECT * FROM question WHERE ID = 1");
    $porsesh = $porsesh_table-> fetch_assoc();

    $pasokh_table = $db-> query("SELECT * FROM answers WHERE Q_ID = 1");


    // header("Location: index.php");
?>

<html lang="fa" dir="rtl">
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
        <title>Question</title>
    </head>
    
    <body class="q_background">
        <div class="container d-flex justify-content-center align-items-center mt-5">
            <div class="row mt-2">
                <div class="card soal" style="width: 24rem; margin: 40% 0">
                    <div class="card-body">
                        <h5 class="card-title my-3">سوال <?php echo $porsesh["ID"]; ?>  از 24</h5>
                        <h6 class="card-subtitle mb-2 text-muted" style="color: white;"><?php echo $porsesh["TEXT"]; ?></h6>
                        <p class="card-text">
                            <?php foreach($pasokh_table as $pasokh): ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        <?php echo $pasokh["TEXT"]; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </p>
                        <form action=""><button type="submit" class="btn btn-success">بعدی</button></form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="js/bootstrap.js"></script>

    </body>
</html>