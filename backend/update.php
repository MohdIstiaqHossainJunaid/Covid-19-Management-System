<?php 
    require_once "../checksession.php";
    require_once "../connection.php";
    $bed = $_POST['bed'];
    $condition = $_POST['status'];
    $medicine = $_POST['medicine'];

    $sql = "UPDATE patient_status SET patient_condition = '$condition', medicine = '$medicine' WHERE bed = $bed";
    $sqlResult = mysqli_query($con, $sql);
    echo $sql;
    if($sqlResult){
        $msg = "<span style='color:green'>Successfully updated</span>";
        header("location:../frontupdate.php?bed=$bed&msg=".$msg);
    }
    else{
        $msg = "<span style='color:red'>Failed to update</span>";
        header("location:../frontupdate.php?bed=$bed&msg=".$msg);
    }


?>