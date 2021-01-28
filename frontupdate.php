<?php 
    require_once "checksession.php";
    require_once "connection.php";
    $bed = $_GET['bed']; 
    $sqlCommand = "SELECT * FROM patient_status WHERE bed = $bed";
    // echo $sqlCommand;
    $sqlResult = mysqli_query($con, $sqlCommand);
    // echo $sqlResult;
    $rowCount = mysqli_num_rows($sqlResult);
    if($rowCount != 1){
        echo "Somethiong went wrong!!!";
        return;
    }
    $row = mysqli_fetch_assoc($sqlResult);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: 'Julius Sans One', sans-serif;
        font-size: 20px;
      }
    </style>
</head>
<body>
     <a href = "./doctor.php"> BACK </a> 
    <form action="./backend/update.php" method= 'post'>
        BED: <?php echo $row['bed']?><br>
        <input type="hidden" name = 'bed' value = "<?php echo $row['bed'] ?>">
        Status: <input type="text" name = "status" value = "<?php echo $row['patient_condition'] ?>" required><br>
        Medicine: <input type="text" name = 'medicine' value = "<?php echo $row['medicine'] ?>" required> <br>
        <button>Update</button>
        <?php
            if(isset($_GET['msg'])){
                echo $_GET['msg'];
            }
   
        ?>
    </form>
</body>
</html>