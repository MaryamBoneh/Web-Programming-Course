<?php 

    include "../model/database.php";
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    $np_code = $_POST["NP_CODE"];
    $password = $_POST["PASSWORD"];
    $result = $db->query("SELECT * FROM physician WHERE NP_CODE = '$np_code' AND PASSWORD = '$password'");
    $check_npcode = $db->query("SELECT * FROM physician WHERE NP_CODE = '$np_code'");

    $physician_count = $result->num_rows;
    $npcode_count = $check_npcode->num_rows;

    if($physician_count == 1)
    {
        echo "<script type='text/JavaScript'>
            localStorage.setItem('physician_code', 3);
            </script>"
        ;
        $_SESSION["login_status"] = true;
        $_SESSION["physician_code"] = $np_code;

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