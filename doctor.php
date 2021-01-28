<?php 
    require_once "checksession.php";
    require_once "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner img {
    width: 100%;
    height: 95vh;
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
<body style="background-color: white;">
    <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/doctor1.jpg" alt="chance" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chance</h3>
        <p>Even a single percent is a lot for us</p>
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/doctor2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Stop</h3>
        <p>Be mindful of your own actions and protect your loved ones</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/doctor3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Heart</h3>
        <p>If there is a will, there is aw way</p>
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

    <p>Hi i am Dr.<?php echo $_SESSION['name'] ?></p><div><a href="logout.php">Logout</a></div>

    <table>
        <!--<th>
            <td>Bed</td><td>First Name</td><td>Last Name</td><td>Age</td><td>Diese</td><td>Condition</td><td>Medicine</td>
        </th> -->
    </table>
    <?php 
        $sqlQuery = "SELECT * FROM nurse join patient_status ON nurse.bed = patient_status.bed";
        $sqlResult = mysqli_query($con, $sqlQuery);
        while($row = mysqli_fetch_assoc($sqlResult)){
            
    ?>
        <!-- <tr>
            <td><?php echo $row['bed'] ?></td> <td><?php echo $row['firstname'] ?></td><td><?php echo $row['lastname'] ?></td><td><?php echo $row['age'] ?></td><td><?php echo $row['dieseases'] ?></td><td><?php echo $row['patient_condition'] ?></td><td><?php echo $row['medicine'] ?></td><td><a href="">Update condition</a></td>
        </tr> -->
        <table>
            <tr>
                <td>Bed No : </td><td><?php echo $row['bed'] ?></td>
            </tr>
            <tr>
                <td>First Name : </td><td><?php echo $row['firstname'] ?></td>
            </tr>
            <tr>
                <td>Last Name : </td><td><?php echo $row['lastname'] ?></td>
            </tr>
            <tr>
                <td>Age : </td><td><?php echo $row['age'] ?></td>
            </tr>
            <tr>
                <td>Diseases : </td><td><?php echo $row['dieseases'] ?></td>
            </tr>
            <tr>
                <td>Condition : </td><td><?php echo $row['patient_condition'] ?></td>
            </tr>
            <tr>
                <td>Medicine : </td><td><?php echo $row['medicine'] ?></td>
            </tr>
            <tr>
                <td></td><td><a href="./frontupdate.php?bed=<?php echo $row['bed'] ?>">Update Status</a></td>
            </tr>
            <br>
        </table>
    <?php
        }
        
    
    ?>
    <a href="./statdoctor2.php">Check the whole situation</a>

</body>
</html>