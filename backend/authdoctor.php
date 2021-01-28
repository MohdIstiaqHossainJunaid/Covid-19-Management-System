<?php
    require_once "../connection.php";
    $user_id = $_POST["user"];
    $pass = $_POST["pass"];

    $sqlQuery = "SELECT * FROM doctor_info WHERE id ='$user_id' ";
    $sqlResult = mysqli_query ($con, $sqlQuery);
    $rowNumber = mysqli_num_rows ($sqlResult);
    echo "Row number is ".$rowNumber;

    if ($rowNumber != 1)
    {
        $msg = "<span style='color:red'>Invalid id</span>";
        header("location:../doctorlogin.php?err=".$msg);
    }
    else if ($rowNumber == 1){
        $row = mysqli_fetch_assoc($sqlResult);
        if( $row['pass'] == $pass){
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['fname'];
            header("location:../doctor.php");
        }
        else{
            $msg = "<span style='color:red'>Invalid password</span>";
            header("location:../doctorlogin.php?err=".$msg);
        }
    }
    else{
        echo "Error";
    }
    
    

?>