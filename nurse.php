<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: 'Julius Sans One', sans-serif;
        font-size: 20px;
      }
    </style>

    
</head>
   

<body>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/nurse1.jpg" alt="Helpers" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Helpers</h3>
        <p>We are there for you every step of the way</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/nurse2.jpg" alt="Relax" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Relax</h3>
        <p>As long as we are here, you can relax</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/nurse3.jpg" alt="Tension-free" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Tension-free</h3>
        <p>We vow to make your time here as pleasant as possible</p>
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

<h1>Welcome to Nurse portal</h1>
<h1>Enter the information of the patient</h1>


<form action="nurseinsert.php" method="post">
Bed Number: <input type="number"  name="bed"autocomplete="off" class="form-control"/><br><br>

First name: <input type="text" name="fname" class="form-control"/><br><br>

Last name: <input type="text" name="lname" autocomplete="off" class="form-control"/><br><br>

Age:  <input type="number"  name="age" autocomplete="off" class="form-control"/><br><br>
Diseases: <input type="text" name="des" autocomplete="off" class="form-control"/><br><br>
Status: <input type="text" name="status" autocomplete="off" class="form-control"/><br><br>

<input type="submit" name = 'save'/>
<h3><?php 
            if(isset($_GET['msg'])){
                echo $_GET['msg'];
            }
        ?></h3>
        
</form>
<a href="./stat1.php"><button>Check the whole situation</button><br><br></a>
<a href = "./index.php"> <button>BACK</button> </a>
</body>
</html>
