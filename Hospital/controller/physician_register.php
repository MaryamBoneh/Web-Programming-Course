<?php 
    include "../model/database.php";
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    $name = $_POST["NAME"];
    $expertise = $_POST["EXPERTISE"];
    $np = $_POST["NP"];
    $phone = $_POST["PHONE"];
    $password = $_POST["PASSWORD"];
    $confirm_pass = $_POST["CONFIRM_PASSWORD"];

    if($password == $confirm_pass){

        $physician_count=$db->query("SELECT * FROM physician WHERE NP_CODE='$np'")->num_rows;
        if($physician_count == 0)
        {
            $db->query("INSERT INTO physician (NAME, EXPERTISE, NP_CODE, PHONE_NUMBER, IMAGE, PASSWORD) VALUES('$name','$expertise','$np','$phone', '', '$password')");
            $_SESSION["message"] = "Successfull Register";
            $_SESSION["message_type"] = "success";
            $_SESSION["physician_code"] = $np;
            $_SESSION["login_status"] = true;
            echo "<script type='text/JavaScript'>
            localStorage.setItem('physician_code', $np);
            </script>"
            ;
            header("Location:../view/physician_panel.php");
        }
        else
        {
            $_SESSION["message"]="This np_code is already exist" ;
            $_SESSION["message_type"]="error";
            header("Location:../view/physician_login_register.php");
        }

    }
    else
    {
        $_SESSION["message"] = "Invalid password";
        $_SESSION["message_type"] = "error";
        header("Location:../view/physician_login_register.php");
    }

?>