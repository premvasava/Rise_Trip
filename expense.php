<?php
 
session_start();
$userdata= $_SESSION['userdisplay'] ? $_SESSION['userdisplay'] : array();
//only see //$userdata= $_SESSION['userdisplay'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> expense page</title>
    
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
  <h2>Add expense</h2>
  
     <div class="form-group">
      <label for="tripname">expense name</label>
      <input type="text" class="form-control" id="text" placeholder="Enter expense name" name="tripname" required>
    </div>
    
    <div class="form-group">
      <label for="tripstart">expense date:</label>
      <input type="date" class="form-control" id="text" placeholder="expense date" name="tripname" required>
      </div>
    

     <div class="form-group">
      
      <label for="tripend">catogoery</label>
      <select> <option><input type="text" class="form-control" id="text" placeholder="select cetogery" name="tripname" required>
      </option></select>
      </div>

      <div class="form-group">
      <label for="tripend">catogoery name</label>
      <input type="text" class="form-control" id="text" placeholder="Enter catogoery name" name="tripname" required>
      </div>

    <div class="form-group">
      <label for="tripimg" width="50%" height="50%"> amount</label>
      <input type="text" class="form-control" id="text" placeholder="Enter amount" name="tripname" required>
      </div>
      
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Done</button>
        <div class="dropdown">
      

</body>
</html>