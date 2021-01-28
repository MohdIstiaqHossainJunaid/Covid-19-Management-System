<?php 
    require_once "checksession.php";
    require_once "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details of the Patients</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: 'Julius Sans One', sans-serif;
        font-size: 20px;
      }
    </style>
<body>
    <div class="well">
        <a href="logout.php" class="pull-right btn btn-danger">Logout</a>
        <a href="./history.php"><button>HISTORY</button></a>
        
    </div>
<section class="contrainer-fluid">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="image/shek.png" width="100%" alt="slide1" style="height: 300px">
    </div>

    <div class="item">
      <img src="image/covid.png" width="100%" style="height: 300px" alt="Chicago">
    </div>

    <div class="item">
      <img src="image/ss3.jpeg" width="100%" style="height: 300px" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br><br>
</section>
</div>

</section>
            
    <section class="container-fluid bg-warning">
        <div class="container bg-primary" style="padding: 30px;">
            <table class="table table-bordered ">
                <tr class="text-dark">
                    <th>Bed No : </th>
                    <th>Firstname</th>
                    <th>Last Name :</th>
                    <th>Age</th>
                    <th>Diseases</th>
                    <th>patient_condition</th>
                    <th>Medicine</th>
                </tr>
    <?php 
        $sqlQuery = "SELECT * FROM nurse join patient_status ON nurse.bed = patient_status.bed";
        $sqlResult = mysqli_query($con, $sqlQuery);
        if ($sqlResult) {
            
        while($row = mysqli_fetch_assoc($sqlResult)){
            
    ?>
            <tr>
                <td><?php echo $row['bed'] ?></td>
                <td><?php echo $row['firstname'] ?></td>
                <td><?php echo $row['lastname'] ?></td>
                <td><?php echo $row['age'] ?></td>
                <td><?php echo $row['dieseases'] ?></td>
                <td><?php echo $row['patient_condition'] ?></td>
                <td><?php echo $row['medicine'] ?></td>
                <td><a class="btn btn-danger" href="./backend/delete.php?bed=<?php echo $row['bed'] ?>">DELETE</a></td>
            </tr>
    <?php
        }
    }else{
        echo 'no record';
    }
    ?>
            <br>
        </table>
    
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>