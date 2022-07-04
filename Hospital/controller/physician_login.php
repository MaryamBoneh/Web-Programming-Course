<?php 

    include "../model/database.php";
    if (session_status() !== PHP_SESSION_NONE) {
        session_destroy();
    }
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $np_code = $_POST["NP_CODE"];
    $np_code = strval($np_code);  // $var1 is a string

    $password = $_POST["PASSWORD"];
    $result = $db->query("SELECT * FROM physician WHERE NP_CODE = $np_code AND PASSWORD = $password");
    $check_npcode = $db->query("SELECT * FROM physician WHERE NP_CODE = $np_code");
    
    $physician_count = $result->num_rows;
    $npcode_count = $check_npcode->num_rows;

    if($physician_count === 1)
    {
        $_SESSION["login_status"] = true;
        $_SESSION["physician_code"] = $np_code;

        echo "<script type='text/JavaScript'>
                localStorage.setItem('physician_code', $np_code);
            </script>"
        ;
        header("Location:../view/physician_panel.php");
    }
    else
    {
        if($npcode_count == 0){
            $_SESSION["message"] = "Please register first";
            $_SESSION["message_type"] = "error";
            header("Location:../view/physician_login_register.php");
        }
        else
        {
            $_SESSION["message"] = "incorrect password";
            $_SESSION["message_type"] = "error";
            header("Location:../view/physician_login_register.php");
        }
    }

?>