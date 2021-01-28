<?php
    require_once "./checksession.php";
    require_once "./connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </style>
  <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: 'Julius Sans One', sans-serif;
        font-size: 20px;
      }
    </style>
</head>
<body>
    <div class="well">
        <h2 class="text-success h4 ">patient History<a class="btn btn-default pull-right" href = "./admin.php" class="btn btn-default"> BACK </a></h2>
        
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
    <section class="container-fluid bg-warning">
        <div class="container bg-success" style="padding: 30px;">
            
            <table class="table table-bordered table-striped" >
                <tr class="bg-warning">
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Age</th>
                    <th>Diseases</th>
                </tr>
    <?php 
        $sql = "SELECT *FROM patient_history";
        $mysql= mysqli_query($con, $sql);
        while($row= mysqli_fetch_assoc($mysql)){
    ?>
                <tr>
                    <td> <?php echo $row['fname']   ?></td>
                    <td> <?php echo $row['lname']   ?></td>
                    <td> <?php echo $row['age']   ?></td>
                    <td> <?php echo $row['disease']   ?></td>
                </tr>
                    <?php       
        }

    ?>
            </table>
        </div>
    </section>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>