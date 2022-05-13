<?php
    session_start();
    $request = $_SERVER["REQUEST_URI"];
    // $request = str_replace("/Web-Programming-Course/Maryamgram",, $request);
    
    switch ($request)
    {
        case("/Web-Programming-Course/Maryamgram/"):
            require __DIR__ . "/view/index.php";
            break;

        case("Web-Programming-Course/Maryamgram/home.php"):
            if ($_SESSION["login_status"] == null && $_SESSION["login_status"] == false){
                require __DIR__ . "/controller/index.php"; 
            }
            else{
                require __DIR__ . "/controller/home.php";   
            }
            break;

        case("/Web-Programming-Course/Maryamgram/profile.php"):
            require __DIR__ . "/controller/profile.php";
            break;

        case("/Web-Programming-Course/Maryamgram/login"):
            require __DIR__ . "/controller/login.php";
            break;

        case("/Web-Programming-Course/Maryamgram/register"):
            require __DIR__ . "/controller/register.php";
            break;

        case("/Web-Programming-Course/Maryamgram/posts"):
            require __DIR__ . "/controller/posts.php";
            break;

        case("/Web-Programming-Course/Maryamgram/logout.php"):
            require __DIR__ . "/controller/logout.php";
            break;

        default:
            require __DIR__ . "/view/404.php";
            break;
    }
?>
