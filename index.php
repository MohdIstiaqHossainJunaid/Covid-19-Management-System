<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19 Hospital Management System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  
  .carousel-inner img {
    width: 100%;
    height: 90vh;
  }
  </style>
    </style>
  <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: 'Julius Sans One', sans-serif;
        font-size: 48px;
      }
    </style>
</head>
<body class="bg-info">
    <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/covid191.jpg" alt="Helpers" width="1100" height="500">
      <div class="carousel-caption">
        <h3>COVID-19</h3>
        <p>A new world under pandemic</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/covid192.jpg" alt="Relax" width="1100" height="500">
      <div class="carousel-caption">
         <h3>Survival</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/covid193.jpg" alt="Tension-free" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Hope</h3>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<p style="text-align: center;">COVID-19 MANAGEMENT SYSTEM<br><br></p>
    <div class="well">
        <h2 class="text-center text-success"><img class="pull-left" style="border-radius: 50px;width: 10%" src="image/img1.jpg" alt="">  
    </div>
    <div class="contrainer ">
        <div class="row " >
            <div class="col-md-4 text-center well" style="min-height: 200px">
                <a class="btn btn-primary" href="nurselogin.php" style="margin: 67px">Nurse Portal</a>
            </div>
            <div class="col-md-4 text-center well" style="min-height: 200px">
                <a class="btn btn-warning" href="doctorlogin.php" style="margin: 67px">Doctor Portal</a>
            </div> 
            <div class="col-md-4 text-center well" style="min-height: 200px">
                <a class="btn btn-success" href="adminlogin.php" style="margin: 67px">Admin Portal</a>
            </div>    
        </div>
    </div>
    
    
    
    <?php 
    
        if (isset($_GET['msg'])){
            echo $_GET['msg'];
        }
    ?>
</body>
</html>