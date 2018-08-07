<?php
 
session_start();
$userdata= $_SESSION['userdisplay'] ? $_SESSION['userdisplay'] : array();
//only see //$userdata= $_SESSION['userdisplay'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WELCOME PAGE TRIP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">        
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>        
<link rel="stylesheet" type="text/css" href="display.css">

  </head>
<body>
   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Trip </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="off"><a href="display.php">Home</a></li>
      <li><a href="welcomeform.php">trip crate</a></li>
      <li><a href="#">traveller</a></li>
      <li><a href="expense.php">expenses</a></li>

         <form class="navbar-form navbar-left" action="">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form> 

        </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-out"></span > <?php echo"Welcome ".$userdata['name'];?></a></li>
       <li><a href="loginform.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
   
<div class="container">
  <div class="col-md-12">
    <div class="">
   <?php
      include('conn.php');  
  $query= "select T_name, T_start, T_end, T_image,T_crateuid from trip1";
$s=mysqli_query($conn, $query);
while ($row=mysqli_fetch_array($s)) 
{
  ?>
  <?php
  echo "<div class='row col-md-4'>";
  $image = $row['T_image']; 
  echo "<img src=\"image/$image\" alt=\"Nature\" width=\"300px\" height=\"180px\">";
  echo "<br />name:".$row['T_name'];?> <br>
  <?php
  echo "start date:".$row['T_start']; ?> <br>
  <?php
  echo "end date:".$row['T_end']; ?> <br>
  <?php
  echo "user id:".$row['T_crateuid']; ?> <br>
  <?php
  echo "<a href='expense.php'> add expense </a> </div>   "; 
  }
  ?>
</div>
</div>
</body>
</html>