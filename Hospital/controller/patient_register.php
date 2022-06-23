<?php 
    include "../model/database.php";

    $name = $_POST["NAME"];
    $expertise = $_POST["EXPERTISE"];
    $national_code = $_POST["NATIONAL_CODE"];
    $i_code = $_POST["INSURANCE_CODE"];

    if($password == $confirm_pass){

        $patient_count=$db->query("SELECT * FROM patient WHERE INSURANCE_CODE='$national_code'")->num_rows;
        if($patient_count == 0)
        {
            $db->query("INSERT INTO patient(NAME,NATIONAL_CODE,INSURANCE_CODE) VALUES('$name','$national_code','$i_code')");
            $_SESSION["message"] = "Successfull Register";
            $_SESSION["message_type"] = "success";
            header("Location:../view/patient_panel.php");
        }
        else
        {
            $_SESSION["message"]="This np_code is already exist" ;
            $_SESSION["message_type"]="error";
            header("Location:../view/patient_login_register.php");
        }

    }
    else
    {
        $_SESSION["message"] = "Invalid password";
        $_SESSION["message_type"] = "error";
        header("Location:../view/patient_login_register.php");
    }

?>