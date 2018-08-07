<?php
 session_start();

$userdata= $_SESSION['userdisplay'] ? $_SESSION['userdisplay'] : array();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>welcome trip</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">        
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>        

</head>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Trip </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="off"><a href="display.php">Home</a></li>
      <li ><a href="welcomeform.php">trip crate</a></li>
      <li><a href="#">traveller</a></li>
      <li><a href="expense.php">expenses</a></li>
       <form class="navbar-form navbar-left" action="/action_page.php">
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
   
 <form action="tripcrate.php"method="post">  

<div class="container">
  <h2>trip create</h2>
  
     <div class="form-group">
      <label for="tripname">trip name</label>
      <input type="text" class="form-control" id="text" placeholder="Enter trip name" name="tripname" required>
    </div>
    
    <div class="form-group">
      <label for="tripstart">start date:</label>
      <input type="date" class="form-control" id="date" placeholder="select date" name="tripstart">
      </div>
    
     <div class="form-group">
      <label for="tripend">start date:</label>
      <input type="date" class="form-control" id="date" placeholder="select date" name="tripend">
      </div>
    
    <div class="form-group">
      <label for="tripimg" width="50%" height="50%"> trip image</label>
      <input type="file" class="form-control" value="image" placeholder="select image" name="tripimage">
      </div>
      
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Add member</button>
    
    
    <div class="form-group">
    <button type="submit" class="btn btn-primary btn-block col-md-3 form-control">Submit</button>
     </div>
     
  <!--  Modal -->
      <div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
      
              <p>Add member</p>

<select id="framework" name="framework[]" multiple class="form-control" >
          <?php
              include('conn.php');
              $tabledata="select U_id, U_email FROM user";
              $result=mysqli_query($conn,$tabledata);
            while($record=mysqli_fetch_array($result))  
              {
          ?> 
          <option value="<?php echo $record['U_id']; ?>"> <?php echo $record['U_email']; ?> </option>
               <?php      
              }

                  ?></select> 
             
</div>
  
        <div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<input type="submit" name="create" value="create" >
   </div>
      </div>
      
    </div>
  </div>
  
</div>
      

     </form>
         <?php
    
 //  echo"welcome". $userdata['name'];
    ?>


</body>
</html>