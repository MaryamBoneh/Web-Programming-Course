<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="flag"/>
    <meta name="auther" content="0"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="style.css" />
    <title>US Flag</title>
</head>
<body>
    <?php for($i = 0; $i < 7; $i++):?>
        <div style="width: 100%; height: 7vh; background-color: #bd2a2a;"></div>
        <div style="width: 100%; height: 7vh; background-color: #fff;"></div>
    <?php endfor; ?>
    <div style="width: 100%; height: 7vh; background-color: #bd2a2a;"></div>

    <div style="position: absolute; top:0px; left: 0px; width: 45%; height: 50vh; background-color: #fff;">
        <?php for($i = 0; $i < 54; $i++):?>
            <span style="position: absolute; top:<?php print(rand(1, 90));?>%; left: <?php print(rand(1, 90));?>%;"
            id="heart" class="material-icons">star</span>
        <?php endfor; ?>
    </div>
</body>
</html>