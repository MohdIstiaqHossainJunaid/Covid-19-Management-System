<html>

<body>

<?php

include "connection.php"; 
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

if(isset($_POST['save']))

 {

 	$first_name = $_POST['fname'];
	 $last_name = $_POST['lname'];
	 $age = $_POST['age'];
	 $des = $_POST['des'];
	 $bed = $_POST['bed'];
	 $status = $_POST['status'];
	if($first_name == '' || $last_name == '' || $age == '' || $des == '' || $bed == '' || $status == ''){
		$msg = "<span style='color:red'>Fill up the form</span>";
		header("location:./nurse.php?msg=".$msg);
		return;
	}
    $sql="INSERT INTO nurse

VALUES

('$first_name','$last_name','$age','$des', '$bed')";
echo "GG";
 
if(mysqli_query($con, $sql)){ 
	$sql = "INSERT INTO patient_status VALUES('$bed', '$status', 'Not prescribed')";
	echo $sql;
	if(mysqli_query($con, $sql)){
		$msg = "<span style='color:green'>added successfully</span>";
         header("location:./nurse.php?msg=".$msg);
	}
} else{
    $msg = "<span style='color:red'>This bed is already occupied</span>";
    header("location:./nurse.php?msg=".$msg);
}

 
// Close connection
mysqli_close($con);
}
?>

</body>

</html>

 