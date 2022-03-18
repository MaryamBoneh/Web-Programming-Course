<?php

    include "database.php";
    // $PARENT_ID = 1;
    $PARENT_ID = $_POST["p_id"];
    $sections_table = $db-> query("SELECT * FROM StorySections WHERE PARENT = $PARENT_ID");
    // $section = $sections_table-> fetch_assoc();

    // $pasokh_table = $db-> query("SELECT * FROM answers WHERE Q_ID = 1");
    
    // header("Location: index.php");
?>

<html lang="fa" dir="rtl">
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
    
    <body>
        <div class="container d-flex justify-content-center align-items-center mt-5">
            <div class="row mt-5">
            <?php foreach($sections_table as $section): ?>
                <div class="card soal" style="width: 80%; margin: 1% 0">
                    <div class="card-body">
                        <p class="card-text">
                            <div class="">
                                <span class="">
                                    <?php echo $section["TEXT"];?>
                                </span>
                            </div>
                        </p>
                        <form action="story.php" method="post">
                            <input type="text" name="p_id" class="d-none" value="<?php  echo $section["ID"]; ?>">
                            <button type="submit" class="btn btn-success">بعدی</button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>