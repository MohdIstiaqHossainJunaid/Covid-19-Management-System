<?php
    
    require_once "../checksession.php";
    
     $bed = $_GET['bed'];
     
    require_once "../connection.php";
    $sql = "SELECT *FROM nurse WHERE bed = $bed";
    $mysql = mysqli_query ($con, $sql);
    $row = mysqli_fetch_assoc($mysql); 
    $firstname = $row['firstname'];
    $lastname =$row['lastname'];
    $age = $row['age'];
    $dieseases = $row['dieseases'];
    $sql = "INSERT INTO patient_history VALUES ('$firstname','$lastname','$age','$dieseases') ";
    $mysql = mysqli_query ($con, $sql);

  $sql = "DELETE FROM nurse WHERE bed = $bed";
  $mysql = mysqli_query ($con, $sql);   

  echo "DELETED the details of bed no: $bed<br>";
  echo "Restoring the data in the database";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href = "../admin.php"> BACK </a>
</body>
</html>