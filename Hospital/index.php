<?php
    session_start();
    $request = $_SERVER["REQUEST_URI"];
    // $request = str_replace("/Web-Programming-Course/Hospital",, $request);
    date_default_timezone_set('iran/tehran');
    
    switch ($request)
    {
        case("/Web-Programming-Course/Hospital/"):
            require __DIR__ . "/view/index.php";
            break;

        case("Web-Programming-Course/Hospital/home.php"):
            if ($_SESSION["login_status"] == null && $_SESSION["login_status"] == false){
                require __DIR__ . "/controller/index.php"; 
            }
            else{
                require __DIR__ . "/controller/home.php";   
            }
            break;


        default:
            require __DIR__ . "/view/404.php";
            break;
    }
?>
